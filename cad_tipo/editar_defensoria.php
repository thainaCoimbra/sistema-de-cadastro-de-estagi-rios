<?php 
include("../classes/manipulaData.php");
  $list = new manipulaData();
  $list->setTable("tb_defensoria");
  $list->setCampoId("id_defensoria"); 
  $list->setValorId($_GET["id"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);

$list4 = new manipulaData();
$list4->setTable("tb_naj");
$dados4 = $list4->getList();


?>
<div class="container"><br><br>
  <legend>Defensorias</legend><hr><br>
   
            
            <!-- content goes here -->
            <form action="index.php?url=cad_tipo/acao/crudAdm" method="post">
             <input type="hidden" name="editartxtLocal" value="editarDefensoria">
             <input type="hidden" name="id_defensoria" value="<?=$reg->id_defensoria?>">
              <div class="form-group">
                <label for="nome_defensoria">Nome</label>
                <input type="text" class="form-control" id="nome_defensoria" placeholder="Defensoria" name="txtNomeDefensoria" value="<?=$reg->nome?>">
                
              </div>
              <div class="form-group">
                <label for="NAJ_defensoria">NAJ</label>
                <select name="txtNajDefensoria" class="form-control" id="" >
                 

                    <?php  while($reg2 = mysqli_fetch_object($dados4)){ ?>
                                
<option value="<?=$reg2->id_naj?>" <?php if($reg2->id_naj == $reg->fk_naj){  echo "selected"; }?>
                                  >
                                  <?=$reg2->nome?>
                                    

                                  </option>

                         <?php } ?>      


                                 
                </select>
                    
              </div>
              <div class="form-group">
                <label for="telefone_defensoria">Telefone</label>
                <input type="text" class="form-control" id="telefone_defensoria" placeholder="Telefone" name="txtTelefoneDefensoria" value="<?=$reg->telefone?>">
              </div>
            

  
     

                <div class="btn-group" role="group">
                    <button type="submit" id="saveImage" class="btn btn-success btn-hover-green" data-action="save" role="button">Salvar</button>
                </div>
        
        </form>
    <span id="scroll_edit"></span>
    </div>
  
</div>