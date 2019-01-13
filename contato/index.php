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
  <title> Contato | Crescer Contabilidade</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src='https://www.google.com/recaptcha/api.js'></script>
    <style type="text/css">
        .parallax-container {
      height: 350px;
    }
    .fonte{
      font-size: 70pt;
      margin-top: -100px;
      display: block;
      font-weight: 100 !important;
    }
    </style>
</head>


<body>
    <?php 
        include('../topo.php');
    ?>

    <div class="parallax-container">
      <div class="parallax">
            <img src="fundo.jpg">
        </div>
    </div>
<span class=" fonte padrao center espaco_topo">Contato</span>
  <div class="col m12 l12 center">          
    <a  href="#sobre" class="btn-floating pulse padrao-fundo">
      <i class="material-icons center ">keyboard_arrow_down</i>
    </a>
  </div>

    <div class="container center"> 
            <p>
            Deixe aqui seu contato, teremos  o prazer de retornar assim que possivel.
            </p>

        <div class="row ">
            <div class="chip padrao">
                Existem campos de preenchimento obrigatório.
                <i class="close material-icons">close</i>
            </div>
            <form class="col s12 l8" method="POST" action="verifica.php">
                <div>
                    <div class="input-field col l8">
                    <i class="material-icons prefix">account_circle</i>
                    <input placeholder="Nome Completo" id="nome1" name="nome" type="text" class="validate formulario" validate="validate" required="required">
                    <label for="nome1">Nome Completo</label>
                    </div>
                </div>
                <div>
                    <div class="input-field col l8">
                    <i class="material-icons prefix">mail</i>
                    <input placeholder="E-mail" name="mail"  type="email" class="validate formulario" required="required">
                    <label for="mail">E-mail</label>
                    </div>
                </div>
                <div>
                    <div class="input-field col l8">
                        <i class="material-icons prefix">phone</i>
                        <input name="telefone" id="telefone1" type="number" data-length="11" class="validate" required="required">
                        <label for="telefone1">Telefone</label>
                    </div>
                </div>
                <div>
                    <div class="input-field col l8">
                        <i class="material-icons prefix">location_on</i>
                        <input placeholder="Sua Cidade" name="cidade" type="text" class="validate formulario" required="required">
                        <label for="cidade">Cidade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">edit</i>
                        <textarea name="mensagem" id="textarea2"  class="materialize-textarea" data-length="250" ></textarea>
                        <label for="textarea2">Deixe sua Mensagem (*opcional)</label>
                    </div>
                </div>
                
                
            
                <div class="row">
                    <div class="input-field col l6">
                       
                        <div class="g-recaptcha" data-sitekey="6LeT-VsUAAAAAGmS7skQ9AD-9xxZ8XkoQEV_wMgl"></div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-blue btn-large escuro-fundo" type="submit">Enviar
                        <i class="material-icons right">record_voice_over</i>
                    </button>   
                                     
                </div> 
                            
            </form>
        </div><!--fecha o container-->
        
        </div>

        <div>
          <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3552.3096923413614!2d-53.01116918495146!3d-27.083529383054316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fb3fac85591a13%3A0x8f7ad58d24f9363a!2sCrescer+Contabilidade+e+Consultoria!5e0!3m2!1spt-BR!2sbr!4v1538785402845" width="800" height="600" frameborder="0" style="border:0" allowfullscreen>
            
          </iframe>
       </div>
       


    <?php 
        include('../footer.php');
    ?>
    <script>
        $(document).ready(function() {
            $('textarea#textarea2, input#telefone1').characterCounter();
        });
     </script>
            

</boby>
</html>