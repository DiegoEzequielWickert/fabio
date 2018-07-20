<?php
    session_start(); //inicializa o uso de  sessão
    $_SESSION['erro'] = " ";
    $erro = 100;
    $_SESSION['usuario'] = 'diego';
    $_SESSION['codigo'] = '0';

    if($_SERVER['REQUEST_METHOD']=='POST'){
        // caso tiver sido enviado  ele sai do  erro  100,  começa  a verificar  tudo de novo
        
        echo "Verificou que  tem um POST <br>";
        $erro = 0;
        
            
        if(isset($_POST['enviar'])){ // se os campos  foram preenchidos
            
            echo "Verificou que  tem um ENVIAR <br>";
            if(isset($_POST['mail'])){
                $mail =  $_POST['mail']; 
                echo "Verificou que : passouo usuario <br>";
            }else{
                $erro = 1;
                $_SESSION['erro'] = "Campo EMAIL não preenchido";
            }
            if(isset($_POST['mail'])){
                $email=   $_POST['mail']; 
                echo "Verificou que : passouo senha <br>";
            }else{
                $erro = 2;
                $_SESSION['erro'] = "Senha não preenchida, favor  verifique" ;
            }

            echo "Preparando para Consulta SQL <br>";
            if($erro == 0){
                echo "Verificou que : NÂO EXISTE ERROS <br>";
                include('conecta_db.php');
                $sql = "select usu_username as user, usu_senha as senha from t_usuario where  USU_USARNAME ='".$mail."' and USU_SENHA = '".$senha." AND USU_STATUS = 'A' ";
                echo "SQL: ".$sql;
                //$query = mysqli_query($mysqli, $sql);
                if($query){
                    $_SESSION['usuario'] = '$usarname';
                    header('Location:cliente.php?sucess=yes'); // redireciona para o index

                }else{
                    echo " ERRO CATASTROFICO";
                }
                
            }
            
        }


    }else{
        echo("Nennhum formulário foi enviado<br>");
        header('Location:cliente.php?error='.$erro); // redireciona para o  Iindex
    }


?>