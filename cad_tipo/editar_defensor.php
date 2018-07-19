<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_defensor");
  $list->setCampoId("id_defensor"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);

  
?>

<div class="container"><br><br>
  <legend>Defensor</legend><hr><br>

<br><br><br>

    
     


            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
                <input type="hidden" name="editartxtLocal" value="editarDefensor">
                <input type="hidden" name="id_defensor" value="<?=$reg->id_defensor?>">
                <label for="descricao">Editar Defensor</label>
                <input type="text" class="form-control" id="descricao"  name="txtDefensor" value="<?=$reg->nome?>">
                <br>  
                <label for="descricao">Editar Defensor</label>
                <input type="text" class="form-control" id="descricao"  name="txtCargoDefensor" value="<?=$reg->cargo?>">
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


