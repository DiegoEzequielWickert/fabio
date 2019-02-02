<?php 
	

	function excluir_servico($cod_servico){
		require('../conecta_db.php');
		$sql = "DELETE FROM `t_servicos` WHERE ser_codigo = ".$cod_servico;
		echo "SQL:".$sql;
		
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			header('Location:index.php?page=delete&p=Servicos&sucess=true');
		}else{
			return 0;
		}
	}
	function excluir_Cliente($cod_cliente){
		require('../conecta_db.php');
		$sql = "DELETE FROM `t_clientes` WHERE cli_codigo = ".$cod_cliente;
		echo "SQL:".$sql;
		
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			header('Location:index.php?page=delete&p=Clientes&sucess=true');
		}else{
			header('Location:index.php?page=delete&p=Clientes&fail=true');
		}
	}



	function addAtividade($atividade,$servico){
		require('../conecta_db.php');
		$sql = "INSERT INTO t_atividade ( ati_descricao, ser_codigo, ati_status, ati_usuario) VALUES ( '".$atividade."', '".$servico."', 'A', ".$_SESSION['codigo'].")";
		echo "SQL NEW:".$sql;
		
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			header('Location:index.php?page=atividades&p=Atividade&sucess=true');
		}else{
			header('Location:index.php?page=atividades&p=Atividade&fail=true');
		}
	}

	function excluir_atividade($cod_atividade){
		require('../conecta_db.php');
		$sql = "DELETE FROM `t_atividade` WHERE ati_codigo = ".$cod_atividade;
		echo "SQL:".$sql;
		
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			header('Location:index.php?page=delete&p=Atividades&sucess=true');
		}else{
			return 0;
		}
	}

	function addCliente($descricao,$imagem, $site, $cidade){
		require('../conecta_db.php');
		$sql = "INSERT INTO t_clientes( cli_descricao, cli_status, cli_imagem, cli_site, cli_cidade) VALUES ('"
		.$descricao."','A','".$imagem."','".$site."','".$cidade."')";
		echo "SQL NEW:".$sql;
		
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			header('Location:index.php?page=clientes&p=Cliente&sucess=true');
		}else{
			header('Location:index.php?page=clientes&p=Cliente&fail=true');
		}
	}

/***********************************************************************************/

//EXECUTA SERVICO

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		if(isset($_POST['edit_servico'])){
			//se existe uma alteração no nome do serviço
			echo "Solicitado uma alteração- Verifica se  servico ou  atividade";
			
			if($_GET['edit']=='Servicos'){
				echo "Existe um POST com Serviços<br>";		
				$descricao = $_POST['servico_desc_new'];
				$ser_cod = $_POST['ser_codigo'];
				if(atualizaServicoDescricao($descricao,$ser_cod)){
					header('Location:index.php?page=Servicos&edit=sucess');
				}

			}else if($_GET['edit']=='Atividade'){
				echo "Existe um POST com Atividades<br>";		
				$descricao = $_POST['servico_desc_new'];
				$ati_cod = $_POST['ati_codigo'];
				if(atualizaAtividadeDescricao($descricao,$ati_cod)){
					echo "<br>DEU CERTO";
					header('Location:index.php?page=atividades&edit=sucess');
				}else{
					header('Location:index.php?page=atividades&edit=error');
				}				
			}else{
				echo "<h3>Erro de Passagem de Variavel GET  = EDIT[' ']</h3>";
			}
			
		}else if(isset($_POST['excluir_btn'])){
			/* VERIFICA SE  FOI ENVIADO UM EXCLUIR SERVICOS*/
			echo ".. Excluindo Serviço...<br>";
			
			if ($_GET['page']=="Atividades") {

				return excluir_atividade($_POST['option_servico']);
			
			}else if($_GET['page']=="Servicos"){
				echo "Passou aqui:".$_POST['option_servico']."<br>";
				return excluir_servico($_POST['option_servico']);

			}else if($_GET['page']=="Clientes"){
				echo "Passou aqui:".$_POST['option_servico']."<br>";
				return excluir_Cliente($_POST['option_servico']);

			}
			else{ echo "ERRO NA PASSAGEM DE PARAMETROS PAGE = ENTROU NO EXLUIR (P = ".$_GET['page'].")";}

		
		}else if(isset($_POST['btn_atividade'])){
			// se exite um cadastro de atividade
			echo "<br> Entrou no Atividades, Enviando";
			addAtividade($_POST['desc_atividade'],$_POST['option_atividade']);
		
		
		
		}else if(isset($_POST['btn_ordem'])){
			/*
				* RECEBEU UMA ATUALIZAÇÃO DE POSICAO
				* TIRA OS ESPAÇOS EM BRANCO, COLOCANDO A ORDEM DE TODOS SEQUENCIAL
				* BUSCA A  ORDEM QUE DESEJA  SER COLOCADO, SEMPRE VAI DIMINUIR UM NA ORDEM QUE DESEJA, PARA  COLOCAR ENTRE ELES
				* NO FINAL AJUSTA A  ORDEM DE NOVO COMEÇANDO EM  1
			*/
			
			$cod_servico = $_POST['option_servico'];
			$ordem = $_POST['option_ordem'];
			ajustaOrdem();
			
			//$total_servico = getTotalServico();
			require('../conecta_db.php');
			$sql = "select * from t_servicos where ser_status = 'A' order by ser_ordem";
			$resultado = mysqli_query($mysqli, $sql);
			$contador = 0; 
			// SE O SERVIÇO DEVE SER INSERIDO NA PRIMEIRA POSIÇÃO ELE NÃO EXECUTA O WHILE, É PRIMORDIAL
			if($ordem != 1){			
				while($exibe = mysqli_fetch_assoc($resultado)){
	        	 	if ($contador < $ordem && $contador!=$ordem) {	        	 		
	        			setOrdem($exibe['ser_codigo'],$contador);
	        			$contador ++; 		
	        	 	}
	       		}
	       	}
       		setOrdem($cod_servico, $ordem-1);
			ajustaOrdem();

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
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			return 1;
		}else{
			return 0;
		}

	}
	function atualizaAtividadeDescricao($descricao,$ati_codigo){
		/*
			* recebe a descricao e o status, se status 
		*/
		require('../conecta_db.php');

		$sql = "update t_atividade set ati_descricao = '".$descricao."' where ati_codigo = ".$ati_codigo;
		$resultado = mysqli_query($mysqli, $sql); 
		if($resultado){
			return 1;
		}else{
			return 0;
		}

	}

	function setOrdem($ser_codigo, $ordem){
		/* recebe  um serviços e  atualiza a ordem passada dele*/
		
		require('../conecta_db.php');
		$sql = "update t_servicos set ser_ordem = ".$ordem." where ser_codigo = ".$ser_codigo;
		echo "<br>".$sql;
		$resultado = mysqli_query($mysqli,$sql);
		if(!$resultado){
			echo "<h1>ERRO NA ATUALIZAÇÃO NA ORDEM DO SERVIÇO ".$ser_codigo."</h1><br>";
		}
	}
	function getTotalServico(){
		/* recebe  um serviços e  atualiza a ordem passada dele*/
		require('../conecta_db.php');
		$sql = "select count(ser_codigo) as total from t_servicos where ser_status = 'A'";
		
		$resultado = mysqli_query($mysqli,$sql);
		if(!$resultado){
			echo "<h1>ERRO NA ATUALIZAÇÃO NA ORDEM DO SERVIÇO".$ser_codigo."</h1><<br>";
		}
		while($exibe = mysqli_fetch_assoc($resultado)){
        	 return $exibe['total'];
        }
	}
	function ajustaOrdem(){
		/*
			* ajusta a ordem do menor para o maior
			* tira os espaços em branco no meio
		*/
		require('../conecta_db.php');

		$sql = "select * from t_servicos where ser_status = 'A' order by ser_ordem";

		echo "<br>SQL _ (ajustaOrdem) -". $sql;
		$resultado = mysqli_query($mysqli, $sql); 
		//percorre  os  valores setados e  envia para a 
		$aux = 1;
		while($exibe = mysqli_fetch_assoc($resultado)){
        	 
        	 setOrdem($exibe['ser_codigo'], $aux);
        	 $aux ++;
        	 //echo "<br>AUX  = ".$aux;
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
			header('Location:index.php?page=servicos&p=Servicos&sucess=true');
		}else{
			return 0;
		}
	}

 ?>