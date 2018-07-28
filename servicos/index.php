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
  <title> Serviços | Crescer Contabilidade</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    .titulo{
      text-align:left;
    }

  </style>

</head>


<body>
  
  <?php 
    require('../topo.php');
  ?>
  <br>
    <div class="container">
      <h4>Como a <code>Crescer</code> Pode Te Ajudar Hoje? </h4>
      
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
          $result = "select * from t_servicos where ser_status = 'A' order by ser_ordem";  
          $resultado = mysqli_query($mysqli, $result); 
          $aux = 0;
          if($resultado === FALSE) {
              // Consulta falhou, parar aqui 
              die(mysqli_error());
          }
          $conta = 1;
          while($exibe = mysqli_fetch_assoc($resultado)){
            
            echo '<div class="col s12 m12 l6 style="height:'.$tam.'px;">
                  <span class="badge red white-text left">Novo!!!! </span>
                    <div class="card-panel section"  >
                      <h5>'.$conta.'-'.$exibe['ser_descricao'].'</h5>
                        <ul>
                      ';
                  $conta++;
            // consulta para  pegar as  ativides ATIVAS  
            
            $sql2 = "select * from t_atividade where ser_codigo =".$exibe['ser_codigo']." and ati_status = 'A' ";
            $resultado2 = mysqli_query($mysqli, $sql2); 
            if($resultado2 === FALSE) {
              // Consulta falhou, parar aqui 
              die(mysqli_error());
          }  
            while($atividade = mysqli_fetch_assoc($resultado2)){
                if (!$atividade) {
                  echo "<li align='left'> Nenhuma atividade Cadastrada </li>";
                }else{
                  echo "<li> - ".$atividade['ati_descricao']." </li>";
                }
            }                 
            echo ' </ul>
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
