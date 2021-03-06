<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Faça Login</title>
    <!--materialzie css-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <style>
        body{
            background:"#f5f5f5";
       }       
   
    </style>
</head>
<body>

    <div class="row">
        <div class="col s12 m12 l4 push-l4 center">
            <div class="card login">
                <div class="escuro-fundo center card " >
                    <img src="../img/logo.png" class=" responsive-img logo-login"alt=" Logomarca Branca Crescer Contabilidade">
                </div>  
                <div class="card-content col s12 m10 offset-m1 z-depth-1">
                    <form action="verifica.php" method="POST">
                        <div class="row">
                        <?php 
                            if (isset($_SESSION['erro'])) {
                                echo "<div class='alert'>
                                    ".$_SESSION['erro']."    
                                    </div>"; 
                            }
                         ?>
                        
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="email_id" name="mail" autocomplete="off" type="text" required="required" class="validate">
                                <label for="email_id">Usuário:</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">fingerprint</i>
                                <input id="senha_id" name="senha" required="required" autocomplete="off" type="password" class="validate">
                                <label for="senha_id">Senha:</label>
                            </div>
                            <div class="row center-align">
                                <div class="g-recaptcha" data-sitekey="6LdFuU4UAAAAAG58qZKTaay8aCOTe1pmECCsQEWu">
                                    
                                </div>
                                <label>
                            </div> 
                            <br><br><br>
                            <div class="input-field col s12">
                                <input type="checkbox" name="lembre"/>
                                <span>Lembrar Senha</span>
                            </div>
                        </div>
                        <br>
                        <button class="btn-large waves-effect escuro-fundo" type="submit" id="enviar" name="enviar" style="width:100%">
                        Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="../jquery/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
</body>
</html>