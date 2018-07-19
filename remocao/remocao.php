
<?php 
  include("../classes/manipulaData.php");

  $visualizar = new manipulaData();
  $visualizar->setTable( "tb_lotacao" );
  $visualizar->setCampoId( 'id_cad' );
  $visualizar->setValorId( $_GET[ 'id_cad' ] );
  $dados = $visualizar->getListEditar();
  $reg = mysqli_fetch_object( $dados );

  $list = new manipulaData();
  $list->setCampos("*");
  $list->setTable("tb_naj");
  $dados= $list->getList();

  $list2 = new manipulaData();
  $list2->setCampos("*");
  $list2->setTable("tb_defensoria");
  $dados2= $list2->getList();

  $visualizar2 = new manipulaData();
  $visualizar2->setTable("tb_cadastro");
  $visualizar2->setCampoId( 'id_cad' );
  $visualizar2->setValorId( $_GET[ 'id_cad' ] );
  $dados5= $visualizar2->getListEditar();
  $reg5 = mysqli_fetch_object( $dados5 );



// Metodos para pegar ultimo id remoção - especifico do id cad
  $list1 = new manipulaData();
  $list1->setTable("tb_remocao");
  $list1->setCampoId("id_cad"); 
  $list1->setValorId($_GET["id_cad"]); // metodo para pega da url 
  $dados1= $list1->getListEditar();
  $reg1 = mysqli_fetch_object($dados1);

  $tt = new manipulaData();
  $tt->setTable("tb_remocao");
  $tt->setCampoId("id_cad");
  $tt->setValorId($reg1->id_cad." order by id_remocao DESC");
  $ts = $tt->getListEditar();
  $teste = mysqli_fetch_object($ts);

?>
<div class="right"><a href="index.php?url=remocao/lista_remocao"><button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" ><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</button></a></div> <br> <br> <br>

<div class="container">
  <form class="form-horizontal" method="post" action="remocao/acoes/crudRemocao.php" enctype="multipart/form-data">
  <input name="txtLocal" type="hidden" class="form-control" value="Editar">
    <input type="hidden" name="id_cad" value="<?=$reg->id_cad?>">
     <input type="hidden" name="id_rem" value="<?=$teste->id_remocao?>">
  <div class="row">
    <div> 
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="lotacao">
          <legend>
            <h3>Encaminhamento Estagiário/Colaborador</h3>
          </legend>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> Nome Estagiário/Colaborador: </div>
                <div class="col-md-12">
                  <input name="" type="text" class="form-control" id="nomeNaj"  value="<?php echo utf8_encode($reg5->nome)?>" disabled>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <div class="col-md-12"> Matrícula: </div>
                <div class="col-md-8">
                  <input name="" type="text" class="form-control" id="nomeNaj"  value="<?=$reg5->matricula?>" disabled>
                </div>
              </div>
            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12"> Data Remoção: </div>
                                <div class="col-md-8">
                                    <?php  $data= date("d/m/Y")?> 
                        <input name="" type="text" class="form-control" value="<?=$data?>" disabled>
                                </div>
                            </div>
                        </div>
          </div>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> NAJ: </div>
                <div class="col-md-12">
                  <?php $naj = new manipulaData();
                    $naj->setTable("tb_naj");
                    $naj->setCampoId( 'id_naj' );
                    $naj->setValorId($reg->id_naj);
                    $najnome= $naj->getListEditar();
                    $naj =  mysqli_fetch_object($najnome)
                  ?>
                                    <input name="naj" type="hidden" class="form-control" value="<?=$naj->id_naj?>">
                  <input name="" type="text" class="form-control" id="nomeNaj"  value="<?php echo utf8_encode($naj->nome)?>" disabled>
                </div>
              </div>
            </div>

          </div>
          <br>
          
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <div class="col-md-8"> Nova NAJ: </div>
                <div class="col-md-12">
                  <select id="" name="txtNomeNaj" class="form-control">
                  <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                  <option value="<?php echo utf8_encode($reg->id_naj)?>">
                  <?php echo utf8_encode($reg->nome)?>
                  </option>
                  <?php  } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
<div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12"> Data Início: </div>
                                <div class="col-md-8">
                                    
                        <input name="data_inicio" type="date" class="form-control" >
                                </div>
                            </div>
                        </div>
</div>
          
          <div class="row">
                                      <div class="col-md-5">
                                <div class="form-group">
                                    <div class="col-md-8"> Tipo Servidor: </div>
                                    <div class="col-md-12">
                                        <?php
                                        $vi = new manipulaData();
                                        $vi->setTable("tb_tipo_estagio");
                                        $dados2= $vi->getList();
                                        ?>
                                        <select id="tipo_estagio" name="id_tipo_estagio" class="form-control">
                                            <?php  while($tipoestagio = mysqli_fetch_object($dados2)){ ?>
                                                <option value="<?=$tipoestagio->id_tipo_estagio?>" <?php if($tipoestagio->id_tipo_estagio == $reg->id_tipo_estagio){echo "selected"; } ?> >
                                                    <?php echo utf8_encode($tipoestagio->tipo)?>
                                                </option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                                  <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="col-md-8"> Observação </div>
                                    <div class="col-md-12">
                                        <textarea name='obs' class="form-control" rows='5' cols="20"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

        </div>
      </div>
      <br>
      
      <center>
        <div class="btn-group">
          <button id="btlimpar" name="txtLocal" value="cancelar" class="btn btn-danger">Cancelar</button>
        </div>
        <div class="btn-group">
          <button id="btsalvar" name="txtLocal" value="Editar"  class="btn btn-success">Salvar</button>
        </div>
      </center>
    </div>
  </div>
</form>
</div>
<br><br><br>

  <div class="container">
  
  <div class="row">
    <div> 
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="lotacao">
          <legend>
            <h3>Histórico</h3>
          </legend>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <div class="col-md-8"> NAJ Atual: </div>
                <div class="col-md-12">
                  <?php  
                    $lot= new manipulaData();
                    $lot->setTable("tb_lotacao");
                    $lot->setCampoId('id_cad');
                    $lot->setValorId($_GET['id_cad']);
                    $lot= $lot->getListEditar();
                    $lot = mysqli_fetch_object($lot);

                    

                    $najs= new manipulaData();
                    $najs->setTable("tb_naj");
                    $najs->setCampoId('id_naj');
                    $najs->setValorId($lot->id_naj);
                    $naj= $najs->getListEditar();
                    $naj1 = mysqli_fetch_object($naj);
                  ?>
                  
                  <input name="naj" type="text" class="form-control" id="naj" placeholder="naj" value="<?php echo utf8_encode($naj1->nome)?>" readonly>
                </div>
              </div>
            </div>
          </div> <br>


                    <?php
                    $id_cad = $_GET['id_cad'];
                    $inicio= new manipulaData();
                    $inicio->setTable("tb_remocao");
                    $inicio->setCampoId('id_cad');
                    $inicio->setValorId($id_cad);
                    $inicio_f= $inicio->getListEditar();
                    $inicio1 = mysqli_fetch_object($inicio_f);

                    //echo "<script> alert('$reg->data_cadastro'); </script>";

                    ?>






                    <br>

                    <?php 
                        $id_cad = $_GET['id_cad'];
                        $rem1 = new manipulaData();
                        $rem1->setTable("tb_remocao");
                        $rem1->setCampoId("id_cad");
                        $rem1->setValorId($id_cad);
                        $rem2 = $rem1->getList1();

                     ?>
         <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-8"> Histórico:</div>
                                <div class="col-md-12">
                                    <table class="table table-dark" style="font-size:85%;">
                                        <thead class="thead-dark">
                                        <tr>

                                            <th>Unidade</th>
    
                                            <th>Início</th>
    
                                            <th>Final</th>
    
                                            <th>Função</th>
    
                                            <th>Total de Horas</th>
    
                                            <th>Observações</th>

                                            <th>Ações</th>
                                        </tr>
    
                                        </thead>
                                        
                                <tbody>
                                    <?php 
                                    while ($rem = mysqli_fetch_object($rem2)) { ?>

                                        <?php                                       
                                        $te = new manipulaData();
                                        $te->setTable("tb_tipo_estagio");
                                        $te->setCampoId('id_tipo_estagio');
                                        $te->setValorId($reg5->id_tipo_estagio);
                                        $tipo= $te->getListEditar();
                                        $tie = mysqli_fetch_object($tipo);

                                        

                                        $najs= new manipulaData();
                                        $najs->setTable("tb_naj");
                                        $najs->setCampoId('id_naj');
                                        $najs->setValorId($rem->id_najNova);
                                        $naj= $najs->getListEditar();
                                        $naj1 = mysqli_fetch_object($naj);
                                    ?>

                                    <tr>

                                        <td><input class="form-control" name="nome" value="<?php echo utf8_encode($naj1->nome) ?>" readonly type="text">
                                            <input type="hidden" name="nome_naj" value="<?= $naj1->id_naj ?>">
                                  
                                        </td>

                                        <td><input class="form-control inicio_d" value="<?php echo $rem->data_inicio?>"  readonly type="text" ></td>

                                        <td><input class="form-control final_d" value="<?php echo $rem->data_rem ?>"  readonly type="text"></td>

                                        <td><input class="form-control" value="<?php echo utf8_encode($tie->tipo) ?>" type="text" readonly></td>

                                        <td><input class="form-control total" type="text" value="<?php echo utf8_encode($rem->totalHoras) ?>" readonly></td>

                                        
                                        <td>        
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $contador ?>">
                                                          Visualizar Relatório
                                                    </button>
                                                    <div id="modal<?php echo $contador?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Relatório</h4>
      </div>
      <div class="modal-body">
        <p><?php  echo utf8_encode($rem->obs) ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                                                    

                                        </td>
                                        <td> 
<a class="btn btn-success" data-toggle='tooltip' title='Editar' href="index.php?url=historico/editar_historico&id_rem=<?=$rem->id_remocao?>"><i class="glyphicon glyphicon-pencil"></i></a>
</td>
                                    </tr>

                                <?php $contador++; } ?>


                                </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




        </div>
      </div>
      <br>
      

    </div>
  </div>
</form>
</div>
<script src="jquery/jquery.js"></script>
