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
	?>
	<form action="funcoes.php?p=excluir_btn" method="POST">
		<div class="input-field col s12">
		    <select name="option_servico">
		    	<option   disabled selected>Selecione um serviço</option>
		    	<?php 
		    		require ('../conecta_db.php');
		    		$sql = "select * from t_servicos where ser_status = 'A'";
		    		$resultado = mysqli_query($mysqli, $sql); 
		    		
		    		while ($exibe = mysqli_fetch_assoc($resultado)) {
		    		 	echo "<option value='".$exibe['ser_codigo']."'>".$exibe['ser_codigo']." - ".$exibe['ser_descricao']."</option>";
		    		 }
		    	?>
		      <option value="Teste"> Teste de  velocidade</option>
		      
		    </select>
		    <label>Selecione um serviços para  excluir</label>
		  </div>		
		  <button type="submit" name="excluir_btn" class="waves-effect waves-light btn-large"> 
		  <i class="material-icons left">delete_forever</i>
		  Excluir Serviço</button>
		  
	</form>
  

 