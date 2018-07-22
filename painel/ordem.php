	<?php 
	
		// esse arquivo recebe parametros para  excluir coisas;

	if (!isset($_SESSION['usuario'])){
		header('location:../login/index.php?acess=danied-edit');
		echo "<h5 class='red-text'>Verificar Permissão do Usuário</h5>";
	}


	echo "<h4 class='blue-text'>Página - ".$_GET['p']."</h4>";
		// SE  ENVIADO COM  SUCESSO
	if(isset($_GET['sucess'])){
		echo '
		<div class="chip green-text sucesso">
		Ordem do Servico atualizada!!
		<i class="close material-icons">close</i>
		</div>';
	}
	$pagina = $_GET['p'];


	?>
	<form action="funcoes.php?p=ordem&page=<?php echo $pagina.'"';  ?> method="POST">
		<div class="input-field col s12 l6 m12">
			<select name="option_servico">

				<?php 
				require ('../conecta_db.php');
				require('funcoes.php');		    		
				ajustaOrdem();
				if ($_GET['p']=="Ordem") {
					$sql = "select ser_codigo as codigo,ser_descricao as descricao from t_servicos where ser_status = 'A'";
				}else{ echo "ERRO DE PASSAGEM PARAMETRO P<br>";}
				$resultado = mysqli_query($mysqli, $sql); 		    		
				while ($exibe = mysqli_fetch_assoc($resultado)) {
					echo "<option value='".$exibe['codigo']."'>".$exibe['codigo']." - ".$exibe['descricao']."</option>";
				}
				?>


			</select>
			<label>Selecione para  excluir</label>
		</div>
		<div class="input-field col s12 l6 m12">
			<select name="option_ordem">
				<?php 
					require ('../conecta_db.php');
							    
					$sql = "select ser_ordem as ordem from t_servicos where ser_status = 'A' order by ser_ordem";
					$resultado = mysqli_query($mysqli, $sql); 		    		
					while ($exibe = mysqli_fetch_assoc($resultado)) {
						echo "<option value='".$exibe['ordem']."'> Posição - ".$exibe['ordem']."</option>";
					}
				?>

			</select>
			<label>Materialize Select</label>
		</div>		
		<button type="submit" name="btn_ordem" class="waves-effect waves-light btn-large"> 
			<i class="material-icons left">update</i>
		Atualizar Ordem</button>

	</form>


