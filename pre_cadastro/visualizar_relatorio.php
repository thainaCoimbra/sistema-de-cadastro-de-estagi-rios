<?php
  $visualizar = new manipulaData();
  $visualizar->setTable( "tb_cadastro" );
  $visualizar->setCampoId( 'id_cad' );
  $visualizar->setValorId( $_GET[ 'id_cad' ] );
  $dados = $visualizar->getListEditar();
  $reg = mysqli_fetch_object( $dados );
?>

<div class="right"><a href="javascript:history.back()"><button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" ><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</button></a></div> <br> <br> <br>
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
                  
                  <input name="naj" type="text" class="form-control" id="naj" placeholder="naj" value="<?php echo $naj1->nome?>" readonly>
                </div>
              </div>
            </div>
          </div> <br>
          <!-- Fim NAJ -->
          
          <!-- Defensoria 
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <div class="col-md-8"> Defensoria: </div>
                <div class="col-md-12">
                  <?php  
                    $defen= new manipulaData();
                    $defen->setTable("tb_defensoria");
                    $defen->setCampoId('id_defensoria');
                    $defen->setValorId($lot->id_defensoria);
                    $def= $defen->getListEditar();
                    $def1 = mysqli_fetch_object($def);
                  ?>
                  
                  <input name="defensoria" type="text" class="form-control" id="defensoria" placeholder="defensoria" value="<?php echo $def1->nome?>" readonly>
                </div>
              </div>
            </div>
          </div>
-->
















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
<!--
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                Encaminhamento:
                                <input  class="form-control" value="<?php echo $reg->data_cadastro ?>" type="date" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                Início
                                <input class="form-control" value="<?php echo $inicio1->data_rem ?>" readonly type="date">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                Final:
                                <input class="form-control" id='seis_meses_depois' readonly type="date">
                            </div>
                        </div>

                        

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                Situação:
                                <input class="form-control" value="<?php echo $sit->situacao ?>" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                Função:
                                <input class="form-control" value="<?php echo $tipoestagio->tipo ?>" type="text" readonly>
                            </div>
                        </div>

                        <div class="col-md-4">

                        </div>
                    </div>
-->

                    <?php 
                      $inicio= new manipulaData();
                      $inicio->setTable("tb_remocao");
                      $inicio->setCampoId('id_cad');
                      $inicio->setValorId($id_cad);
                      $inicio_f= $inicio->getListEditar();
                      

                    ?>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="col-md-8"> Histórico:</div>
                <div class="col-md-12">
                  <table class="table table-dark" style="font-size:85%;">
                    <thead class="thead-dark">
                                    <tr>
                                    <th>Encaminhado</th>
  
                                    <th>Unidade</th>
  
                                    <th>Início</th>
  
                                    <th>Final</th>
  
                                    <th>Função</th>
  
                                    <th>Total de Horas</th>
  
                                    <th>Situação</th>
                                  </tr>
  
                                  </thead>
                                  
                              <tbody>
                              <?php
                              $contador=0;

                               while ($inicio1 = mysqli_fetch_object($inicio_f)) { 


                                  $id_naj_1 = $inicio1->id_naj;
                                  //echo "<script>alert('$id_naj_1')</script>";
                                  $inicio2= new manipulaData();
                                $inicio2->setTable("tb_naj");
                                $inicio2->setCampoId('id_naj');
                                $inicio2->setValorId($id_naj_1);
                                $inicio_f2= $inicio2->getListEditar();
                                $inicio2 = mysqli_fetch_object($inicio_f2);

                              ?>
                                <tr>
                                  <td><input class="form-control" value="<?php echo $reg->data_cadastro?>"  readonly type="text"></td>

                                  <td><input class="form-control" value="<?php echo $inicio2->nome ?>"  readonly type="text"></td>

                                  <td><input class="form-control inicio_d" value="<?php echo $inicio1->data_rem ?>"  readonly type="text"></td>

                                  <td><input class="form-control final_d" value="<?php echo $proximo['data_rem'] ?>"  readonly type="text"></td>

                                  <td><input class="form-control" value="<?php echo $tipoestagio->tipo ?>" type="text" readonly></td>

                                  <td><input class="form-control total" type="text" readonly></td>

                                  <td><input class="form-control" value="<?php echo $sit->situacao ?>" type="text" readonly></td>
                                </tr>

                                <?php 

                              $contador++; 
                              } ?>
                                
                              </tbody>

                  </table>
                </div>
              </div>
            </div>
          </div>

                    <?php

                        echo "

                                <script> 
                                /*
                                    var data = new Date('$inicio1->data_rem');
                                    data.setMonth(data.getMonth() + 6);
                                    var dia = data.getDate() + 1;
                                    var mes = data.getMonth() + 1;
                                    
                                     if(dia.toString().length==1){
                                        dia=\"0\"+dia.toString();
                                     }
                                     if(mes.toString().length==1){
                                        mes=\"0\"+mes.toString();
                                     }
                                    
                                    var data_str = data.getFullYear()+'-'+mes+'-'+dia;
                                    //alert(data_str);
                                    document.getElementById('seis_meses_depois').value = data_str;
                                    */


                                    inicios = $('.inicio_d');
                  fins = $('.final_d');
                  for(var i=0; i<= inicios.length; i++ ){
                    fins.eq(i).val(inicios.eq(i+1).val());
                    
                  }

                  var oneDay = 24*60*60*1000;

                  var total = $('.total');
                  for(var i=0; i<= total.length; i++ ){
                    var data1 = fins.eq(i).val();
                    var data2 = inicios.eq(i).val();

                    data1 = new Date(data1);

                    data2 = new Date(data2);

                    var dif_d = Math.round(Math.abs(((data1.getTime() - data2.getTime())/(oneDay))));
                    var dif_s = Math.round(dif_d/7);
                    var dif_horas_trab = dif_s*4*5;
                    if(isNaN(dif_horas_trab)){
                      dif_horas_trab= '-';
                    }
                    total.eq(i).val(dif_horas_trab);
                    
                  }







                                </script>
                                
                            ";

                        ?>





















        </div>
      </div>
    </div>
  </div>