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
  <title> Serviços| Crescer Contabilidade</title>

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
  <br><br><br><br><br>
    <div class="container center">
      <h4>Como a Crescer Pode Te Ajudar Hoje? </h4>
      
      <br>
      <div class="row">
             <?php
                $result = "select * from t_servicos where ser_status = 'A'";  
                $resultado = mysqli_query($mysqli, $result); 

                while($exibe = mysqli_fetch_assoc($resultado)){
                  
                  

                  echo '<div class="col s12 m12 l6">
                          <div class="card-panel">
                            <i class="material-icons large">domain</i>
                            <br><span class="badge red white-text left">Novo!!!! </span>
                            <h5 class="titulo">'.$exibe['ser_descricao'].'</h5>
                              <ol align="left">
                            ';
                  // consulta para  pegar as  ativides ATIVAS  
                  $sql2 = "select * from t_atividade where ser_codigo =".$exibe['ser_codigo']." and ati_status = 'A' ";
                  
                  $resultado2 = mysqli_query($mysqli, $sql2);   
                  while($atividade = mysqli_fetch_assoc($resultado2)){
                      echo "<li>".$atividade['ati_descricao']." </li>";
                  }                 
                  echo ' </ol>
                        </div>    
                      </div>';
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
