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
			echo "<br>ORDEM FINAL:".$ordem."<<-- <br>";
			$novo = '2018-10-01';
			$new = addServico($descricao,$ordem, $novo);
			if($new){
				"<h1>Serviço Cadastrado com  Sucesso!</h1>";
			}else{
				"<h1> Erro no cadastro;</h1>";
			}

		}else{
			echo "<h1> Caution, form, not found!! -  Nivel de Submit</h1> ";
		}

	}else{
		echo "<h1> Caution, form, not found!! --  Nivel Servidor</h1>";
	}

 ?>