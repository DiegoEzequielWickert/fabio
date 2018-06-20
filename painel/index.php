<?php date_default_timezone_set('America/Sao_Paulo');  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Painel</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head> 
<body>
  <nav>
    <div class="nav-wrapper padrao-fundo fixed">
      <a href="#" class="brand-logo center white-text">Self v1.0 - Crescer</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        <li><a href="servico.php" class="white-text">Serviços</a></li>
        <li><a href="clientes.php" class="white-text">Clientes</a></li>
        <li><a href="representante.php" class="white-text">Representantes</a></li>
      </ul>
    </div>
  </nav>
  

  <div class="container col l10 center">
    <h5>Painel de  Gestão de Conteudo - Crescer Contabilidade</h5>
    
    <p> Sistema de  gestão Self - Crescer Contabilidade</p>
    <hr>
  </div>

  <div class=" row container">
    <div class="collection with-header col l3">
      <div class="row"></div>
      <li class="collection-header">
        <img src="../img/logo1.png" alt="Logomarca Crescer" width="100px" class="responive-img"></li>
      <div class="row"></div>
      <a href="?page=servicos" class="collection-item lista"> <i class="material-icons right small ">work</i>Serviços</a>
      <a href="?page=atividades" class="collection-item lista"> <i class="material-icons right small">work</i>Atividades</a>
      <a href="?page=clientes" class="collection-item lista"> <i class="material-icons right small">work</i>Clientes</a>
      <a href="?page=representantes" class="collection-item lista"> <i class="material-icons right small">work</i>Representantes</a>
      <a href="?page=cont_rec" class="collection-item lista"> <i class="material-icons right small">mail</i>Contato Recebido</a>
      <a href="?page=mail_mark" class="collection-item lista"> <i class="material-icons right small">mail</i>E-mail Markting</a>
    </div>
  </ul>
    <div class="col l9 push-l1">

      <?php 
          if(isset($_GET['page'])){
            $page = $_GET['page'];
            // se  foi passado uma página
            if($page =='servicos'){require('servico.php');}
            else if($page =='clientes'){require('clientes.php');}
            else if($page == 'representantes'){require('representantes.php');}
            else { echo "<h5> Seja Bem vindo ao Self </h5> <h1> Nenhuma Página Carregada</h1> Colocar  aqui os BI's";}

          }
      ?>
    </div>
</div><!--  fecha as  12 colunas-->

<footer class="page-footer escuro-fundo">
  <div class="footer-copyright">
    <div class="container">
      © 2018 Copyright Reserved
      <a class="grey-text text-lighten-4 right" href="#!">By Diego Wickert & Anthony Cassol</a>
    </div>
  </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script src="../jquery/jquery-2.1.1.min.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/init.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.modal').modal();
  });
  $(document).ready(function() {
    $('input#novo').characterCounter();
  });
</script>
</body>
</html> 