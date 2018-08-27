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
      height:600px;
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
        <div class="row padrao2-fundo center">
          <h4 align="  espaco_topo">Conheça a nossa rede de Representantes:</h4>
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
                  <div class="col s12 m12 l6 cartao_representante">
                    <div class="card-panel section center">               
                    <a class="tooltipped"  data-position="left" data-tooltip="'.$exibe['rep_descricao'].'">       
                      <img class="responsive-img logo_cliente pb" src="logos/'.$imagem.'"/>
                    </a>
                    <h5>'.$exibe['rep_descricao'].'</h5>
                    <br><i class="material-icons left">add_location</i>'.$exibe['rep_endereco'].'
                    <br><i class="material-icons left">work</i>'.$exibe['rep_cidade'].'
                    <br><i class="material-icons left">phone</i>'.$exibe['rep_telefone'].'
                    <br><i class="material-icons left">mail</i><a href="mailto:'.$exibe['rep_email'].'">'.$exibe['rep_email'].'</a>
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
