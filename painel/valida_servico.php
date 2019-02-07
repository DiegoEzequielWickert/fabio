<?php 

	// verifica se  foi enviado um POST
if($_SERVER['REQUEST_METHOD']=='POST'){
	require('funcoes.php');
		// se passado um novo servico
	if(isset($_POST['cadastro_servico'])){		

			//valor passado pelo formulário
		$descricao = $_POST['novo_ser'];
		$novo = $_POST['data_ser'];
		echo "<br>Serviço passado".$descricao;

		$ordem = getOrdem(0);
		echo "<br>ORDEM FINAL:".$ordem."<<-- <br>";

		$new = addServico($descricao,$ordem, $novo);
		if($new){
			"<h1>Serviço Cadastrado com  Sucesso!</h1>";
		}else{
			"<h1> Erro no cadastro;</h1>";
		}

		// se passado um nova atividade	
	}else if(isset($_POST['btn_atividade'])){
		echo "Entrou - POST Atividades<br>";
		echo "<br>Atividade :".$descricao;

	}else if(isset($_POST['btn_cliente'])){
			// se exite um cadastro CLIENTE
		//require('funcoes.php');
		echo "<br> Entrou no CLIENTE, Enviando";
		
	// verifica se foi enviado um arquivo
		if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
			echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
			echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
			echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
			echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';

			$arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
			$nome = $_FILES[ 'arquivo' ][ 'name' ];

    		// Pega a extensão
			$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

    // Converte a extensão para minúsculo
			$extensao = strtolower ( $extensao );
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
			if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
				$novoNome = uniqid ( time () ) . '.' . $extensao;
				echo "<br> NOVO NOME:".$novoNome."<br>";
        // Concatena a pasta com o nome
				$destino = '../clientes/logos/'. $novoNome;

        // tenta mover o arquivo para o destino
				if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
					echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
					echo ' < img src = "' . $destino . '" />';
				}
				else
					echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
			}
			else
				echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
		}
		else
			echo 'Você não enviou nenhum arquivo!';

		$descricao = $_POST['descricao_cliente'];
		$imagem = trim($novoNome,' ');
		$site = $_POST['site_cliente'];
		$cidade = $_POST['cidade_cliente'];
		echo "<br> Descrição:".$descricao;
		echo "<br> Imagem:".$imagem;	
		echo "<br> SITE:".$site;
		echo "<br> Cidade:".$cidade;
		echo "<br>";
		addCliente($descricao,$imagem, $site, $cidade);
		
	/* ########################## REPRESENTANTES #################################### */	
	}else if(isset($_POST['btn_representante'])){
			// se exite um cadastro CLIENTE
		//require('funcoes.php');
		echo "<br> Entrou no Cadastro Representante, Enviando";
		
	// verifica se foi enviado um arquivo
		if (!isset($_FILES['arquivo']['name'])) {
			echo "<h1> Sem arquivo de  arquivos. SET NULL </h1>";
			$imagem ;
		}
		 



		if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
			echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
			echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
			echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
			echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';

			$arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
			$nome = $_FILES[ 'arquivo' ][ 'name' ];

    // Pega a extensão
			$extensao = pathinfo ( $nome, PATHINFO_EXTENSION );

    // Converte a extensão para minúsculo
			$extensao = strtolower ( $extensao );

    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
			if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
				$novoNome = uniqid ( time () ) . '.' . $extensao;
				$imagem =  $novoNome;
        // Concatena a pasta com o nome
				$destino = '../representantes/logos/' . $novoNome;

        // tenta mover o arquivo para o destino
				if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
					echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
					echo ' < img src = "' . $destino . '" />';
				}
				else
					$_SESSION['erro'] =  'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
			}
			else
				$_SESSION['erro'] =  'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
		}
		else{
			$_SESSION['erro'] =  'Você não enviou nenhum arquivo!';
			$imagem ="default.png";
		}

		$descricao = $_POST['descricao_representante'];
		
		$email = $_POST['email_representante'];
		$cidade = $_POST['cidade_representante'];
		$endereco = $_POST['endereco_representante'];
		$telefone = $_POST['telefone_representante'];

		
		addRepresentante($descricao,$imagem, $endereco, $cidade,$telefone,$email);
		

	}else{
		echo "<h1> Caution, form not found!! -  Nivel de Submit Page = Valida_servico.php</h1> ";
	}

}else{
	echo "<h1> Caution, form, not found!! --  Nivel Servidor</h1>";
}

?>