

<?php
    // verifica se foi pasado por direcionamento correto 
if(isset($_GET['page'])){
      //verifica se o direcionamento é mesmo para   serviços
  if(!$_GET['page']== 'servicos'){
    header('Location:index.php?acess=danied-servicos');
  }else{
    echo "<h5> Página Serviços</h5>";
  }

}
?>

<a class="waves-effect waves-light btn modal-trigger padrao-fundo" href="#modal1"><i class="material-icons large left">add</i>Cadastrar Serviço</a>


  <!-- Modal Structure -->
  <div id="modal1" class="modal modal">
    <div class="modal-content">
      <h4>Cadastro de  Serviços</h4>
      <div class="row">
        <p class ="justificado" >Use este campo para cadastrar um novo serviço. Depois disso você precisa vincular atividades para  este serviço. Por padrão em um novo cadastro o serviços já aparece com ativo. Sobre a ordem vai cadastrar no FIM DA FILA. Deve ser ajustado a ordem caso queira posteriormente.</p>
        <code class="red-text">CARACTERES INVÀLIDOS: @ # $ % & ! " ' ? </code>
        <div class="input-field col s12">
          <form action="valida_serviço" method="POST">
          <input id="novo" name="novo_ser" type="text" data-length="60" class="validate">
          <label for="novo">Novo Serviço</label>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <button type="submit"  name="cadastro_servico" class="btn padrao fundo waves-effect waves-black btn-flat">Enviar</a>
      </form>
    </div>
  </div>


<table class="responsive-table highlight striped">
  <thead>
    <tr>
      <th>Ordem</th>
      <th>Codigo</th>
      <th>Descrição</th>
      <th>Status</th>
      <th>Criado Em</th>
      <th>Novo Até</th>
      <th>Edição</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require('../conecta_db.php');
    $result = "select * from t_servicos order by ser_ordem";  
    $resultado = mysqli_query($mysqli, $result); 
    $aux = 0;
    while($exibe = mysqli_fetch_assoc($resultado)){
      if($exibe['ser_status']=='I'){
        $efeito = ' class="inativo" ';
      }else{
        $efeito = " ";                
      }
      echo"
      <tr>
      <td".$efeito.">".$exibe['ser_ordem']." </td>
      <td".$efeito.">".$exibe['ser_codigo']."</td>
      <td".$efeito.">".$exibe['ser_descricao']."</td>
      <td".$efeito.">".$exibe['ser_status']."</td>
      <td".$efeito.">".$exibe['ser_datacadastro']."</td>
      <td".$efeito.">".$exibe['ser_novo']."</td>
      <td><i class='material-icons'>edit</i></td>
      </tr>";
    }
    ?>
  </tbody>
</table>

