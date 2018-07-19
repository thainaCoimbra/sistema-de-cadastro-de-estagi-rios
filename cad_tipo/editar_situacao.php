<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_situacao");
  $list->setCampoId("id_situacao"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);
?>
  
<div class="container"><br><br>
  <legend>Situação</legend><hr><br>

<br><br><br>
   
            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
                <input type="hidden" name="editartxtLocal" value="editarSituacaoEstagiario">
                <input type="hidden" name="id_situacao" value="<?=$reg->id_situacao?>">
                <label for="situacao_estagiario">Editar Situação Estagiário</label>
                <input type="text" class="form-control" id="situacao_estagiario" placeholder="@ativo" name="txtSituacaoEstagio" value="<?=$reg->situacao?>">
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


