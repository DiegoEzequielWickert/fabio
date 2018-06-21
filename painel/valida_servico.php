<?php 
	session_start();
	// verifica se  foi enviado um POST
	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['cadastro_servico'])){
			
			require('funcoes.php');

			//valor passado pelo formulário
			$descricao = $_POST['novo_ser'];
			echo "<br>Serviço passado".$descricao;
			$ordem = getOrdem(0);
			echo "<br>ORDEM FINAL:".$ordem."<br>";

			$sql = "INSERT INTO `t_servicos`(`ser_descricao`, `ser_status`, `ser_usuario`, `ser_ordem`, `ser_novo`) VALUES ('".$descricao."','A','1',)";
			echo "<br>SQL ->".$sql."<br>Ordem ->".$ordem;

		}else{
			echo "<h1> Caution, form, not found!! -  Nivel de Submit</h1> ";
		}

	}else{
		echo "<h1> Caution, form, not found!! --  Nivel Servidor</h1>";
	}

 ?>