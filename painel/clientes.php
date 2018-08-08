<?php
    // verifica se foi pasado por direcionamento correto 
if(isset($_GET['page'])){
      //verifica se o direcionamento é mesmo para   serviços
  if(!$_GET['page']== 'servicos'){
    header('Location:index.php?acess=danied-clientes');
  }else{
    echo "<h5> Página Clientes</h5>";
  }

}
?>
<div class="row">
	<span class="col l4 m12 s12">
		<a class="waves-effect waves-light btn modal-trigger green" href="#modal1"><i class="material-icons large left">add</i>Cadastrar Clientes</a>		
	</span>
  	<span class="col l4 m12 s12">
  		<a class="waves-effect waves-light btn modal-trigger red " href="?page=delete&p=Clientes"><i class="material-icons large left">delete_forever</i>Excluir Clientes</a>		
  	</span>
  	<span class="col l4 m12 s12">
  		<a class="waves-effect waves-light btn modal-trigger blue " href="#?page=edit&p=Clientes"><i class="material-icons large left">cached</i>Alterar Clientes</a>		
  	</span>
  
  
</div>

  <!-- Modal Structure -->
<div class="row">
  <div id="modal1" class="modal modal">
    <div class="modal-content">
      <h4>Cadastro de Clientes</h4>
      <div class="row">
        <p class ="justificado"> Aqui  você faz o cadastro de clientes. O cadastro já inclui os clientes na lista do site automoaticamente, não é necessário vinculação.</p>
        <code class="red-text">CARACTERES INVÀLIDOS: @ # $ % & ! " ' ? <br>
          Use imagens que tem tamanho maior na largura (imagens deitadas).
        </code>
        <form action="valida_servico.php" method="POST" enctype="multipart/form-data">
	        <div class="file-field input-field">
            <div class="btn padrao-fundo">
              <span class="tiny">Logo</span>
              <input name="arquivo" type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div class="input-field col s12">          
	          <i class="material-icons prefix">mode_edit</i>
	          <input id="novo" name="descricao_cliente" type="text" data-length="60" required="required" class="validate">
	          <label for="novo">Descrição Cliente</label>
	        </div>	        
	        <div class="input-field col s12">          
	          <i class="material-icons prefix">fiber_new</i>
	          <input id="cidade" name="cidade_cliente" type="text"  required="required" class="validate">
	          <label for="novo">Cidade:</label>
	        </div>
          
	        <div class="input-field col s12">          
	          <i class="material-icons prefix">mode_edit</i>
	          <input id="site" name="site_cliente" type="text" data-length="60" required="required" class="validate">
	          <label for="site">Site Cliente, SEM HTTP ou HTTPS:</label>
	        </div>
     	 </div>

    	</div>
    <div class="modal-footer">
      <button type="submit"  name="btn_cliente" class="btn left padrao-fundo col  l2 m6 s12 push-l5 white-text waves-effect waves-black btn-flat">Cadastrar</a>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <table class="responsive-table highlight striped">
    <thead>
      <tr>
        <th>Código</th>
        <th>Descrição</th>
        <th>Cidade</th>
        <th>Status</th>
        <th>Imagem</th>
        <th>Site</th>
        
       
      </tr>
    </thead>
    <tbody>
      <?php 
      require('../conecta_db.php');
      $result = "SELECT* FROM t_clientes WHERE cli_status = 'A' order by cli_descricao";  
      $resultado = mysqli_query($mysqli, $result); 
      $aux = 0;
      while($exibe = mysqli_fetch_assoc($resultado)){
        //se o status for I ele  seta a classe para  ficar  vermelho  
        if($exibe['cli_status']=='I'){
          $efeito = ' class="inativo" ';
          $exibe['cli_status'] = "Inativo";
        }else{
          // se o status  for A ele mantem sem nada a classe
          $efeito = " ";                
          $exibe['cli_status'] = "Ativo";
        }
        echo"
        <tr>
        <td".$efeito.">".$exibe['cli_codigo']." </td>
        <td".$efeito.">".$exibe['cli_descricao']."</td>
        <td".$efeito.">".$exibe['cli_cidade']."</td>
        <td".$efeito.">".$exibe['cli_status']."</td>
        <td".$efeito.">".$exibe['cli_imagem']."</td>
        <td".$efeito.">".$exibe['cli_site']."</td>
        
        
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
