<?php 
include("./../classes/manipulaData.php");
$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_naj");
$dados= $list->getList();

$list1 = new manipulaData();
$list1->setCampos("*");
$list1->setTable("tb_perfil");
$dados1= $list1->getList();
/*
$list2 = new manipulaData();
$list2->setCampos("*");
$list2->setTable("tb_defensoria");
$dados2= $list2->getList();
*/
$list3 = new manipulaData();
$list3->setTable("tb_cadastro");
$list3->setCampos('id_cad');
$list3->setDados('max(id_cad)');
$dados3= $list3->getList();

$list3 = new manipulaData();
$list3->setTable("tb_cadastro");
$list3->setCampos('id_cad');
$dados3 = $list3->ultimoID();
$reg = mysqli_fetch_object($dados3);

$list5 = new manipulaData();
$list5->setCampos("*");
$list5->setTable("tb_curso");
$dados5= $list5->getList();

$dt_cad = new manipulaData();
$dt_cad->setTable("tb_cadastro");
$dt_cad->setCampoId('id_cad');
$dt_cad->setValorId($reg->ultimo);
$data = $dt_cad->getList1();
$dt = mysqli_fetch_object($data);

?> 
<head>

    <script type="text/javascript" src="bootstrap/js/jquery.maskedinput.js"></script>
    <script>
        removejscssfile("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", "js");
        removejscssfile("jquery/jquery.js", "js");
    </script>
    <script type="text/javascript">

        $(document).ready(function(){
            $("#cep").mask("99999-999");
        });
        $(document).ready(function () {
           $("#telefone_1").mask("9999-9999");
        });
        $(document).ready(function () {
            $("#telefone_2").mask("99999-9999");
        });
        $(document).ready(function () {
            $("#telefone_3").mask("9999-9999");
        });
    </script>
</head>
<body>




<center> <h2>CADASTRAR - <?= utf8_encode($reg->ultimo)?></h2></center>

<div class="container">

    <form class="form-horizontal" method="post" action="index.php?url=cadastrar/acoes/crud_cadastro" enctype="multipart/form-data" id="formulario">
        <input name="txtLocal" type="hidden" class="form-control" value="Cadastrar">

        <div class="row">
            <div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab">Endereço <span class="erro_cont" id="span_erro_end"></span></a></li>

                    <li role="presentation"><a href="#instituicao" aria-controls="instituicao" role="tab" data-toggle="tab" id = 'instituicao_title'>Instituição <span class="erro_cont" id="span_erro_inst"></span></a></li>

                    <li role="presentation"><a href="#telefone" aria-controls="telefone" role="tab" data-toggle="tab">Telefone</a></li>

                    <li role="presentation"><a href="#lotacao" aria-controls="lotacao" role="tab" data-toggle="tab">Lotação</a></li>

                    <li role="presentation"><a href="#arquivo" aria-controls="arquivo" role="tab" data-toggle="tab">Arquivo</a></li>

                    <!--<li role="presentation"><a href="#documento" aria-controls="documento" role="tab" data-toggle="tab">Documentos</a></li>-->
                </ul>





                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="endereco">

                        <legend> <h3>Endereço</h3></legend>



                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        CEP :
                                    </div>
                                    <div class="col-md-12">
                                        <input name="cep_end" type="text" class="form-control" id="cep" placeholder="CEP">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <input type="hidden" name="id_cad" value="<?= utf8_encode($reg->ultimo)?>">
                            </div>

                        </div>

                        <br>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Endereço:
                                    </div>
                                    <div class="col-md-12">
                                        <input name="residencia_end" type="text" class="form-control" id="rua" placeholder="Residência">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Complemento:
                                    </div>
                                    <div class="col-md-12">
                                        <input name="complemento" type="text" class="form-control" id="complemento" placeholder="complemento">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Cidade:
                                    </div>
                                    <div class="col-md-12">
                                        <input name="cidade" type="text" class="form-control" id="cidade" placeholder="cidade">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>
                        <!-- 3ª Linha -->


                        <!-- 4ª Linha -->
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Bairro:
                                    </div>

                                    <div class="col-md-12">
                                        <input name="bairro_end" type="text" class="form-control" id="bairro" placeholder="Bairro">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        UF:
                                    </div>
                                    <div class="col-md-12">
                                        <input name="uf" type="text" class="form-control" id="uf" placeholder="UF">
                                    </div>
                                </div>
                            </div>

                        </div>


                        <!-- 5ª Linha -->
                        <!--
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Observações:
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="observacoes_end" id="observacoes" cols="75 " rows="5"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    -->

                        <br><br>

                        <center>


                            <div class="btn-group">

                                <a class="btn" href="#instituicao" aria-controls="instituicao" role="tab" data-toggle="tab">Próximo <i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </center>




                    </div>


                    <div role="tabpanel" class="tab-pane" id="instituicao">
                        <legend>
                            <h3>Instituição</h3>
                        </legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Nome da Instituição
                                    </div>
                                    <div class="col-md-12">
                                        <input name="nome_inst" type="text" class="form-control" id="nome_inst" placeholder="@Centro Universitário">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Curso
                                    </div>
                                    <div class="col-md-12">

                                        <select id="" name="curso_inst" class="form-control">
                                            <?php  while($reg = mysqli_fetch_object($dados5)){ ?>
                                                <option value="<?= utf8_encode($reg->id_curso)?>"><?= utf8_encode($reg->descricao)?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Nível Escolaridade
                                    </div>
                                    <div class="col-md-12">
                                        <select name="nivel" id="" class="form-control" required>
                                            <option value="Nivel Superior">Nível Superior</option>
                                            <option value="Nivel Medio">Nível Médio</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Turno
                                    </div>
                                    <div class="col-md-12">
                                        <select class="form-control" name="turno_inst" id="turno">
                                            <option name="Matutino" value="Matutino">Matutino</option>
                                            <option name="Vespertino" value="Vespertino">Vespertino</option>
                                            <option name="Noturno" value="Noturno">Noturno</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Período
                                    </div>
                                    <div class="col-md-12">
                                        <select class="form-control" name="periodo" id="periodo">
                                            <option value=""></option>
                                            <option name="1 Semestre" value="1º Semestre/Ano">1º Semestre/Ano</option>
                                            <option name="2 Semestre" value="2º Semestre/Ano">2º Semestre/Ano</option>
                                            <option name="3 Semestre" value="3º Semestre/Ano">3º Semestre/Ano</option>
                                            <option name="4 Semestre" value="4º Semestre">4º Semestre</option>
                                            <option name="5 Semestre" value="5º Semestre">5º Semestre</option>
                                            <option name="6 Semestre" value="6º Semestre">6º Semestre</option>
                                            <option name="7 Semestre" value="7º Semestre">7º Semestre</option>
                                            <option name="8 Semestre" value="8º Semestre">8º Semestre</option>
                                            <option name="9 Semestre" value="9º Semestre">9º Semestre</option>
                                            <option name="10 Semestre" value="10º Semestre">10º Semestre</option>
                                            <option name="Formado" value="11º Semestre">Formado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label for="datainicial">Data de Inicio</label>

                                    </div>
                                    <div class="col-md-12">
                                        <input name="data_inicio_inst" id="data_inicio_inst" type="date" class="form-control" id="datainicial" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label for="datafinal">Data Fim</label>

                                    </div>
                                    <div class="col-md-12">
                                        <input name="data_fim_inst"" type="date" class="form-control" id="datafinal" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>

                        <center>
                            <div class="btn-group">
                                <a class="btn" href="#endereco" aria-controls="endereco" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i> Anterior</a>
                            </div>

                            <div class="btn-group">

                                <a class="btn" href="#telefone" aria-controls="telefone" role="tab" data-toggle="tab">Próximo <i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </center>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="telefone">
                        <legend> <h3>Telefone</h3></legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Telefone Residencial:
                                    </div>
                                    <div class="col-md-12">
                                        <input  type="text" name="tel_1" class="form-control" id="telefone_1" placeholder="" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Telefone Celular
                                    </div>
                                    <div class="col-md-12">
                                        <input  type="text" name="tel_cel1" class="form-control" id="telefone_2" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Telefone do Trabalho:
                                    </div>
                                    <div class="col-md-12">
                                        <input  type="text" name="tel_trab" class="form-control" id="telefone_3" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>

                        <center>
                            <div class="btn-group">
                                <a class="btn" href="#instituicao" aria-controls="instituicao" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i> Anterior</a>
                            </div>

                            <div class="btn-group">

                                <a class="btn" href="#lotacao" aria-controls="lotacao" role="tab" data-toggle="tab">Próximo <i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </center>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="lotacao">

                        <legend> <h3>Lotação</h3></legend>

                        <!--	<div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-8">
                        Nome:
                                            </div>
                                            <div class="col-md-12">
                                          <input name="nom_lot" type="text" class="form-control" id="nomeNaj" placeholder="Nome">
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-8">
                    Endereço:

                                            </div>
                                            <div class="col-md-12">
                                         <input name="end_lot" type="text" class="form-control" id="enderecoNaj" placeholder="Endereço">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="col-md-8">
                        Telefone:

                                            </div>
                                            <div class="col-md-12">
                                        <input name="tel_lot" type="text" class="form-control" id="telefoneNaj" placeholder="Telefone">
                                            </div>
                                        </div>
                                    </div>
                            </div> -->
<input type="hidden" name="data_cadastro1" value="<?= utf8_encode($dt->data_cadastro)?>">
<input type="hidden" name="tipo_estagio" value="<?= utf8_encode($dt->id_tipo_estagio)?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        NAJ:

                                    </div>
                                    <div class="col-md-12">
                                        <select id="" name="txtNomeNaj" class="form-control">
                                            <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                                                <option value="<?= utf8_encode($reg->id_naj)?>"><?= utf8_encode($reg->nome)?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><!--
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Defensoria:

                                    </div>
                                    <div class="col-md-12">
                                        <select id="" name="txtNomeDefensoria" class="form-control">
                                            <?php  while($reg2 = mysqli_fetch_object($dados2)){ ?>
                                                <option value="<?= utf8_encode($reg2->id_defensoria)?>"><?= utf8_encode($reg2->nome)?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="col-md-8"> Observação </div>
                                    <div class="col-md-12">
                                        <textarea name='obs_lotacao' class="form-control" rows='5' cols="20"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <center>
                            <div class="btn-group">
                                <a class="btn" href="#telefone" aria-controls="telefone" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i> Anterior</a>
                            </div>

                            <div class="btn-group">

                                <a class="btn" href="#arquivo" aria-controls="arquivo" role="tab" data-toggle="tab">Próximo <i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </center>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="arquivo">

                        <legend> <h3>Arquivo</h3></legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Nome:

                                    </div>
                                    <div class="col-md-12">
                                        <input name="nome_arquivo" type="text" class="form-control" id="nomeArquivo" placeholder="Arquivo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Lugar do Arquivo:
                                    </div>
                                    <div class="col-md-12">
                                        <input name="lugar_arquivo" type="text" class="form-control" id="lugarArquivo" placeholder="Lugar do Arquivo">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="col-md-8">
                                        Número do Arquivo:
                                    </div>
                                    <div class="col-md-12">
                                        <input name="num_arquivo" type="text" class="form-control" id="numeroArquivo" placeholder="Numero do Arquivo">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br><br>

                        <center>
                            <div class="btn-group">
                                <a class="btn" href="#lotacao" aria-controls="lotacao" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i> Anterior</a>
                            </div>


                        </center>



                        <!-- </div>

                        <div role="tabpanel" class="tab-pane" id="documento">

                               <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                           <div class="col-md-8">
                               Tipo Documento:
                                           </div>
                                           <div class="col-md-12">
                                       <select name="tipo_documento" id="tipo_documento" class="form-control">
                                                       <option value="Imagem">Imagem</option>
                                                       <option value="PDF">PDF</option>
                                             </select>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                         <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                           <div class="col-md-8">
                            Nome do Documento:
                                           </div>
                                           <div class="col-md-12">
                                        <input name="nome_doc"  type="text" class="form-control" id="nome_documento" placeholder="Nome do Documento">
                                           </div>
                                       </div>
                                   </div>
                           </div>

                          <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                           <div class="col-md-8">
                           Data do Documento:
                                           </div>
                                           <div class="col-md-12">
                                       <input name="data_doc" type="date" class="form-control" id="data_documento" placeholder="">
                                           </div>
                                       </div>
                                   </div>
                           </div>

                           <div class="row">
                                       <div class="col-md-6">
                                       <div class="form-group">
                                           <div class="col-md-8">
                           Arquivo:
                                           </div>
                                           <div class="col-md-12">
                                         <input type="file" accept="image/png, image/jpeg, image/gif" name="arquivo_anexado"/>
                                           </div>
                                       </div>
                                   </div>
                           </div>-->


                        <br>
                        <br> <br> <br>


                        <center>

                            <div class="btn-group">

                                <button id="btlimpar" value="cancelar" name="txtLocal" class="btn btn-danger">Cancelar</button>

                            </div>

                            <div class="btn-group">

                                <button id="btsalvar" name="txtLocal" value="Cadastrar"  class="btn btn-success">Cadastrar</button>
                            </div>
                        </center>


                    </div>




                </div>

            </div>
        </div>


        <!-- Fim Style Uploag-->
    </form>
</div>





<!-- Fim Documento -->

</body>

<script>
    $("#formulario").on("keypress", function (event) {
        if (event.keyCode == 13){
            event.preventDefault();
            return false;
        }
    });
</script>