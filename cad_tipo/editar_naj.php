<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_naj");
  $list->setCampoId("id_naj"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);
?>


    
   



  
<div class="container"><br><br>
  <legend>NAJ's</legend><hr><br>
  
<br><br><br>
   
    





            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
             <input type="hidden" name="editartxtLocal" value="editarNaj">
             <input type="hidden" name="id_naj" value="<?=$reg->id_naj?>">
              <div class="form-group">
                <label for="nome_NAJ">Nome</label>
                <input type="text" class="form-control" id="nome_NAJ" placeholder="NAJ" name="txtNomeNaj" value="<?php echo utf8_encode($reg->nome)?>">
              </div>
              <div class="form-group">
                <label for="cep_NAJ">CEP</label>
                <input type="text" class="form-control" id="cep_NAJ" placeholder="CEP" name="txtCepNaj" value="<?=$reg->CEP?>">
              </div>
              <div class="form-group">
                <label for="endereco_NAJ">Endereço</label>
                <input type="text" class="form-control" id="endereco_NAJ" placeholder="Endereço" name="txtEnderecoNaj" value="<?php echo utf8_encode($reg->endereco)?>">
              </div>
              <div class="form-group">
                <label for="telefone_NAJ">Telefone</label>
                <input type="text" class="form-control" id="telefone_NAJ" placeholder="Telefone" name="txtNumeroNaj" value="<?=$reg->telefone?>">
              </div>
            

        
                

                <div class="btn-group" role="group">
                    <button type="submit" id="saveImage" class="btn btn-success btn-hover-green" data-action="save" role="button">Salvar</button>
                </div>
          
        </form>
    <span id="scroll_edit"></span>
    </div>
 



      <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>