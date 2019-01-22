<?php
define('nivel',2); 
  // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
date_default_timezone_set('America/Sao_Paulo'); 
require('../conecta_db.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Representantes | Crescer Contabilidade</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
  .parallax-container {
    height: 350px;
  }

  .fonte{
    font-size: 70pt;
    margin-top: -100px;
    display: block;
    font-weight: 100 !important;
  }
  .space_w{
    margin-bottom: 300px;
  }
</style>

</head>


<body>

  <?php 
  require('../topo.php');
  ?>
  <div class="parallax-container">
    <div class="parallax">
      <img  class ="responsive-img" src="fundo.jpg">
    </div>
  </div>
  <div class="col m12 l12 center">    
          <h3 class="center-align padrao"> Representantes </h3>
  <div class="col m12 l12 center">          
    <a  href="#sobre" class="btn-floating pulse padrao-fundo">
      <i class="material-icons center">keyboard_arrow_down</i>
    </a>
  </div>
  <div class="row  padrao2-fundo center espaco_topo">
    <h5 align="">Conheça a nossa rede de Representantes:</h5>
    <?php

    $result = "select * from t_representantes where rep_status = 'A' order by rep_cidade";  
    $resultado = mysqli_query($mysqli, $result); 
    if(!$resultado) {
              //Consulta falhou, parar aqui 
      echo "<p>Nenhum Representante cadastrado até o momento!</p>";
      die (mysqli_error());            
    }
    echo '<div class="container espaco_topo">';
    while($exibe = mysqli_fetch_assoc($resultado)){            
      if ($exibe['rep_logo']!= NULL ) {
        $imagem = $exibe['rep_logo'];
      }else{
        $imagem = "logo.png";
      }
      echo '
      <div class="col s12 m12 l4 cartao_representante">
        <div class="card-panel section center">               
          <a class="tooltipped"  data-position="top" data-tooltip="'.$exibe['rep_descricao'].'">       
            <img class="responsive-img logo_cliente pb" src="logos/'.$imagem.'"/>
          </a>
        <h5>'.$exibe['rep_descricao'].'</h5>
        <br>
        <table class="table highlight">
          <tr>
            <td> <i class="material-icons ">add_location</i></td>
            <td>'.$exibe['rep_endereco'].'</td>
          </tr>

          <tr>
            <td>  <i class="material-icons ">work</i></td>
            <td>'.$exibe['rep_cidade'].'</td>
          </tr>
          <tr>
            <td>  <i class="material-icons ">phone</i></td>
            <td>'.$exibe['rep_telefone'].'</td>
          </tr>
           <tr>
            <td><i class="material-icons ">mail</i></td>
            <td><a href="mailto:'.$exibe['rep_email'].'">'.$exibe['rep_email'].'</a></td>
          </tr>        
      </table>
        
      </div>
    </div>
      ';

    }
    echo "</div>";
    echo '</div>';
    echo '</div>';
    ?> 
    
 
    
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large padrao-fundo">

        <i class="large material-icons">mode_edit</i>
      </a>
      <ul>

        <li><a href="../contato/" class="btn-floating blue"><i class="material-icons">chat</i></a></li>
      </ul>
    </div>

    <?php 
    require('../footer.php');
    ?>     

    <!--  Scripts-->
    <script>
      $(document).ready(function(){
        $('.fixed-action-btn').floatingActionButton();
      });
      $(document).ready(function(){
        $('.tooltipped').tooltip();
      });

      
    </script>

  </body>
  </html>
