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
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
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
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Crescer Contabilidade</h1>
        <div class="row center">
          <h5 class="header col s12 text-blue text-darken-2"> Crescendo com  você!  </h5>
        </div>
        <div class="row center">
          <a href="#contato" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Quero entrar em contato!</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Missão</h5>

            <p class="light">
              Missão  misão misão missao missao missao missao
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container">
    <div class="row">
       <h1 id="serviços" class="header center teal-text text-lighten-2">Nossos Serviços</h1>
    <div class="col s12 center m3 l3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img "src="img/controle-gerencial.jpg">
          <span class="card-title">Controle Gerencial</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red" href="/controle-gerencial"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content ">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
         <div class="card-action">
          <a href="auditoria/">Saiba Mais</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l3">
      <div class="card">
        <div class="card-image">
          <img class="responsive-img "src="img/auditoria.png">
          <span class="card-title">Auditoria</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red" href="/controle-gerencial"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content ">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="auditoria/">Saiba Mais</a>
        </div>
      </div>
    </div>
  </div> <!-- fim do row-->
  </div> <!-- fim dos paineis-->


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contate Nós</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>
    </div>
  </div>
    <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 3"></div>
  </div>
  <!-- INICIO DOS CLIENTES-->
  
  <div class="container">
    <div class="section">

      <div class="row">
        <div id="clientes" class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Clientes</h4>
          <p class="left-align light"> Junte-se a nós, seja um cliente Feliz </p>
        </div>
      </div>

      <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
      <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
      <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
      <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
      <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
    </div>  
  
    </div>
  </div>
    
  <!-- FIM DOS CLIENTES-->

  <footer class="page-footer teal" id='contato'>
    <div class="container ">
      <div class="row">
        <div class="col l6 s12 ">
          <h5 class="white-text">Contatos</h5>
          <p class="grey-text text-lighten-4"> Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Link Úteis</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!"></a></li>
            <li><a class="white-text" href="/login/">Login</a></li>
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
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
