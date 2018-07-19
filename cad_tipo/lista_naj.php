<?php 
include("./../classes/manipulaData.php");
$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_naj");
$dados= $list->getList();
?>





<div class="container"><br><br>
  <legend>NAJ's </legend><hr><br>
  <div class="center" style="float: right;"><button  data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block" style="font-size: 20px;" ><i class="fa  fa-map-marker" aria-hidden="true"></i> Cadastrar Nova Naj</button></div>
<br><br><br>
   <table id="example" class="table table-striped table-bordered table-hover" cellspacing="ss0" width="100%">

        <thead>
            <tr>
             <th class="actions">Ações</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>CEP</th>

            </tr>
        </thead>

        <tbody>

            <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                <tr>

                 <td align="center">


 <a class="btn btn-success" href="index.php?url=cad_tipo/lista_cad_tipo&page=editar_naj&id=<?=$reg->id_naj?>" data-toggle='tooltip' title="Editar" ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger" data-toggle='tooltip' title="Deletar" onclick="del_confirm('index.php?url=cad_tipo/acao/crudAdm&DeletetxtLocal=deletarNaj&Id=<?=$reg->id_naj?>')"><em class="glyphicon glyphicon-trash"></em></i></a>

                <td><?= utf8_encode($reg->nome)?></td>
                <td><?= utf8_encode($reg->endereco)?></td>
                 <td><?=$reg->telefone?></td>
                 <td><?= $reg->CEP?></td>

                </tr>
         <?php  } ?>



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

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">NAJ</h3>
        </div>
        <div class="modal-body">

            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
             <input type="hidden" name="txtLocal" value="CadastrarNaj">
              <div class="form-group">
                <label for="nome_NAJ">Nome</label>
                <input type="text" class="form-control" id="nome_NAJ" placeholder="NAJ" name="txtNomeNaj">
              </div>
              <div class="form-group">
                <label for="cep_NAJ">CEP</label>
                <input type="text" class="form-control" id="cep_NAJ" placeholder="CEP" name="txtCepNaj">
              </div>
              <div class="form-group">
                <label for="endereco_NAJ">Endereço</label>
                <input type="text" class="form-control" id="endereco_NAJ" placeholder="Endereço" name="txtEnderecoNaj">
              </div>
              <div class="form-group">
                <label for="telefone_NAJ">Telefone</label>
                <input type="text" class="form-control" id="telefone_NAJ" placeholder="Telefone" name="txtNumeroNaj">
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
        </div> </form>
    </div>
  </div>
</div>
<!-- Fim Cadastrar NAJ-->
</div>


