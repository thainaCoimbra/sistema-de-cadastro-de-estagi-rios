<!-- Teste -->
<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_remocao");
  $list->setCampoId("id_remocao"); 
  $list->setValorId($_GET["id_rem"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);

  $naj1 = new manipulaData();
  $naj1->setTable("tb_naj");
  $naj2 = $naj1->getList();


?>



<div class="container">

  <div class="right"><a href="index.php?url=pre_cadastro/editar_relatorio&id_cad=<?=$reg->id_cad?>"><button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" ><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</button></a></div> <br>
  <br> 
	<legend>Histórico de Encaminhamento</legend><hr>
<br>
   
    




            <!-- content goes here -->
            <form action="historico/acoes/crudHistorico.php" method="post">
             <input type="hidden" name="id_rem" value="<?=$reg->id_remocao?>">
             <input type="hidden" name="id_cad" value="<?=$reg->id_cad?>">
            

  			<div class="row">
 			 <div class="col-md-6">            
              <div class="form-group">
                <label for="nome_NAJ">Unidade atual?</label> <br>
                <label class="radio-inline"><input type="radio" name="lotAtual" value="Sim" onclick="mostra_esconde_oab('esconde')" required="required">Sim</label>
				<label class="radio-inline"><input type="radio" name="lotAtual" value="Nao" onclick="mostra_esconde_oab('mostra');" required="required" >Não</label>
              </div>
             </div>
            </div>

 			<div class="row">
 			 <div class="col-md-6">            
              <div class="form-group">
                <label for="nome_NAJ">Unidade</label>
        <select class="form-control" name="naj">
                <?php while ($naj = mysqli_fetch_object($naj2)) { ?>
                <option value="<?=$naj->id_naj?>"
                	<?php if ($naj->id_naj == $reg->id_najNova) {echo "selected";} ?>>
                	<?php echo utf8_encode($naj->nome) ?>
                </option>
            <?php } ?>
        </select>
              </div>
             </div>
            </div>

			<div class="row">
				 <div class="col-md-6">
              <div class="form-group">
                <label >Início</label>
                <input type="date" class="form-control"  name="dataInicio" value="<?=$reg->data_inicio?>">
              </div>
             </div>
            </div>

			<div class="row">
				 <div class="col-md-6">
              <div class="form-group"  style="display: none;" id="conteudo_oab_mostra">
                <label >Final</label>
                <input type="text" class="form-control"  name="dataFim" value="<?=$reg->data_rem?>">
              </div>
             </div>
            </div>

			<div class="row">
				 <div class="col-md-6">
              <div class="form-group">
                <label for="telefone_NAJ">Observação</label>
                <textarea class="form-control" rows='5' cols="20" name="obs"><?php echo utf8_encode($reg->obs)?></textarea>
              </div>
             </div>
            </div>

            <div class="row">
         <div class="col-md-6">
              <div class="form-group">
                <label for="Total horas">Total de horas</label>
                <input type="text" class="form-control"  name="totalHoras" value="<?=$reg->totalHoras?>">
              </div>
             </div>
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


</div>