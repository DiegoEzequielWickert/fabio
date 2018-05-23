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
</head>


<body>
    <?php 
        include('../topo.php');
    ?>
    <div class="container">
        <h4>Contato</h4>
            <p>
            Deixe aqui seu contato, teremos  o prazer de retornar assim que possivel.
            </p>

        <div class="row">
            <div class="chip padrao">
                Existem campos não preenchidos
                <i class="close material-icons">close</i>
            </div>
            <form class="col s12 l12" method="POST" action="verifica.php">
                <div>
                    <div class="input-field col l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input placeholder="Nome Completo" id="nome1" name="nome" type="text" class="validate formulario" validate="validate" required="required">
                    <label for="nome1">Nome Completo</label>
                    </div>
                </div>
                <div>
                    <div class="input-field col l6">
                    <i class="material-icons prefix">mail</i>
                    <input placeholder="E-mail" name="mail"  type="email" class="validate formulario" required="required">
                    <label for="mail">E-mail</label>
                    </div>
                </div>
                <div>
                    <div class="input-field col l6">
                        <i class="material-icons prefix">phone</i>
                        <input name="telefone" id="telefone1" type="number" data-length="11" class="validate" required="required">
                        <label for="telefone1">Telefone</label>
                    </div>
                </div>
                <div>
                    <div class="input-field col l6">
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
                        <i class="material-icons prefix">fingerprint</i>
                        <input placeholder="GOOGLE CAPtcha" name="google" type="text" class="validate formulario">
                        <label for="cidade">GOOGLE CAPTRCHA</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light btn-large escuro-fundo" type="submit">Enviar
                        <i class="material-icons right">record_voice_over</i>
                    </button>                    
                </div> 
                            
            </form>
        </div>
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