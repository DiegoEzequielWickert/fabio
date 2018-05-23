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
</head>


<body>
  <?php 
    include('../topo.php');
  ?>

  <div class="container">
    <div class="row padrao2-fundo">
        
        <div class="col l12 l6">            
         <h3>Servios prestados pela  Crescer Contabilidade</h3>        
            <div class="col l4 m6 s6 servico white">
            <h4>Serviços 01</h4>
              <ul>
                <li><i class="material-icons tiny">play_arrow</i> Atividade 01</li>
                <li><i class="material-icons tiny">play_arrow</i>  Atividade 01</li>
                <li><i class="material-icons tiny">play_arrow</i>  Atividade 01</li>
                <li><i class="material-icons tiny">play_arrow</i> Atividade 01</li>
                <li><i class="material-icons tiny">play_arrow</i>  Atividade 01</li>
                <li> Atividade 01</li>
                <li> Atividade 01</li>
              </ul>        
            </div>   
        </div>      
     
      </div>
  </div>
      
  <!-- FIM DOS CLIENTES-->
<?php include('../footer.php'); ?>

  <!--  Scripts-->
  

  </body>
</html>
