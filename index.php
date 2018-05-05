
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
  <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper padrao-fundo">
        <a href="#" class="brand-logo padrao">
          <img src="img/logo.png" class="responsive-img logo-nav" alt="Logo">
        </a>
        <ul class="right hide-on-med-and-down ">
          <li><a href="index.php" class=" white-text">Inicio</a></li>
          <li><a href="#" class="white-text">A Crescer</a></li>
          <li><a href="serviços/" class="white-text">Serviços</a></li>
          <li><a href="clientes/" class="white-text">Clientes</a></li>
          <li><a href="representantes/" class="white-text">Representantes</a></li>
          <li><a href="contato/" class="white-text">Contatos</a></li>
        </ul>
      </div>
    </nav>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 center logo-centro">
            <div class="center-align logo">
            <img src="img/logo1.png" class="responsive-img " width="400px" alt=" Logomarca Crecer Contabilidade">
            <br><br>
            <p center> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
            <h5 class="center-align padrao">Acrescentar Conquistas, Somar Conhecimento e Adicionar Satisfação</h5>
            </div>
            <div class="row">
              <div class="row"></div>
              <div class="col m12 l12">
                <p center> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                <a  href="#sobre" class="btn-floating pulse padrao-fundo"><i class="material-icons center ">keyboard_arrow_down</i></a>
              </div>
            </div>
        </div>

        
      </div>

    </div>
  </div>
  <!-- Nova camada-->
  <div class="padrao2-fundo">
    <div id="sobre" class="section">
      <div class="row">
        <div class="col l12 m12 s12 x12">
          <h3 class="center-align">Sobre a Crescer</h3>
          <div class="container">
          Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
           e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
           de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
           só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente
           inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de 
           Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
          </div>
        </div>
      </div>
    </div>
  </div>

      
  <!-- FIM DOS CLIENTES-->

  <footer class="page-footer padrao-fundo" id='contato'>
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
