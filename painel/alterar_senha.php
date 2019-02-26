<?php 
	// esse arquivo recebe parametros para  excluir coisas;
	$pagina_p = $_GET['page'];
	echo "<h4 class='blue-text'>Alterar - ".$pagina_p."</h4>";

?>
<div class="row">
	<i class="material-icons small red-text">warning</i>
	Por questões de segurnaça é necessário informar a senha atual para que as alterações tenha efeito.
</div>
<div class="row">
	<code>----------</code> 	
	<div class="row">
    	<form class="col s12" action="alterar_senha.php" method="POST">
	      <div class="row">
	        <div class="input-field col s6">
	          <input placeholder="Senha Atual" id="senha_atual_id" type="password" class="validate" required="required">
	          <label for="senha_atual_id">Senha Atual</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s6">
	          <input placeholder="Nova Senha" id="senha_novo_id" type="password" class="validate" required="required">
	          <label for="senha_nova_id">Nova Senha</label>
	        </div>
	        <div class="input-field col s6">
	          <input placeholder="Repetir Senha" id="senha_rep_id" type="password" class="validate" required="required">
	          <label for="senha_rep_id">Repetir Senha</label>
	        </div>
	      </div>
     	</form>
     </div>
</div>