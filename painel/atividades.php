

<?php
    // verifica se foi pasado por direcionamento correto 
if(isset($_GET['page'])){
      //verifica se o direcionamento é mesmo para   serviços
  if(!$_GET['page']== 'servicos'){
    header('Location:index.php?acess=danied-servicos');
  }else{
    echo "<h5> Página de Atividades</h5>";
  }

}
?>
<div class="row">
  <a class="waves-effect waves-light btn modal-trigger padrao-fundo" href="#modal1"><i class="material-icons large left">add</i>Cadastrar Atividade</a>
  <a class="waves-effect waves-light btn modal-trigger red" href="?page=delete&p=Atividades"><i class="material-icons large left">delete_forever</i>Excluir Atividade</a>
</div>


<?php 
  if(isset($_GET['sucess'])){
      echo '
        <div class="chip green-text sucesso">
            Atividade cadastrada com sucesso!
            <i class="close material-icons">close</i>
          </div>';
    }else if(isset($_GET['fail'])){
      echo '
        <div class="chip red white-text sucesso">
            Alguma coisa deu errado.Verifique e tente novamente!
            <i class="close red material-icons">close</i>
          </div>';
    }
 ?>

  <!-- Modal Structure -->
<div class="row">
  <div id="modal1" class="modal modal">
    <div class="modal-content">
      <h4>Cadastro de  Serviços</h4>
      <div class="row">
        <p class ="justificado" >Use este campo para cadastrar um novo atividades. Depois disso você precisa vincular atividades com algum serviço. Por padrão em um novo cadastro o serviços já aparece com ativo. Sobre a ordem vai cadastrar no FIM DA FILA. Deve ser ajustado a ordem caso queira posteriormente.</p>
        <code class="red-text">CARACTERES INVÀLIDOS: @ # $ % & ! " ' ? </code>
        <form action="valida_servico.php" method="POST">
          <div class="input-field col s12">          
            <select name="option_atividade" required="required">
                <option   disabled selected>Selecione um serviço</option>
                <?php 
                  require ('../conecta_db.php');
                  $sql = "select * from t_servicos where ser_status = 'A'";                  
                  $resultado = mysqli_query($mysqli, $sql);            
                  while ($exibe = mysqli_fetch_assoc($resultado)) {
                    echo "<option value='".$exibe['ser_codigo']."'>".$exibe['ser_codigo']." - ".$exibe['ser_descricao']."</option>";
                   }
                ?>
              </select>
              <label>Selecione um serviços para Vincular</label>
          </div>
          <div class="input-field col s12">          
            <i class="material-icons prefix">mode_edit</i>
            <input id="novo" name="desc_atividade" type="text" data-length="60" required="required" class="validate">
            <label for="novo">Nova Atividade</label>
          </div>
      </div>

    </div>
    <div class="modal-footer">
      <button type="submit"  name="btn_atividade" class="btn left padrao-fundo col  l2 m6 s12 push-l5 white-text waves-effect waves-black btn-flat">Salvar</a>
      </form>
    </div>
  </div>
</div>
Serviços não Vinculados: ### (Qtde)
<div class="row">
  <table class="responsive-table highlight striped">
    <thead>
      <tr>
        
        <th>Descrição</th>
        <th>Vinc. Serviço</th>
        <th>Status</th>
        <th>Criado Em</th>
        <th>Edição</th>
       
      </tr>
    </thead>
    <tbody>
      <?php 
      require('../conecta_db.php');
      $result = "select ati_descricao, ser_descricao,ati_status,ati_datacadastro from t_atividade as atividade join t_servicos as servico on servico.ser_codigo = atividade.ser_codigo order by servico.ser_descricao ASC, atividade.ati_descricao ASC";  
      $resultado = mysqli_query($mysqli, $result); 
      $aux = 0;
      while($exibe = mysqli_fetch_assoc($resultado)){
        //se o status for I ele  seta a classe para  ficar  vermelho  
        if($exibe['ati_status']=='I'){
          $efeito = ' class="inativo" ';
          $exibe['ati_status'] = "Inativo";
        }else{
          // se o status  for A ele mantem sem nada a classe
          $efeito = " ";                
          $exibe['ati_status'] = "Ativo";
        }
        echo"
        <tr>
        <td".$efeito.">".$exibe['ati_descricao']." </td>
        <td".$efeito.">".$exibe['ser_descricao']."</td>
        <td".$efeito.">".$exibe['ati_status']."</td>
        
        <td".$efeito.">".date('d/m/Y', strtotime($exibe['ati_datacadastro']))."</td>
        <td><a href='?page=edit&p=Atividade&ati_codigo=".$exibe['ati_codigo']."'><i class='material-icons padrao'>edit</i></a></td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>
