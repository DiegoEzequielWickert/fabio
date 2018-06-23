<?php 

	function getOrdem($servico){
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

		$sql = "INSERT INTO `t_servicos`(`ser_descricao`, `ser_status`, `ser_usuario`, `ser_ordem`, `ser_novo`) VALUES ('".$descricao."','A','1',".$ordem.",'".$novo."')";
		
		echo "<br>".$sql;
		require('../conecta_db.php');

		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			return 1;
		}else{return 0;}
	}

 ?>