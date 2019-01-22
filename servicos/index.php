<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

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
  <style type="text/css">
  .titulo{
    text-align:left;
  }
  .parallax-container {
    height: 350px;
  }
  .fonte{
    font-size: 70pt;
    margin-top: -100px;
    display: block;
    font-weight: 150;
  }
  .margem2{
    margin:50px;
    margin-top: 40px;
    margin-bottom: 100px;
  }
  .tab{
    padding-left: 20px;
  }
</style>

</head>


<body>

  <?php 
  require('../topo.php');
  ?>
  <div class="parallax-container">
    <div class="parallax">
      <img src="azul_01.png">
    </div>
    
  </div>
  
  <div class="row padrao2-fundo margem2 ">
    <h3 class="center-align padrao "> Serviços </h3>
    <br>  
    <h5 class="center">Como a <code>Crescer</code> Pode Te Ajudar Hoje? </h5>

    <br> <br>


    <div class="container">
     <?php     
     
     $conta = 0;
     $hoje = date("Y-m-d");
     $result = "select * from t_servicos where ser_status = 'A' order by ser_ordem";  
     $resultado = mysqli_query($mysqli, $result); 

     while($exibe = mysqli_fetch_assoc($resultado)){
      echo '<div class="col s12 m12 l4 ">';
      
      //verifica se o pode mostraro NOVO
      $dt_novo = $exibe['ser_novo'];
      // imprime a tag de novo 
      if($dt_novo >= $hoje && $dt_novo != 'NULL'){
        echo '<span class="badge red white-text left">Novo!!!! </span>';  
      }
      echo '<div class=" cartao_servico">
      <table  class="table highlight">
      
      <tr>
      <thead align="center"> 
      <h5 class="titulo padrao ">'.$exibe['ser_descricao'].'</h5>
      
      </thead>
      </tr>
      ';

      // consulta para  pegar as  ativides ATIVAS  
      $sql2 = "select * from t_atividade where ser_codigo =".$exibe['ser_codigo']." and ati_status = 'A' ";
      $resultado2 = mysqli_query($mysqli, $sql2); 
      if($resultado2 === FALSE) {
        // Consulta falhou, parar aqui 
        die(mysqli_error());
      }       
      while($atividade = mysqli_fetch_assoc($resultado2)){
        if (!$atividade) {
          echo "<li align='left' > Nenhuma atividade Cadastrada </li>";
        }else{
          echo "
          <tr>
          <td class='tab'>".$atividade['ati_descricao']." </li></td>
          </tr>";
        }
      }                 
      echo ' </table>
      </div>    
      </div>';
      // fechamento da DIV que faz o row
      $conta++;
    }

          // se no final rodou tudo e não fechou o row
    if($conta != 0){
      echo "</div>";
      $conta = 0 ;
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
  $(document).ready(function(){
    $('.parallax').parallax();
  });
</script>

</body>
</html>
