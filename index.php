<?php
  session_start();
  if (isset($_SESSION['usuario']));
  //header('Location:/login/');
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title> Inicio | Crescer Contabilidade</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>


<body>
  <!--nav class="white" role="navigation">
    <div class="nav-fixed container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">home</i></a>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">A Crescer</a></li>
        <li><a href="#serviços">Serviços</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Representantes</a></li>
        <li><a href="#contato">Contatos</a></li>
        <li><a href="#">Intranet</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">A Crescer</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">apps</i></a>
    </div>
  </nav-->
  <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper white">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Inicio</a></li>
          <li><a href="#">A Crescer</a></li>
          <li><a href="#serviços">Serviços</a></li>
          <li><a href="#">Clientes</a></li>
          <li><a href="#">Representantes</a></li>
          <li><a href="#contato">Contatos</a></li>
        </ul>
      </div>
    </nav>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m10 center">
            
            
            <img src="img/logo1.png" class="responsive-img" alt=" Logomarca Crecer Contabilidade">
            
        </div>

        
      </div>

    </div>
  </div>

      
  <!-- FIM DOS CLIENTES-->

  <footer class="page-footer teal" id='contato'>
    <div class="container ">
      <div class="row">
        <div class="col l6 s12 ">
          <h5 class="white-text">Contatos</h5>
          <p class="grey-text text-lighten-4"> 
            Teste teste teste teste
          </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>

            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!"></a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Link Úteis</h5>
          <ul>
          <li><a class="white-text" href="#!">Home 1</a></li>
            <li><a class="white-text uteis" href="#!">A Crescer</a></li>
            <li><a class="white-text uteis" href="#!">Serviços</a></li>
            <li><a class="white-text uteis" href="#!">Clientes</a></li>
            <li><a class="white-text uteis" href="#!">Representantes</a></li>
            <li><a class="white-text uteis" href="#!">Contatos</a></li>
            <li><a class="white-text uteis" href="/login/">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        By <a class="brown-text text-lighten-3" href="#">WebFinatto.com</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  
  <script src="../jquery/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
      var elem = document.querySelector('.carousel');
      var instance = M.Carousel.init(elem, options);

      // Or with jQuery

      $(document).ready(function(){
        $('.carousel').carousel();
      });
    </script>
    

  </body>
</html>
