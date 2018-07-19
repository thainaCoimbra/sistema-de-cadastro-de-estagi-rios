<?php 
include("./../classes/manipulaData.php");
$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_defensor");
$dados= $list->getList();
?>

  
<div class="container"><br><br>
  <legend>Defensor</legend><hr><br>
<div class="center" style="float: right;"><button data-toggle="modal" style="font-size: 20px;" data-target="#cad_defensor" class="btn btn-primary center-block"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Cadastrar Novo Defensor</button></div>
<br><br><br>
   <table id="example" class="table table-striped table-bordered table-hover" cellspacing="ss0" width="100%">
   
        <thead>
            <tr>
             <th class="actions">Ações</th>
                <th>Defensor</th>
                <th>
                  Cargo
                </th>
                
            </tr>
        </thead>
        
        <tbody> 
                
            <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                <tr>
                
                 <td align="center">
                 

 <a class="btn btn-success" href="index.php?url=cad_tipo/lista_cad_tipo&page=editar_defensor&id=<?=$reg->id_defensor?>" data-toggle='tooltip' title="Editar" ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger" data-toggle='tooltip' title="Deletar"
    onclick="del_confirm('index.php?url=cad_tipo/acao/crudAdm&DeletetxtLocal=deletarDefensor&Id=<?=$reg->id_defensor?>')"><em class="glyphicon glyphicon-trash"></em></i></a>
 </td>  
                <td><?= utf8_encode($reg->nome)?></td>
                <td>  <?= utf8_encode($reg->cargo)?></td>                    
            
                
         <?php  } ?>

            </tr>
            
        </tbody>
      
    </table>
    
      </div>

 <div class="modal fade" id="cad_defensor" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Defensor</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
                <input type="hidden" name="txtLocal" value="CadastrarDefensor">
                <label for="descricao">Nome Defensor</label>
                <input type="text" class="form-control" id="descricao"  name="txtDefensor">
                <br>  
                <label for="descricao">Cargo Defensor</label>
                <input type="text" class="form-control" id="descricao"  name="txtCargoDefensor">
              </div>
              
           

        </div>
        <div class="modal-footer">
            <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Fechar</button>
                </div>

                <div class="btn-group" role="group">
                    <button type="submit" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Salvar</button>
                </div>
            </div>
        </div>  </form>
    </div>
  </div>
</div>
   
      <script>


          /*
$(document).ready(function() {
    $('#example').DataTable();
} );
*/

          if ( $.fn.dataTable.isDataTable( '#example' ) ) {
              table = $('#example').DataTable();
          }
          else {
              table = $('#example').DataTable( {
                  paging: false
              } );
          }
</script>


