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
      <a href="#" class="brand-logo center white-text">Self V_1.0 - Crescer</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        <li><a href="servico.php" class="white-text">Serviços</a></li>
        <li><a href="clientes.php" class="white-text">Clientes</a></li>
        <li><a href="representante.php" class="white-text">Representantes</a></li>
      </ul>
    </div>
  </nav>
  <img src="../img/logo1.png" align='left' alt="Logomarca Crescer" width="100px" class="responive-img">

  <div class="container col l10 center">
    <h5>Painel de  Gestão de Conteudo - Crescer Contabilidade</h5>
    
    <p> Sistema de  gestão Self - Crescer Contabilidade</p>
  
  
    <div class="row">
        <div class="col s12 m12 l4">
          <div class="card-panel z-depth-4">
            <i class="material-icons medium">work</i>
            <a href="servico.php">
              <h5 class="padrao">  Serviços</h5>
                Usado para  determinar os  serviços que  serão adicionados a página  de serviços. Sendo possivel adicionar, editar e remover o cadastro.
            </a>       
          </div>
          <a class="waves-effect waves-light btn-large red"><i class="material-icons right">edit</i>Editar</a>              
        </div>
        <div class="divider"></div>
        <div class="col s12 m12 l4">
          <div class="card-panel z-depth-4">
            <i class="material-icons medium">people</i>
            <a href="clientes.php">
              <h5 class="padrao">Clientes</h5>
                Usado para cadastro de clientes, alteração ou remoção. Bem como a configuração de  disposição dos clientes na tela.
            </a>       
          </div> 
          <a class="waves-effect waves-light btn-large blue"><i class="material-icons right">edit</i>Editar</a>             
        </div>
        <div class="divider"></div>
        <div class="col s12 m12 l4">
          <div class="card-panel z-depth-4">
            <i class="material-icons medium">record_voice_over</i>
            <a href="clientes.php">
              <h5 class="padrao">Representantes</h5>
                Aqui é  realizado o cadastro de  cliente de acordo com a cidade.Usa a  cidade como  agrupamento.
            </a>  
          </div>
          <a class="waves-effect waves-light btn-large green"><i class="material-icons right">edit</i>Editar</a>  
        </div>
      </div>
      <div class="row">  
        <div class="divider"></div>
        <div class="col s12 m12 l4">
          <div class="card-panel z-depth-4">
            <i class="material-icons medium">mail</i>
            <a href="clientes.php">
              <h5 class="padrao">Contatos Recebidos</h5>
                Aqui é possivel  verificar os contatos recebidos e  fazer gestão dos mesmos.Ex.: Status de  retorno, etc.
            </a>  
          </div>
          <a class="waves-effect waves-light btn-large white-text black"><i class="material-icons right">edit</i>Editar</a>  
        </div>

  </div> <!-- Fim do row-->
  </div><!-- Fim do Container-->



<!--JavaScript at end of body for optimized loading-->
    <script src="../jquery/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    
</body>
</html> 