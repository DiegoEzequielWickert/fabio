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
    .cartao{
      height: 160px !important;
    }
  </style>

</head>


<body>
    
  <?php 
    require('../topo.php');
  ?>
  <br>
    <div class="container">
      <h4>Veja alguns de nossos clientes:</h4>
      
      <br>
      <div class="row">
       <?php
          //Pega o serviço com maior quantidade de serviços e define um tamanho do panel
           
          $sql = "SELECT COUNT(ser_codigo) as qtde FROM `t_atividade` GROUP BY ser_codigo";
          $resultado = mysqli_query($mysqli, $sql); 
          $tam = 0;
          while($exibe = mysqli_fetch_assoc($resultado)){
            $aux = $exibe['qtde'];          
            if($tam == 0){
              $tam = $exibe['qtde'];
              
            }else if($aux > $tam){
              $tam = $aux;
            } 
           
           }
          $tamInicial = 10;
          $tam = ($tam * 10)+ $tamInicial;
          echo "<br> Tamanho Final -->".$tam."<br>";
          $result = "select * from t_clientes where cli_status = 'A' order by cli_descricao";  
          $resultado = mysqli_query($mysqli, $result); 
          $aux = 0;
          if(!$resultado) {
              // Consulta falhou, parar aqui 
              //die (mysqli_error());
            echo "<p>Nenhum serviço cadastrado atéo momento!</p>";
          }
          $conta = 1;
          while($exibe = mysqli_fetch_assoc($resultado)){
            
            echo '<div class="col s12 m12 l4 style="height:'.$tam.'px;">
                  <span class="badge red white-text left">Novo!!! </span>
                    <div class="card-panel section  center  "  >
                      <img class="responsive-img cartao" src="logos/logo.jpg" "/>
                        <h5>'.$conta.'-'.$exibe['cli_descricao'].'</h5>
                        
                        
                      ';
                  $conta++;
            // consulta para  pegar as  ativides ATIVAS  
                        
            echo '<div>
                    <a href="#" target="_blank"> Visite o Site</a>
                  </div>
                  </div>    
                </div>';
            // if($aux == 0){
            //   echo "</div>";
            
            // }
          }
        ?> 
                    
      </div>
   </div>
   <div class="fixed-action-btn">
  <a class="btn-floating btn-large padrao-fundo">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    
    <li><a href="../conato/" class="btn-floating blue"><i class="material-icons">chat</i></a></li>
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
      
  </script>

  </body>
</html>