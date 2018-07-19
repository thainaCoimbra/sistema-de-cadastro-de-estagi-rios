<?php

$list = new manipulaData();
$list->setCampos("*");
$list->setTable("tb_situacao");
$dados= $list->getList();

$list1 = new manipulaData();
$list1->setCampos("*");
$list1->setTable("tb_tipo_estagio");
$dados1= $list1->getList();


$list3 = new manipulaData();
$list3->setTable("tb_cadastro");
$list3->setCampos('id_cad');
$dados3 = $list3->ultimoID();
$reg = mysqli_fetch_object($dados3);

?>
<head>

    <script type="text/javascript" src="bootstrap/js/jquery.maskedinput.js"></script>
    <script>
        removejscssfile("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", "js");
        removejscssfile("jquery/jquery.js", "js");
    </script>
    <script type="text/javascript">

        $(document).ready(function(){
            $("#CPF").mask("999.999.999-99");
        });

        $(document).ready(function(){
            $("#titulo_eleitor").mask("9999 9999 9999");
        });

    </script>

</head>
<body>
    <style type="text/css">
        input.maiuscula {
            text-transform: uppercase;
        }
    </style>

    <!--<a href="index.php?url=acoes/crudPre_Cadastro"> ver crud </a>-->

    <div class="container">
        <center> <h2>DADOS GERAIS DO ESTAGIÁRIO</h2></center>
        <div class="right"><a href="javascript:history.back()" class="hvr-icon-back"><button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" ><i class="fa fa-chevron-circle-left hvr-icon"></i> Voltar</button></a></div>
        <br>


        <form class="form-horizontal" method="post" action="pre_cadastro/acoes/crudPre_Cadastro.php" >

            <!--Cadastro -->
            <div role="tabpanel" class="tab-pane active" id="home">
                <br>
                <fieldset>
                    <legend> <h3>Informações Pessoais</h3></legend>
                    <!-- 1ª Linha -->
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <!-- Matrícula :-->
                                </div>
                                <div class="col-md-12">
                                    <!--   <input name="matricula" type="text" class="form-control" id="matricula" placeholder="Matrícula" required="required"> -->
                                    <input name="txtLocal" value="Cadastrar" type="hidden">
                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <!-- 2ª Linha -->
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Nome* :
                                </div>
                                <div class="col-md-12">
                                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required="required" input class="maiuscula"  name="campo" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Filiação :
                                </div>
                                <div class="col-md-12">
                                    <input name="filiacao" type="text" class="form-control" id="filiacao" placeholder="Filiação"
                                           required="required" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <!-- 3ª Linha -->
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Nacionalidade :
                                </div>
                                <div class="col-md-12">
                                    <select id="nacionalidade" name="nacionalidade" class="form-control"   >
                                        <option value="Brasileiro">Brasileiro</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Naturalidade:
                                </div>
                                <div class="col-md-12">
                                    <input name="naturalidade" type="text" class="form-control" id="naturalidade" placeholder="Naturalidade" required="required" >
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Email:
                                </div>
                                <div class="col-md-12">
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="required" >
                                </div>
                            </div>

                        </div>

                    </div>
                    <br>
                    <!-- 4ª Linha -->
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Nascimento :
                                </div>
                                <div class="col-md-12">
                                    <input name="data_nascimento" type="date" class="form-control" id="data_nascimento" placeholder="" required="required"  >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Estado Civil :
                                </div>
                                <div class="col-md-12">
                                    <select id="estado_civil" name="estado_civil" class="form-control" required >
                                        <option value="Solteiro(a)">SOLTEIRO(A)</option>
                                        <option value="Casado(a)">CASADO(A)</option>
                                        <option value="Divorciado(a)">DIVORCIADO(A)</option>
                                        <option value="União Estável">UNIÃO ESTÁVEL</option>
                                        <option value="Viúvo(a)">VIÚVO(A)</option>
                                        <option value="Outros">OUTROS</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Sexo :
                                </div>
                                <div class="col-md-12">
                                    <select id="sexo" name="sexo" class="form-control"
                                            required="required">
                                        <option value="Masculino">MASCULINO</option>
                                        <option value="Feminino">FEMININO</option>
                                        <option value="Indefinido">INDEFINIDO</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                    </div>
                    <br>
                    <!-- 5ª Linha -->
                     <div class="row">
                                                <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    CPF* :
                                </div>
                                <div class="col-md-12">
                                    <input name="CPF" type="text" class="form-control" id="CPF" placeholder="CPF" required="required" onkeyup="somenteNumeros(this);" maxlength="14" type="text"  ng-model="numero.valor" >

                                </div>
                            </div>
                        </div>                      


                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Identidade* :
                                </div>
                                <div class="col-md-12">
                                    <input name="identidade" type="text" class="form-control" id="identidade" placeholder="Identidade" required="required" onkeyup="somenteNumeros(this);" maxlength="11" type="text"  ng-model="numero.valor">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Orgão Expedidor*:
                                </div>
                                <div class="col-md-12">
                                    <select id="orgao" name="orgao" class="form-control"  >
                                            <option></option>
                                            <?php
                                            $orgaoCombo = array(
											"SSP" => "SSP - Secretaria de Segurança Pública",
                                            "PM"  => "PM - Polícia Militar",
                                            "PC"  => "PC - Policia Civil",
                                            "CNT"  => "CNT - Carteira Nacional de Habilitação",
                                            "DIC"  => "DIC - Diretoria de Identificação Civil",
                                            "CTPS"  => "CTPS - Carteira de Trabaho e Previdência Social",
                                            "FGTS"  => "FGTS - Fundo de Garantia do Tempo de Serviço",
                                            "IFP"  => "IFP - Instituto Félix Pacheco",
                                            "IPF"  => "IPF - Instituto Pereira Faustino",
                                            "IML"  => "IML - Instituto Médico-Legal",
                                            "MTE"  => "MTE - Ministério do Trabalho e Emprego",
                                            "MMA"  => "MMA - Ministério da Marinha",
                                            "MAE"  => "MAE - Ministério da Aeronáutica",
                                            "MEX"  => "MEX - Ministério do Exército",
                                            "PF"  => "POF - Polícia Federal",
                                            "PM"  => "POM - Polícia Militar",
                                            "SES"  => "SES - Carteira de Estrangeiro",
                                            "SJS "  => "SJS - Secretaria da Justiça e Segurança",
                                            "SJTS"  => "SJTS - Secretaria da Justiça do Trabalho e Segurança",
                                            " Outros  "=>"ZZZ - Outros (inclusive exterior) "
                                            );

                                            $orgao_selecionado = $reg->orgao;
                                            foreach ($orgaoCombo as $orgao => $value):
                                                ?>
                                                <?php $selected = ($orgao_selecionado == $orgao) ? "selected=\"selected\"" : null; ?>
                                                <?php echo "<option value=\"$orgao\" $selected>$value</option>"; ?>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    UF* :
                                </div>
                                <div class="col-md-12">
                                    <select class="form-control" name="uf">
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select>

                                </div>
                            </div>
                        </div>                      

                        

                    </div>
                    <br>
                    <!-- 6ª Linha -->
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Título de Eleitor:
                                </div>
                                <div class="col-md-12">
                                    <input  name="titulo_eleitor" type="text" class="form-control" id="titulo_eleitor" placeholder="Título de Eleitor"  >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Zona :
                                </div>
                                <div class="col-md-12">
                                    <input name="zona" type="text" class="form-control" id="zona" placeholder="Zona" >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Seção:
                                </div>
                                <div class="col-md-12">
                                    <input name="secao" type="text" class="form-control" id="secao" placeholder="Seção" >
                                </div>
                            </div>
                        </div>

                    <div class="col-md-3">
                            <div class="form-group">

                                <div class="col-md-12">
                                    Possui OAB?
                                    <br>
                                    <center style="position: relative">
                                        <div style="padding-top: 5px; width: 80%;">
                                            <div class="pull-left">
                                                Sim &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="oab_confirm" value="s" onclick="mostra_esconde_oab('mostra')">
                                            </div>
                                            <div class="pull-right">
                                                Não &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="oab_confirm" value="n" onclick="mostra_esconde_oab('esconde');" >
                                            </div>

                                        </div>
                                    </center>
                                </div>


                            </div>

                        </div>



                    </div>
                    <br>
                    <!-- possível sétima linha se tiver OAB, senão, inexiste-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" style="display: none;" id="conteudo_oab_mostra">
                                <div class="col-md-8">
                                    OAB :
                                </div>
                                <div class="col-md-12">
                                    <input name="OAB" type="text" class="form-control" id="OAB" placeholder="OAB">


                                </div>
                            </div>

                        </div>
                    </div>
                    <br>
                    <!-- 7ª Linha -->
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Data Inícial do Contrato :
                                </div>
                                <div class="col-md-12">
                                    
                                    <input name="data_cadastro"  required="required" type="date" class="form-control" id="data_cadastro" value="<?=$data?>"
                                           >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Desligamento:
                                </div>
                                <div class="col-md-12">
                                    <input name="data_desligamento" type="date" class="form-control" id="data_desligamento" placeholder=""
                                           >
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Tipo de Estágio:
                                </div>
                                <div class="col-md-12">
                                    <select id="" name="txtTipoEstagio" class="form-control">
                                        <?php  while($reg = mysqli_fetch_object($dados1)){ ?>
                                            <option value="<?= $reg->id_tipo_estagio?>"><?=utf8_encode($reg->tipo)?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Situação :
                                </div>
                                <div class="col-md-12">
                                    <select id="" name="txtSituacaoEstagio" class="form-control">
                                        <?php  while($reg2 = mysqli_fetch_object($dados)){ ?>
                                            <option value="<?=$reg2->id_situacao?>"><?=utf8_encode($reg2->situacao)?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                </fieldset>

            </div>
            <!-- Fim Cadastro -->



    </div>
    <br> <br>
    <!-- BOTÕES -->
    <center>
        <div class="btn-group">
            <button id="btsalvar" type="submit" class="btn btn-primary">Proximo</button>

        </div>


        <div class="btn-group">
            <button id="btlimpar" name="btlimpar" type="reset" class="btn btn-danger">limpar</button>
        </div>    </center>

    <script src="bootstrap/js/validação.js" type="text/javascript" language="JavaScript">
    </script>

    </form>

</body>

