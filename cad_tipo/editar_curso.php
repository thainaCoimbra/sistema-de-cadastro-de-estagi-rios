<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_curso");
  $list->setCampoId("id_curso"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);
?>

<div class="container"><br><br>
  <legend>Curso</legend><hr><br>

<br><br><br>

    
     


            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
                <input type="hidden" name="editartxtLocal" value="editarCurso">
                <input type="hidden" name="id_curso" value="<?=$reg->id_curso?>">
                <label for="descricao">Editar Curso</label>
                <input type="text" class="form-control" id="descricao" placeholder="@Sistemas de Informação" name="txtdescricao" value="<?php echo utf8_encode($reg->descricao)?>">
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


