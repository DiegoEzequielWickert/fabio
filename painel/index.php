<?php 
  session_start();
  date_default_timezone_set('America/Sao_Paulo');  ?>
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
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php" class="white-text"><i class="material-icons left">home</i>Inicio</a></li>
        <li><a href="../" class="white-text">Site</a></li>
        <li><a href="logout.php" class="white-text"><i class="material-icons left">settings_power</i>Sair</a></li>
      </ul>
    </div>
  </nav>
  

  <div class="container col l10 center">
    <h5>Painel de  Gestão de Conteudo - Crescer Contabilidade</h5>
    
    <p> Sistema de  Gestão Self - Crescer Contabilidade</p>
    <hr>
  </div>

  <div class="row container">
    <div class="collection with-header col m4 l3 pull-l2">
      <div class="row"></div>
      <li class="collection-header">
        <a href="index.php">
          <img src="../img/logo1.png" alt="Logomarca Crescer" width="100px" class="responive-img">
        </a>
      </li>
      <div class="row"></div>
      <a href="?page=servicos" class="collection-item lista"><i class="material-icons left tiny ">work</i>Serviços</a>
      <a href="?page=atividades" class="collection-item lista"><i class="material-icons left tiny">work</i>Atividades</a>
      <a href="?page=clientes" class="collection-item lista"><i class="material-icons left tiny">work</i>Clientes</a>
      <a href="?page=representantes" class="collection-item lista"><i class="material-icons tiny left">work</i>Representantes</a>
      <a href="?page=cont_rec" class="collection-item lista"><i class="material-icons left tiny">mail</i>Contato Recebido</a>
      <a href="?page=mail_mark" class="collection-item lista"><i class="material-icons left tiny">mail</i>E-mail Markting</a>
    </div>
  </ul>
    <div class="col l9">

      <?php 
          if(isset($_GET['page'])){
            $page = $_GET['page'];
            // se  foi passado uma página
            if($page =='servicos'){require('servico.php');}
            else if($page =='clientes'){require('clientes.php');}
            else if($page == 'representantes'){require('representantes.php');}
            else if ($page == 'edit'){require('edit.php');}
            else if ($page == 'delete'){require('delete.php');}
            else if ($page == 'atividades'){require('atividades.php');}
            else if ($page == 'ordem'){require('ordem.php');}
            else { echo "<h1> Erro! -- Nenhuma Página Carregada</h1>";}

          }else { 
            echo "<h1> Seja Bem vindo ao Self </h1>
                  <h5 class='justificado'>  O seu sistema  de  gestão de conteudo. É preciso selecionar uma página na aba esquerda. As alterações refletem diretamente no site, então.</h5>
                 ";
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
  $(document).ready(function(){
    $('select').formSelect();
  });

</script>
</body>
</html> 