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
<div class="row">
  <a class="waves-effect waves-light btn modal-trigger green" href="#modal1"><i class="material-icons large left">add</i>Cadastrar Serviço</a>
  <a class="waves-effect waves-light btn modal-trigger red" href="?page=delete&p=Servicos"><i class="material-icons large left">delete_forever</i>Excluir Serviço</a>
  <a class="waves-effect waves-light btn modal-trigger blue" href="?page=ordem&p=Ordem"><i class="material-icons large left">cached</i>Alterar Ordem Serviço</a>
</div>

  <!-- Modal Structure -->
<div class="row">
  <div id="modal1" class="modal modal">
    <div class="modal-content">
      <h4>Cadastro de  Serviços</h4>
      <div class="row">
        <p class ="justificado" >Use este campo para cadastrar um novo serviço. Depois disso você precisa vincular atividades para  este serviço. Por padrão em um novo cadastro o serviços já aparece com ativo. Sobre a ordem vai cadastrar no FIM DA FILA. Deve ser ajustado a ordem caso queira posteriormente.</p>
        <code class="red-text">CARACTERES INVÀLIDOS: @ # $ % & ! " ' ? </code>
        <form action="valida_servico.php" method="POST">
        <div class="input-field col s12">          
          <i class="material-icons prefix">mode_edit</i>
          <input id="novo" name="novo_ser" type="text" data-length="60" required="required" class="validate">
          <label for="novo">Novo Serviço</label>
        </div>
        <div class="input-field col s12">          
          <i class="material-icons prefix">fiber_new</i>
          <input id="data" name="data_ser" type="date"  required="required" class="validate">
          <label for="novo">Data Novo - Data > Hoje se não Novo</label>
        </div>
      </div>

    </div>
    <div class="modal-footer">
      <button type="submit"  name="cadastro_servico" class="btn left padrao-fundo col  l2 m6 s12 push-l5 white-text waves-effect waves-black btn-flat">Salvar</a>
      </form>
    </div>
  </div>
</div>

<div class="row">
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
        //se o status for I ele  seta a classe para  ficar  vermelho  
        if($exibe['ser_status']=='I'){
          $efeito = ' class="inativo" ';
          $exibe['ser_status'] = "Inativo";
        }else{
          // se o status  for A ele mantem sem nada a classe
          $efeito = " ";                
          $exibe['ser_status'] = "Ativo";
        }
        echo"
        <tr>
        <td".$efeito.">".$exibe['ser_ordem']." </td>
        <td".$efeito.">".$exibe['ser_codigo']."</td>
        <td".$efeito.">".$exibe['ser_descricao']."</td>
        <td".$efeito.">".$exibe['ser_status']."</td>
        <td".$efeito.">".$exibe['ser_datacadastro']."</td>
        <td".$efeito.">".date('d/m/Y', strtotime($exibe['ser_novo']))."</td>
        <td><a href='?page=edit&p=Servicos&ser_codigo=".$exibe['ser_codigo']."'><i class='material-icons padrao'>edit</i></a></td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
