<?php 
include("./../classes/manipulaData.php");
$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_tipo_estagio");
$dados= $list->getList();
?>


  
<div class="container"><br><br>
  <legend>Tipo de Estágio</legend><hr><br>
<div class="center" style="float: right;"><button data-toggle="modal" style="font-size: 20px;" data-target="#cad_tipo_estagio" class="btn btn-primary center-block"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Cadastrar Novo Tipo Estágio</button></div> 

<br><br><br>
   <table id="example" class="table table-striped table-bordered table-hover" cellspacing="ss0" width="100%">
   
        <thead>
            <tr>
             <th class="actions">Ações</th>
                <th>Tipo</th>
                
            </tr>
        </thead>
        
        <tbody>
                
            <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                <tr>
                
                 <td align="center">
                 

 <a class="btn btn-success" data-toggle='tooltip' title="Editar" href="index.php?url=cad_tipo/lista_cad_tipo&page=editar_tipo_estagio&id=<?=$reg->id_tipo_estagio?>"s ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger" data-toggle='tooltip' title="Deletar"
    onclick="del_confirm('index.php?url=cad_tipo/acao/crudAdm&DeletetxtLocal=deletarTipoEstagio&Id=<?=$reg->id_tipo_estagio?>')"><em class="glyphicon glyphicon-trash"></em></i></a>
 
                <td><?= utf8_encode($reg->tipo)?></td>                    
            
                </td>
         <?php  } ?>

            </tr>
            
        </tbody>
      
    </table>
    
      </div>

   <div class="modal fade" id="cad_tipo_estagio" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Tipo de Estágio</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
         <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
               <input type="hidden" name="txtLocal" value="CadastrarTipoEstagio">
                <label for="tipo_estagio">Novo Tipo de Estágio</label>
                <input type="text" class="form-control" id="tipo_estagio" placeholder="@Remunerado" name="txtTipoEstagio">
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
                </form>
            </div>
        </div>
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
