<?php 
   // aqui define o Nivel de página que o Usuário está 
   define ('nivel', 1);
   // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
   date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title> Inicio | Crescer Contabilidade</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>


<body>
  <?php
   
    include('topo.php');
  ?>

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12 center logo-centro">
            <div class="center-align logo">
            <img src="img/logomarca_CRM.png" class="responsive-img " width="400px" alt=" Logomarca Crecer Contabilidade">
            <br><br>
            <p center> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
            <h5 class="center-align padrao">Acrescentar Conquistas, Somar Conhecimento e Adicionar Satisfação.</h5>
            </div>
            <div class="row">
              <div class="row"></div>
              <div class="col m12 l12">
                <p center> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                <a  href="#sobre" class="btn-floating pulse padrao-fundo"><i class="material-icons center ">keyboard_arrow_down</i></a>
              </div>
            </div>
        </div>

        
      </div>

    </div>
  </div>
  <!-- Nova camada-->
  <div id="sobre" class="padrao2-fundo">
    <div  class="section" >
      <div class="row">
        <div class="col l12 m12 s12 x12">
          <h3 class="center-align">Sobre a Crescer...</h3>
          <p></p>
          <div class="container justificado">
          <img src="img/logo1.png" class="responsive-img r_image"  align='right' alt="" style="display:float;">
          Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
           e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
           de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
           só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente
           inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de 
           Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
          </div>
          <p></p>
          <div class="container">
            <div class="col l10 justificado">
              <h5>Missão</h5>
              Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
              e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
              de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
              <br><br>
            </div>
            <p></p>
            <div class="col l10 justificado ">
              <h5>Vissão</h5>
              Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
              e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
              de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
            <br><br>
            </div>
            <p></p>
            <div class="col l10 justificado">
              <h5>Valores</h5>
              Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,
              e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja 
              de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não 
            <br><br>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>

      
  <!-- FIM DOS CLIENTES-->

  <?php 
    require_once('footer.php');
  ?>
  
  </body>
</html>
