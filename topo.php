<?php 
    
    if(nivel ==1){
        $path_nivel ='';
        
    }else if(nivel ==2){
        $path_nivel ='../';
        
    }else if(nivel ==3){
        $path_nivel ='../../';
        
    }else{  
        "<h1>Erro no caminho Path, verifique se foi definido um Nivel<h1>";
    }
    $inicio ="index.php";
    $iniciosobre =$path_nivel.$inicio; 
    $sobre ="index.php#sobre";
    $sobre =$path_nivel.$sobre;
    $servicos ="servicos/";
    $servicos =$path_nivel.$servicos;
    $clientes ="clientes/";
    $clientes =$path_nivel.$clientes;
    $representantes ="representantes/";
    $representantes =$path_nivel.$representantes;
    $contato ="contato/";
    $contato =$path_nivel.$contato;
    $imagem  = "img/logo.png";
    $imagem =  $path_nivel.$imagem;
?>
<div class="navbar-fixed ">   
    <nav>
      <div class="nav-telefone col l12 m12 s12">
         <span>CRM: 123.456-7 </span>
         <span>TEL.:(49) 9.8438-1635</span> 
         <span>E-mail: crescer_contabilidade@gmail.com </span>       
        
        
      </div>
      <div class="nav-wrapper padrao-fundo">
        <a href="#" class="brand-logo padrao">
          <img src="<?php echo $imagem; ?>" class="responsive-img logo-nav" alt="Logo">
        </a>
        <ul class="right hide-on-med-and-down ">
          <li><a href="<?php echo $inicio; ?>" class=" white-text">Inicio</a></li>
          <li><a href="<?php echo $iniciosobre; ?>" class="white-text">A Crescer</a></li>
          <li><a href="<?php echo $servicos; ?>" class="white-text">Serviços</a></li>
          <li><a href="<?php echo $clientes; ?>" class="white-text">Clientes</a></li>
          <li><a href="<?php echo $representantes; ?>" class="white-text">Representantes</a></li>
          <li><a href="<?php echo $contato; ?>" class="white-text">Contatos</a></li>
        </ul>
      </div>
    </nav>
  </div>
