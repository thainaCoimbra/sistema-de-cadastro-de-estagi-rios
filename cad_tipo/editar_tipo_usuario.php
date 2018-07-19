<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_perfil");
  $list->setCampoId("id_perfil"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);
?>



  
<div class="container"><br><br>
 <legend>Usúario</legend><hr><br>
 
 <br><br><br>
   
            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
                <input type="hidden" name="editartxtLocal" value="editarPerfilUsuario">
                <input type="hidden" name="id_perfil" value="<?=$reg->id_perfil?>">
                <label for="perfil_usuario">Editar Perfil</label>
                <input type="text" class="form-control" id="perfil_usuario" placeholder="@" name="txtPerfilUsuario" value="<?=$reg->tipo?>">
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

