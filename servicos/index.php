<?php 
   // aqui define o Nivel de página que o Usuário está 
   define ('nivel', 2);
   date_default_timezone_set('America/Sao_Paulo');
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
    include('../topo.php');
  ?>

  <br><br><br><br><br>
    <div class="container center">
      <h5>Alguns de nossos serviços,o que temos de melhor...</h5>
      
      <br>

      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons">room</i>
            <h5 class="titulo"> Serviço 01</h5>
             teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste           
          </div>
  
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons">room</i>
            <h5 class="titulo"> Serviço 01</h5>
             teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste           
          </div>
  
        </div><div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons">room</i>
            <h5 class="titulo"> Serviço 01</h5>
             teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste           
          </div>
  
        </div><div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons">room</i>
            <h5 class="titulo"> Serviço 01</h5>
             teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste           
          </div>
  
        </div><div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons">room</i>
            <h5 class="titulo"> Serviço 01</h5>
             teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste           
          </div>
  
        </div>
          
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
  
      
  <!-- FIM DOS CLIENTES-->
<?php include('../footer.php'); ?>

  <!--  Scripts-->
  <script>
    $(document).ready(function(){
      $('.fixed-action-btn').floatingActionButton();
    });
      
  </script>

  </body>
</html>
