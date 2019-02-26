
<?php
    session_start();
    include('../conecta_db.php');
    $p = $GLOBALS['_'.$_SERVER['REQUEST_METHOD']];

    /**
    Verifica se o índice (o campo do fomrulário ou parâmetro de url) existe dentro da global.
    */
    if (!isset($p[$campo])) {
       echo 'índice inexistente'; 

       exit;
    }
  

    if((isset($_POST['usuario'])) && (isset($_POST['senha']))  && (isset($_POST['entrar']))){ // se os campos  foram preenchidos
      $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
      $senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
      $senha = md5($senha);

    

      $result_usuario = "SELECT * FROM t_usuario WHERE USU_USERNAME = '".$usuario."'AND USU_SENHA = '".$senha."'";
      $resultado_usuario = mysqli_query($mysqli, $result_usuario);
      $resultado = mysqli_fetch_assoc($resultado_usuario);
        
      //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
      if(isset($resultado)){
        $_SESSION['USU_NOME'] = $resultado['USU_NOME'];
        $_SESSION['USU_CODIGO'] = $resultado['USU_CODIGO'];
        $_SESSION['USU_STATUS'] = $resultado['USU_STATUS'];
        $_SESSION['USU_TIPO'] = $resultado['USU_TIPO'];
        $_SESSION['USU_EMAIL'] = $resultado['USU_EMAIL'];
        $_SESSION['USU_TELEFONE'] = $resultado['USU_TELEFONE'];
        $_SESSION['USU_TIPO'] = $resultado['USU_TIPO'];
        $_SESSION['CLI_CNPJ'] = $resultado['CLI_CNPJ'];


        $result_cliente = "SELECT * FROM t_cliente";
        $resultado_cliente= mysqli_query($mysqli, $result_cliente);
        $cliente = mysqli_fetch_assoc($resultado_cliente);

        $_SESSION['CLI_CODIGO'] = $cliente['CLI_CODIGO'];
        $_SESSION['CLI_RAZAO'] = $cliente['CLI_FANTASIA']; 
        $_SESSION['CLI_LOGONOME'] = $cliente['CLI_LOGONOME'];
            
        $_SESSION['tentativas'] = $_SESSION['tentativas'] = 0;

        $insert = "INSERT INTO t_log (LOG_USERNAME, LOG_TENTATIVA, LOG_URL) VALUES ('".$usuario."', '1', '".$pagina."')";
        mysqli_query($mysqlibases, $insert);

        header("Location:".$_SESSION['p']);

       

      }else{
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //////redireciona o usuario para a página de login
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        
        if(!isset($_SESSION['tentativas'])){
          $_SESSION['tentativas'] = 1;
        }else{
          $_SESSION['tentativas'] = $_SESSION['tentativas'] + 1;  
        }          

        $insert = "INSERT INTO t_log (LOG_USERNAME, LOG_TENTATIVA, LOG_URL) VALUES ('".$usuario."', '0', '".$pagina."')";
        mysqli_query($mysqlibases, $insert);

        header("Location: login.php");
      }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Todos os campos  devem ser preenchidos";

        $insert = "INSERT INTO t_log (LOG_USERNAME, LOG_TENTATIVA, LOG_URL) VALUES ('".$usuario."', '0', '".$pagina."')";
        mysqli_query($mysqlibases, $insert);
        header("Location: login.php");
    }
    
?>