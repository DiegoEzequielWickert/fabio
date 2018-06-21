<?php 

	function getOrdem($servico){
		require('../conecta_db.php');
		if($servico == 0){
			echo "entro no servico 0";
			$sql = "select max(ser_codigo)+1 as ser_ordem from t_servicos";
		}else{
			$sql = "select ser_ordem from t_servicos where ser_codigo = ".$servico;
		}

		$row = mysqli_query($mysqli,$sql);
		while($exibe = mysqli_fetch_assoc($row)){
			echo "$$$$$$$$$$ :".$exibe['ser_codigo']."#$$$$$$$$$$$$$$";
			//return $exibe['ser_codigo'];
			//die($exibe['ser_codigo']);
		}

	}// end function

 ?>