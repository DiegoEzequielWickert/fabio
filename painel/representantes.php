<?php
    // verifica se foi pasado por direcionamento correto 
if(isset($_GET['page'])){
        //verifica se o direcionamento é mesmo para   serviços
  if(!$_GET['page']=='representantes'){
    header('Location:index.php?acess=danied-representantes');
  }else{
    echo "<h5> Página Representantes</h5>";
  }

}
?>
<div class="row">
	<span class="col l4 m12 s12">
		<a class="waves-effect waves-light btn modal-trigger green" href="#modal1"><i class="material-icons large left">add</i>Cadastro</a>		
	</span>
 <span class="col l4 m12 s12">
  <a class="waves-effect waves-light btn modal-trigger blue " href="?page=edit&p=Clientes"><i class="material-icons large left">cached</i>Alterar</a>		
</span>
<span class="col l4 m12 s12">
  <a class="waves-effect waves-light btn modal-trigger red" href="?page=delete&p=Clientes"><i class="material-icons large left">delete_forever</i>Excluir</a>    
</span>

</div>
<!-- Modal Structure -->
<div class="row">
  <div id="modal1" class="modal modal">
    <div class="modal-content">
      <h4>Cadastro de Representantes</h4>
      <div class="row">
        <p class ="justificado"> Aqui é realizado o cadastro de representates.</p>
        <code class="red-text">CARACTERES INVÀLIDOS: @ # $ % & ! " ' ? </code>
        <form action="valida_servico.php" method="POST">
         <div class="input-field col s12">          
           <i class="material-icons prefix">mode_edit</i>
           <input id="novo" name="descricao_cliente" type="text" data-length="60" required="required" class="validate">
           <label for="novo">Descrição Representante</label>
         </div>	        
         <div class="input-field col m12 l8">
           <i class="material-icons prefix">fiber_new</i>
           <input id="cidade" name="cidade_cliente" type="text"  required="required" class="validate">
           <label for="novo">Cidade:</label>
         </div>
         <div class="input-field col s4">
           <i class="material-icons prefix">phone</i>
           <input id="telefone" name="telefone" type="text"  required="required" class="validate">
           <label for="telefone">Telefone:</label>
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