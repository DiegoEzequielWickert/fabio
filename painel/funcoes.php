<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if(isset($_POST['edit_servico'])){
			//se existe uma alteração no nome do serviço
			echo "Existe um POST com Serviços<br>";	
			$descricao = $_POST['servico_desc_new'];
			$ser_cod = $_POST['ser_codigo'];
			if(atualizaServicoDescricao($descricao,$ser_cod)){
				header('Location:index.php?page=servicos&edit=sucess');
			}

		}else{
			echo "Erro de passagem de parametros";
		}
	}

	function atualizaServicoDescricao($descricao,$ser_codigo){
		/*
			* recebe a descricao e o status, se status 
		*/
			require('../conecta_db.php');

		$sql = "update t_servicos set ser_descricao = '".$descricao."' where ser_codigo = ".$ser_codigo;
		echo "SQL:".$sql;
		
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			return 1;
		}else{
			return 0;
		}

	}

	function getOrdem($servico){
		/* se servico igual a zero então */
		require('../conecta_db.php');
		if($servico == 0){
			echo "entro no servico 0";
			$sql = "select max(ser_codigo)+1 as ser_ordem from t_servicos";
		}else{
			$sql = "select ser_ordem from t_servicos where ser_codigo = ".$servico;
		}
		
    	$resultado = mysqli_query($mysqli, $sql); 
	    $aux = 0;
        while($exibe = mysqli_fetch_assoc($resultado)){
        	 return $exibe['ser_ordem'];
        }
                  

	}// end function

	function addServico($descricao,$ordem, $novo){
		/*
			* RETORNO:  1 SE CADASTROU
						0 SE ERRO
		*/

		$sql = "INSERT INTO `t_servicos`(`ser_descricao`, `ser_status`, `ser_usuario`, `ser_ordem`, `ser_novo`) VALUES ('".$descricao."','A','1',".$ordem.",'".$novo."')";
		
		
		require('../conecta_db.php');

		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			return 1;
		}else{
			return 0;
		}
	}

 ?>