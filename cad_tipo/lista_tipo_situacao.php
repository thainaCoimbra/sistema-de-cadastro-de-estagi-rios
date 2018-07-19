<?php 
include("./../classes/manipulaData.php");
$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_situacao");
$dados= $list->getList();
?>

  
<div class="container"><br><br>
  <legend>Situação</legend><hr><br>
<div class="center" style="float: right;"><button data-toggle="modal" style="font-size: 20px;" data-target="#cad_situacao_estagiario" class="btn btn-primary center-block"><i class="fa fa-id-card" aria-hidden="true"></i> Cadastrar Situação Estagiário</button></div>
<br><br><br>
   <table id="example" class="table table-striped table-bordered table-hover" cellspacing="ss0" width="100%">
   
        <thead>
            <tr>
             <th class="actions">Ações</th>
                <th>Situacão</th>
                
            </tr>
        </thead>
        
        <tbody> 
                
            <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                <tr>
                
                 <td align="center">
                 

 <a class="btn btn-success" data-toggle='tooltip' title="Editar" href="index.php?url=cad_tipo/lista_cad_tipo&page=editar_situacao&id=<?=$reg->id_situacao?>"s ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger" data-toggle='tooltip' title="Deletar"
    onclick="del_confirm('index.php?url=cad_tipo/acao/crudAdm&DeletetxtLocal=deletarSituacao&Id=<?=$reg->id_situacao?>')"><em class="glyphicon glyphicon-trash"></em></i></a>
 </td>  
                <td><?= utf8_encode($reg->situacao)?></td>                    
            
                
         <?php  } ?>

            </tr>
            
        </tbody>
      
    </table>
    
      </div>

 <div class="modal fade" id="cad_situacao_estagiario" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Situação Estagiário</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
              <div class="form-group">
                <input type="hidden" name="txtLocal" value="CadastrarSituacaoEstagiario">
                <label for="situacao_estagiario">Nova Situação Estagiário</label>
                <input type="text" class="form-control" id="situacao_estagiario" placeholder="@ativo" name="txtSituacaoEstagio">
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


