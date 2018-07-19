 <?php 
include("./../classes/manipulaData.php");
$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_defensoria");
$dados= $list->getList();

$list->setTable("tb_naj");
$dados1= $list->getList();

$list3 = new manipulaData();
$list3->setCampoId("id_naj");
$list3->setTable("tb_naj");
?>



   <div class="modal fade" id="cad_defensoria" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Defensoria</h3>
        </div>
        <div class="modal-body">
            
            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
             <input type="hidden" name="txtLocal" value="CadastrarDefensoria">
              <div class="form-group">
                <label for="nome_defensoria">Nome</label>
                <input type="text" class="form-control" id="nome_defensoria" placeholder="Defensoria" name="txtNomeDefensoria">
              </div>
              <div class="form-group">
                <label for="NAJ_defensoria">NAJ</label>
                <select name="txtNajDefensoria" class="form-control" id="">
                    <?php  while($reg = mysqli_fetch_object($dados1)){ ?>
                                <option value="<?=$reg->id_naj?>"><?=$reg->nome?></option>
                                <?php  } ?>
                </select>
                    
              </div>
              <div class="form-group">
                <label for="telefone_defensoria">Telefone</label>
                <input type="text" class="form-control" id="telefone_defensoria" placeholder="Telefone" name="txtTelefoneDefensoria">
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
        </div></form>
    </div>
  </div>
</div>



  <br>
<div class="container"><br><br>
  <legend>Defensorias</legend><hr><br>
  <div class="center" style="float: right;"><button data-toggle="modal" style="font-size: 20px;" data-target="#cad_defensoria" class="btn btn-primary center-block"><i class="fa fa-university" aria-hidden="true"></i> Defensoria</button></div>
<br><br><br>
   <table id="example" class="table table-striped table-bordered table-hover" cellspacing="ss0" width="100%">
   
        <thead>
            <tr>
             <th class="actions">Ações</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>NAJ</th>
                
            </tr>
        </thead>
        
        <tbody>
                
            <?php  while($reg2 = mysqli_fetch_object($dados)){ ?>
                <tr>
                
                 <td align="center">
                 

 <a class="btn btn-success" href="index.php?url=cad_tipo/lista_cad_tipo&page=editar_defensoria&id=<?=$reg2->id_defensoria?>" data-toggle='tooltip' title="Editar" ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger" data-toggle='tooltip' title="Deletar"
    onclick="del_confirm('index.php?url=cad_tipo/acao/crudAdm&DeletetxtLocal=deletarDefensoria&Id=<?=$reg2->id_defensoria?>')"><em class="glyphicon glyphicon-trash"></em></i></a>
 </td>
                <td><?= utf8_encode($reg2->nome)?></td>            
                 <td><?= utf8_encode($reg2->telefone)?></td>
                <td>
                  <?php
          
          $list3->setValorId("$reg2->fk_naj");
          $dados2= $list3->getList1();
          $reg3 = mysqli_fetch_object($dados2);
           
if($reg2->fk_naj == $reg3->id_naj)
{                  echo $reg3->nome;  

}

?>                   </td>

                 <?php  } ?>
                               
                                
 

            </tr>
            
        </tbody>
      
    </table>
    



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

<!-- line modal -->

</div>


