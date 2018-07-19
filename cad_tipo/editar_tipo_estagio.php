
<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_tipo_estagio");
  $list->setCampoId("id_tipo_estagio"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);
?>

  
<div class="container"><br><br>
  <legend>Tipo de Servidor</legend><hr><br>


<br><br><br>
   
    
   


            <!-- content goes here -->
         <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
               <input type="hidden" name="editartxtLocal" value="editarTipoEstagio">
               <input type="hidden" name="id_tipo_estagio" value="<?=$reg->id_tipo_estagio?>">
                <label for="tipo">Editar Tipo de Servidor</label>
                <input type="text" class="form-control" id="tipo_estagio" placeholder="@Remunerado" name="txtTipo" value="<?=$reg->tipo?>">
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

