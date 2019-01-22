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
  <title> Clientes | Crescer Contabilidade</title>

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
  </style>

</head>


<body>
    
  <?php 
    require('../topo.php');
  ?>
        <div class="parallax-container">
            <div class="parallax">
              <img  class ="responsive-img" src="cli_01.png">
            </div>
        </div>
    
        <div class="col m12 l12 center espaco_topo">    
          <h3 class="center-align padrao"> Clientes </h3>

            
          <a  href="#sobre" class="btn-floating pulse padrao-fundo"><i class="material-icons center ">keyboard_arrow_down</i></a>
        </div>
        <br>
        <br>
      <div class="row center">
        <h5 align="padrao espaco_topo"> Confira alguns de nossos clientes:</h5>
        <br>
       <?php
          
          $result = "select * from t_clientes where cli_status = 'A' order by cli_descricao";  
          $resultado = mysqli_query($mysqli, $result); 
          if(!$resultado) {
              //Consulta falhou, parar aqui 
              echo "<p>Nenhum serviço cadastrado até o momento!</p>";
              die (mysqli_error());            
          }
          echo '<div class="container center">';
          while($exibe = mysqli_fetch_assoc($resultado)){            
            if ($exibe['cli_imagem']!= NULL ) {
              $imagem = $exibe['cli_imagem'];
            }else{
              $imagem = "logo.png";
            }
            if ($exibe['cli_site'] != NULL) {
              $site = 'htpp://'.$exibe['cli_site'].'" target="_blank"';
            }else $site = '#';
            echo '
                  <div class="col s12 m12  cartao_cliente">';
                    //<span class="badge red white-text left">Novo!!! </span>
                    echo '<div class="card-panel section center">               
                    <a class="tooltipped" href="'.$site.' data-position="center" data-tooltip="'.$exibe['cli_descricao'].'">       
                      <img class="responsive-img logo_cliente pb" src="logos/'.$imagem.'"/>
                    </a>
                    </div>
                  </div>
                ';

           }
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
