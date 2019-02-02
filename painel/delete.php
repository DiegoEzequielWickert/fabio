	<?php 
	
		// esse arquivo recebe parametros para  excluir coisas;


		echo "<h4 class='blue-text'>Excluir - ".$_GET['p']."</h4>";
		// SE  ENVIADO COM  SUCESSO
		if(isset($_GET['sucess'])){
			echo '
				<div class="chip green-text sucesso">
			    	Excluido com sucesso!
			    	<i class="close material-icons">close</i>
			  	</div>';
		}else if ($_GET['fail']) {
			echo '
				<div class="chip red-text sucesso">
			    	algo aconteceu de errado, verifique!!
			    	<i class="close material-icons">close</i>
			  	</div>';
		}
		$pagina = $_GET['p'];
	?>
	<form action="funcoes.php?p=excluir_btn&page=<?php echo $pagina.'"';  ?> method="POST">
		<div class="input-field col s12">
		    <select name="option_servico" placeholder="Selecione uma opção">		    	
		    	<?php 
		    		require('../conecta_db.php');
		    		if ($_GET['p']=='Atividades') {
		    			echo "Atividade<br>";
		    			$sql = "select ati_codigo as codigo, ati_descricao as descricao  from t_atividade where ati_status = 'A'";	
		    		}else if ($_GET['p']=="Servicos") {
		    			$sql = "select ser_codigo as codigo,ser_descricao as descricao from t_servicos where ser_status = 'A'";
		    		
		    		}else if($_GET['p']=="Clientes"){
		    			$sql = "select cli_codigo as codigo, cli_descricao as descricao from t_clientes where cli_status = 'A'  ";

		    		}else{ echo "ERRO DE PASSAGEM PARAMETRO P<br>";}

		    		$resultado = mysqli_query($mysqli, $sql); 		    		
		    		while ($exibe = mysqli_fetch_assoc($resultado)) {
		    		 	echo "<option value='".$exibe['codigo']."'>".$exibe['codigo']." - ".$exibe['descricao']."</option>";
		    		 }
		    		 echo "<h3>".$sql."</h3>";
		    	?>
		      
		      
		    </select>
		    <label>Selecione para  excluir</label>
		  </div>		
		  <button type="submit" name="excluir_btn" class="waves-effect waves-light btn-large"> 
		  <i class="material-icons left">delete_forever</i>
		  Excluir Serviço</button>
		  
	</form>
  

 