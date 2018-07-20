	<?php 
	
		// esse arquivo recebe parametros para  excluir coisas;

		if (!isset($_SESSION['usuario'])){
				//header('location:index.php?acess=danied-edit');
			echo "<h5 class='red-text'>Verificar Permissão do Usuário</h5>";
		}
		

		echo "<h4 class='blue-text'>Excluir - ".$_GET['p']."</h4>";
		// SE  ENVIADO COM  SUCESSO
		if(isset($_GET['sucess'])){
			echo '
				<div class="chip green-text sucesso">
			    	Serviço deletado com sucesso!
			    	<i class="close material-icons">close</i>
			  	</div>';
		}
		$pagina = $_GET['p'];
	?>
	<form action="funcoes.php?p=excluir_btn&page=<?php echo $pagina.'"';  ?> method="POST">
		<div class="input-field col s12">
		    <select name="option_servico">
		    	<option   disabled selected>Selecione uma opção</option>
		    	<?php 
		    		require ('../conecta_db.php');
		    		if ($_GET['p']=='Atividades') {
		    			echo "Atividade<br>";
		    			$sql = "select ati_codigo as codigo, ati_descricao as descricao  from t_atividade where ati_status = 'A'";	
		    		}else if ($_GET['p']=="Servicos") {
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
		  <button type="submit" name="excluir_btn" class="waves-effect waves-light btn-large"> 
		  <i class="material-icons left">delete_forever</i>
		  Excluir Serviço</button>
		  
	</form>
  

 