<?php
    session_start(); //inicializa o uso de  sessão
    $_SESSION['erro'] = " ";
    $erro = 100;
   

    if($_SERVER['REQUEST_METHOD']=='POST'){
        // caso tiver sido enviado  ele sai do  erro  100,  começa  a verificar  tudo de novo
        $erro = 0;                    
        if(isset($_POST['enviar'])){ // se os campos  foram preenchidos
            if(isset($_POST['mail'])){
                $mail =  $_POST['mail']; 
                echo "Verificou que : passouo usuario <br>";
            }else{
                $erro = 1;
                $_SESSION['erro'] = "Campo Usuário não preenchido";
            }

            if(isset($_POST['senha'])){
                $senha = $_POST['senha']; 
                echo "Verificou que : passouo senha <br>";
            }else{
                $erro = 2;
                $_SESSION['erro'] = "Senha não preenchida, favor  verifique" ;
            }

            echo "Preparando para Consulta SQL <br>";

            if($erro == 0){
                echo "Verificou que : NÂO EXISTE ERROS <br>";
                include('../conecta_db.php');
                echo $result_usuario = "select * from t_usuario where  USU_USERNAME ='".$mail."' and USU_SENHA = '".$senha."' AND USU_STATUS = 'A' ";                                                
                $resultado_usuario = mysqli_query($mysqli, $result_usuario);
                echo $resultado = mysqli_fetch_assoc($resultado_usuario);
                    
                //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
                if(isset($resultado)){
                    $_SESSION['USU_NOME'] = $resultado['USU_USERNAME'];
                    $_SESSION['USU_CODIGO'] = $resultado['USU_CODIGO'];                    
                    $_SESSION['USU_TIPO'] = $resultado['USU_TIPO'];
                    $_SESSION['USU_EMAIL'] = $resultado['USU_EMAIL'];
                    session_destroy( $_SESSION['erro']);
                    header('Location:../painel/'); // redireciona para o index
                   
                }else{
                    $_SESSION['erro'] = "Usuário ou senha inválidos. Tente Novamente" ;                    
                    header('Location:../login/?error=yes'); // redireciona para o index
                }
                
                
            }
            
        }else{
            $_SESSION['erro'] = "Erro no nome do formulário, alguma coisa está errada.!! :-(";
            header('Location:../login/index.php?error='.$erro); // redireciona para o  Iindex    
        }


    }else{
        $_SESSION['erro'] = "Nennhum formulário foi enviado";
        header('Location:login.php?error='.$erro); // redireciona para o  Iindex
    }


?>