<?php 
	// esse arquivo recebe parametros para  excluir coisas;
	$pagina_p = $_GET['p'];
	echo "<h4 class='blue-text'>Editando - ".$pagina_p."</h4>";

?>
<div class="row">
	<i class="material-icons small red-text">warning</i>
	Deseja realmente alterar a descrição??? Lembrando que as alterações são refletidas imediatamente no site.

</div>
<div class="row">
	<code>Descrição Atual:</code> 

	<form class="col s12" action="funcoes.php?edit=<?php echo $pagina_p;?>" method="POST">
		<div class="row">
			<div class="input-field col s12 m12 l6">
				<?php 
					if ($_GET['p'] == 'Atividade') {
						echo '<input value="'.$_GET['ati_codigo'].'" name="ati_codigo" type="hidden">';		
					}else if ($_GET['p'] == 'Servico') {
						echo '<input value="'.$_GET['ser_codigo'].'" name="ser_codigo" type="hidden">';	
					}
				 ?>
				
			</div>
		</div>
		<div class="row">			
			<div class="input-field col s6">
			<?php 
			require('../conecta_db.php');

			if ($_GET['p'] == 'Atividade') {
						$result = "SELECT ati_codigo, ati_descricao  as descricao FROM t_atividade WHERE ati_codigo =".$_GET['ati_codigo']." order by ati_descricao";
					}else if ($_GET['p'] == 'Servico') {
						$result = "SELECT ser_codigo, ser_descricao as descricao FROM t_servicos WHERE SER_CODIGO =".$_GET['ser_codigo']." order by ser_descricao";
					}
			  
			
			$resultado = mysqli_query($mysqli, $result); 
			$aux = 0;
			while($exibe = mysqli_fetch_assoc($resultado)){
	        //se o status for I ele  seta a classe para  ficar  vermelho 
				echo '<input id="input_text" name="servico_desc_new" class="z-depth-4 col m12 l12 s12 red-text" type="text" value="'.$exibe['descricao'].'" data-length="60">';
			}
			?>
				
				<label for="input_text">Descrição</label>
			</div>
		</div>
		<button type="submit" name="edit_servico" class="waves-effect waves-light btn-large"><i class="material-icons left">edit</i>Atualizar</button>
	</form>
</div>