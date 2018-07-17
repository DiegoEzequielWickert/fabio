<?php 
	// esse arquivo recebe parametros para  excluir coisas;

	if (!isset($_SESSION['usuario'])){
			//header('location:index.php?acess=danied-edit');
		echo "<h5 class='red-text'>Verificar Permissão do Usuário</h5>";
	}
	echo "<h4 class='blue-text'>Editando - ".$_GET['p']."</h4>";

?>
<div class="row">
	<i class="material-icons small red-text">warning</i>
	Deseja realmente alterar a descrição??? Você ainda pode alterar quantas vezes quiser, mas lembrando que as alterações são refletidas imediatamente no site.

</div>
<div class="row">
	<code>Descrição Atual:</code> <br><br><br>

	<form class="col s12" action="funcoes.php?edit="<?php echo $_GET['p'];  ?> " method="POST">
		<div class="row">
			<div class="input-field col s12 m12 l6">
				<input value="<?php echo $_GET['ser_codigo']; ?>" name="ser_codigo" id="disabled" TYPE="hidden">
			</div>
		</div>
		<div class="row">			
			<div class="input-field col s6">
				<input id="input_text" name="servico_desc_new" class="z-depth-4 col m12 l12 s12 red-text" type="text" value="teste de testo" data-length="60">
				<label for="input_text">Descrição</label>
			</div>
		</div>
		<button type="submit" name="edit_servico" class="waves-effect waves-light btn-large"><i class="material-icons left">edit</i>Atualizar</button>
	</form>
</div>