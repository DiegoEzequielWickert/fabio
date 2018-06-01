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
      <div class="row total">
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
          <h3 class="center-align">A Crescer...</h3>
          <p></p>
          <div class="container justificado">
          <img src="img/logo1.png" class="responsive-img r_image"  align='right' alt="" style="display:float;">
           <p class="justificado"> A <b>Crescer Contabilidade e Consultoria</b> objetiva oferecer excelência no segmente contábil, a fim de proporcionar aos seus clientes as melhores condições para a o atendimento das necessidades especificas de cada um. </p>
           <p class="justificado">
            Fundada em 06/10/2014 pelo Contador Fabio Carlos Hammes Especialista em Auditoria e Pericia, a Crescer traz consigo um modo inovador de fazer contabilidade, focando no uso da tecnologia para garantir maior qualidade e agilidade nos processos fiscais, e se dedica fortemente para suprir as necessidades gerenciais de cada cliente.</p>

          </div>
          
          <p></p>
          <div class="container">
            <div class="col l10 justificado">
              <h5>Missão</h5>
              <p>Assessorar e executar tecnicamente as informações para tomada de decisões e crescimento dos clientes, prestando serviços com qualidade e competência, buscando a total satisfação dos nossos clientes, funcionários, fornecedores e comunidade com responsabilidade e respeito.</p>
              <br><br>
            </div>
            <p></p>
            <div class="col l10 justificado ">
              <h5>Vissão</h5>
              <p>Ser uma empresa modelo com excelência no segmento contábil, buscando inovações tecnológicas, objetivando a otimização de tempo, redução de custos, lucratividade e solidez constante no mercado.</p>
            <br><br>
            </div>
            <p></p>
            <div class="col l10 justificado">
              <h5>Valores</h5>
              <ol>
                <li>Foco no Crescimento do Cliente </li>
                <li>Integridade, Ética e Transparência</li>
                <li>Reconhecimento Humano e Intelectual</li>
                <li>Profissionalismo</li>
                <li>Qualidade e Melhoria Contínua</li> 
              </ul>
              
            <br><br>
            </div>
            <div class="col 10 justificado">
              <h5>Slogan</h5>
              <p>Acrescentar Conquistas, Somar Conhecimento e Adicionar Satisfação</p>
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
