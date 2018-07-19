<?php
	$visualizar = new manipulaData();
	$visualizar->setTable( "tb_cadastro" );
	$visualizar->setCampoId( 'id_cad' );
	$visualizar->setValorId( $_GET[ 'id_cad' ] );
	$dados = $visualizar->getListEditar();
	$reg = mysqli_fetch_object( $dados );
?>

 <link rel="stylesheet" type="text/css" href="print1.css" media="print">
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery-3.2.1.min.js"></script>
<div class="container">
	<div class="right">
		<a href="index.php?url=pre_cadastro/listapre_cad">
			<button  class="btn btn-primary center-block" style="font-size: 15px; float: left;" >
				<i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar
			</button>
		</a>
	</div>
  	<br><br><br>
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Informações Pessoais</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">

					<!-- 1ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Matrícula : </div>
								<div class="col-md-12">
									<input name="matricula" type="text" class="form-control" id="matricula" placeholder="Matricula" required="required" value="<?php echo $reg->matricula?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<!-- 2ª Linha -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="col-md-8"> Nome* : </div>
								<div class="col-md-12">
									<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required="required" value="<?php echo utf8_encode($reg->nome)?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="col-md-8"> Filiação : </div>
								<div class="col-md-12">
									<input name="filiacao" type="text" class="form-control" id="filiacao" placeholder="Filiacao" required="required" value="<?php echo utf8_encode($reg->filiacao)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>

					<!-- 3ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Nacionalidade : </div>
								<div class="col-md-12">
									<input name="nacionalidade" type="text" class="form-control" id="filiacao" placeholder="Filiacao" required="required" value="<?php echo utf8_encode($reg->nacionalidade)?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Naturalidade: </div>
								<div class="col-md-12">
									<input name="naturalidade" type="text" class="form-control" id="naturalidade" required="required" value="<?php echo utf8_encode($reg->naturalidade)?>" readonly>
								</div>
							</div>
						</div>




						<div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Email
                                </div>
                                <div class="col-md-12">
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="required" value="<?php echo utf8_encode($reg->email)?>" readonly>
                                </div>
                            </div>

                        </div>
					</div>
					<br>

					<!-- 4ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-10"> Data de Nascimento : </div>
								<div class="col-md-12">
									<input name="data_nascimento" type="date" class="form-control" id="data_nascimento" placeholder="" required="required" value="<?php echo $reg->data_nascimento?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Estado Civil : </div>
								<div class="col-md-12">
									<input name="estdo_civil" type="text" class="form-control" id="data_nascimento" placeholder="" required="required" value="<?php echo utf8_encode($reg->estado_civil)?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Sexo : </div>
								<div class="col-md-12">
									<input name="sexo" type="text" class="form-control" id="sexo" placeholder="" required="required" value="<?php echo utf8_encode($reg->sexo)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>

					<!-- 5ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> CPF* : </div>
								<div class="col-md-12">
									<input name="CPF" type="text" class="form-control" id="CPF" placeholder="CPF" required="required" value="<?php echo $reg->CPF?>" readonly>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Identidade* : </div>
								<div class="col-md-12">
									<input name="identidade" type="text" class="form-control" id="identidade" placeholder="Identidade" required="required" value="<?php echo $reg->identidade?>" readonly>
								</div>
							</div>
						</div>

						<div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    Orgão Expedidor*:
                                </div>
                                <div class="col-md-12">
                                    <input name="orgao" type="text" class="form-control" id="orgao" value="<?php echo utf8_encode($reg->orgao)?>" readonly>
                                </div>
                            </div>
                        </div>

						<div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-8">
                                    UF*:
                                </div>
                                <div class="col-md-12">
                                    <input name="uf" type="text" class="form-control" id="uf" value="<?php echo $reg->uf_identidade?>" readonly>
                                </div>
                            </div>
                        </div>
						
					</div>
					<br>

					<!-- 6ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Título de Eleitor: </div>
								<div class="col-md-12">
									<input name="titulo_eleitor" type="text" class="form-control" id="titulo_eleitor" placeholder="Título de Eleitor" value="<?php echo $reg->titulo_eleitor?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Zona : </div>
								<div class="col-md-12">
									<input name="zona" type="text" class="form-control" id="zona" placeholder="Zona" value="<?php echo utf8_encode($reg->zona)?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Seção: </div>
								<div class="col-md-12">
									<input name="secao" type="text" class="form-control" id="secao" placeholder="Seção" value="<?php echo utf8_encode($reg->secao)?>" readonly>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> OAB : </div>
								<div class="col-md-12">
									<input name="OAB" type="text" class="form-control" id="OAB" placeholder="OAB" value="<?php echo $reg->OAB?>" readonly>
								</div>
							</div>
						</div>
						
					</div>
					<br>

					<!-- 7ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Cadastro : </div>
								<div class="col-md-12">
									<input name="data_cadastro" type="text" class="form-control" id="data_cadastro" placeholder="" required="required" value="<?php echo $reg->data_cadastro?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Desligamento: </div>
								<div class="col-md-12">
									<input name="data_desligamento" type="date" class="form-control" id="data_desligamento" placeholder="" required="required" value="<?php echo $reg->data_desligamento?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Tipo de Estágio : </div>
								<div class="col-md-12">
									<?php  
										$vi = new manipulaData();
										$vi->setTable("tb_tipo_estagio");
										$vi->setCampoId('id_tipo_estagio');
										$vi->setValorId($reg->id_tipo_estagio);
										$dados2= $vi->getListEditar();
										$tipoestagio = mysqli_fetch_object($dados2);
										
									?>
									<input name="data_desligamento" type="text" class="form-control" id="data_desligamento" placeholder="" required="required" value="<?php echo utf8_encode($tipoestagio->tipo)?>" readonly>
	
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Situação : </div>
								<div class="col-md-12">

									<?php  
									$si = new manipulaData();
									$si->setTable("tb_situacao");
									$si->setCampoId('id_situacao');
									$si->setValorId($reg->id_situacao);
									$situac= $si->getListEditar();
									$sit = mysqli_fetch_object($situac);
									?>

									<input name="data_desligamento" type="text" class="form-control" id="data_desligamento" placeholder="" required="required" value="<?php echo utf8_encode($sit->situacao)?>" readonly>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Fim de informacoes -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Endereço</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">

					
					<!-- 1ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> CEP : </div>
								<div class="col-md-12">
									<?php  
										$en = new manipulaData();
										$en->setTable("tb_end");
										$en->setCampoId('id_cad');
										$en->setValorId($reg->id_cad);
										$ender= $en->getListEditar();
										$end = mysqli_fetch_object($ender);
									?>


									<input name="cep_end" type="text" class="form-control" id="CEP" placeholder="CEP" value="<?=$end->CEP?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					<!-- 2ª Linha -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="col-md-8"> Residência: </div>
								<div class="col-md-12">
									<input name="residencia_end" type="text" class="form-control" id="residencia" placeholder="Residência" value="<?php echo $end->residencia?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>

					<!-- 3ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Complemento: </div>
								<div class="col-md-12">
									<input name="bairro_end" type="text" class="form-control" id="complemento" placeholder="complemento" value="<?php echo utf8_encode($end->complemento)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>

					<!-- 4ª Linha -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> UF : </div>
								<div class="col-md-12">
									<input name="uf_end" type="text" class="form-control" id="uf" placeholder="UF" value="<?=utf8_encode($end->uf)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<!-- 4ª Linha -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Cidade : </div>
								<div class="col-md-12">
									<input name="cidade_end" type="text" class="form-control" id="cidade" placeholder="Cidade" value="<?php echo utf8_encode($end->cidade)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<!-- 5ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<div class="col-md-8"> Bairro: </div>
								<div class="col-md-12">
									<input name="bairro_end" type="text" class="form-control" id="bairro" placeholder="Bairro" value="<?php echo utf8_encode($end->bairro)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					<!-- 6ª Linha -->
					<!--
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="col-md-8"> Observações: </div>
								<div class="col-md-12">
									<textarea name="observacoes_end" id="observacoes" cols="75 " rows="5" readonly>
										<?php echo utf8_encode($end->obs)?>
									</textarea>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- fim de endereçoes -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Instituição</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12">
					<?php  
						$list3 = new manipulaData();
						$list3->setTable("tb_instituicao");
						$list3->setCampoId('id_cad');
						$list3->setValorId($_GET['id_cad']);
						$dados3= $list3->getListEditar();;
						$cur = mysqli_fetch_object($dados3);
					?>
					<div class="row">
						<div class="col-md-6">
					<div class="form-group">
						<label for="nome_inst">Nome da Instituição</label>
						<input name="nome_inst" type="text" class="form-control" id="nome_inst" placeholder="@Centro Universitário" value="<?php echo utf8_encode($cur->nome_inst)?>" readonly>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="col-md-6">
					<div class="form-group">
					<label for="curso">Curso</label>
						<?php  
						$list3 = new manipulaData();
						$list3->setTable("tb_instituicao");
						$list3->setCampoId('id_curso');
						$list3->setValorId($reg->id_curso);
						$dados3= $list3->getList();
						$curso = mysqli_fetch_object($dados3);
						//nem tabela curso criaram 					
						
						?>
							<?php  
										$inst= new manipulaData();
										$inst->setTable("tb_instituicao");
										$inst->setCampoId('id_cad');
										$inst->setValorId($_GET['id_cad']);
										$inst= $inst->getListEditar();
										$inst = mysqli_fetch_object($inst);

										

										$cur3= new manipulaData();
										$cur3->setTable("tb_curso");
										$cur3->setCampoId('id_curso');
										$cur3->setValorId($inst->id_curso);
										$curs2= $cur3->getListEditar();
										$cur1 = mysqli_fetch_object($curs2);
									?>
						
						<input name="curso_inst" type="text" class="form-control" id="curso" placeholder="@Sistemas" value="<?php echo utf8_encode($cur1->descricao)?>" readonly>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="col-md-6">
					<div class="form-group">
						<label for="curso">Nível Escolaridade</label>
						<input name="nivel" type="text" class="form-control" id="nivelSelect" placeholder="@Sistemas" value="<?php echo utf8_encode($cur->nivel)?>" readonly>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="col-md-6">
						<div class="form-group">
						<label for="turno">Turno</label>
						<input name="turno_inst" type="text" class="form-control" id="turno" placeholder="@Sistemas" value="<?php echo utf8_encode($cur->turno)?>" readonly>
					</div>
				</div>
			</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="periodo">Período </label>
								<input name="periodo" type="text" class="form-control" id="periodo" placeholder="@Sistemas" value="<?php echo utf8_encode($cur->periodo)?>" readonly>
							</div>
						</div>
					</div>
					<!-- 2ª Linha -->
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="data_inicio">Data de Inicio</label>
								<input name="data_inicio_inst" type="date" class="form-control" id="data_inicio" value="<?php echo $cur->data_inicio?>" readonly>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="data_fim">Data Fim</label>
								<input name="data_fim_inst" type="date" class="form-control" id="data_fim" value="<?php echo $cur->data_fim?>" readonly>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
	<!-- fim de instituição -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
					Telefone</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">
					<?php
					$telefone = new manipulaData();
					$telefone->setTable( "tb_telefone" );
					$telefone->setCampoId( 'id_cad' );
					$telefone->setValorId( $_GET[ 'id_cad' ] );
					$tele = $telefone->getListEditar();
					$tel = mysqli_fetch_object( $tele );
					?>
					<!-- 1ª Linha -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Telefone Residencial: </div>
								<div class="col-md-12">
									<input type="text" name="tel_res" class="form-control" id="telefone" value="<?php echo $tel->residencial?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Telefone Celular: </div>
								<div class="col-md-12">
									<input type="text" name="tel_cel" class="form-control" id="telefone" value="<?php echo $tel->celular?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Telefone do Trabalho: </div>
								<div class="col-md-12">
									<input type="text" name="tel_trab" class="form-control" id="telefone" value="<?php echo $tel->trabalho?>" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--fim telefone -->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Lotação</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
                    <div class="panel-body">

                        <!-- 1ª Linha -->



                        <!-- NAJ -->
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <div class="col-md-8"> NAJ: </div>
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
                                            $naj1 = mysqli_fetch_object($naj)
                                            ?>
                                    <input type="text" name="naj" class="form-control" value="<?php echo utf8_encode($naj1->nome) ?>" readonly>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Fim NAJ -->
                       
                                            <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-8"> Encaminhamento: </div>
                                <div class="col-md-12">

                                    
                                    <input  class="form-control" value="<?php echo $reg->data_cadastro ?>" type="text" readonly>
                                </div>
                            </div>
                        </div>
                    </div> 
                   <br>
                                          
                                            <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-8"> Data prévia de encerramento do Contrato: </div>
                                <div class="col-md-12">

                                    
                                    <input  class="form-control" value="<?php echo $reg->data_desligamento ?>" type="text" readonly>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-8"> Situação: </div>
                                <div class="col-md-12">
                                    <?php  
                                    $si = new manipulaData();
                                    $si->setTable("tb_situacao");
                                    $si->setCampoId('id_situacao');
                                    $si->setValorId($reg->id_situacao);
                                    $situac= $si->getListEditar();
                                    $sit = mysqli_fetch_object($situac);
                                    ?>

                                    
                                    <input class="form-control" value="<?php echo utf8_encode($sit->situacao) ?>" type="text" readonly>
                                </div>
                            </div>
                        </div>
                    </div> 

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

                                          
                                        </tr>
    
                                        </thead>
                                        
                                <tbody>
                                    <?php 
                                    while ($rem = mysqli_fetch_object($rem2)) { ?>

                                        <?php                                       
                                        $te = new manipulaData();
                                        $te->setTable("tb_tipo_estagio");
                                        $te->setCampoId('id_tipo_estagio');
                                        $te->setValorId($reg->id_tipo_estagio);
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

                                    </tr>

                                <?php $contador++; } ?>


                                </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                    <!-- fim panel-body -->
			</div>
		</div>
	</div>
	<!--fim defensoria -->
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Arquivo</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">
					<?php
						$arquivo = new manipulaData();
						$arquivo->setTable( "tb_arquivo" );
						$arquivo->setCampoId( 'id_cad' );
						$arquivo->setValorId( $_GET[ 'id_cad' ] );
						$arqui = $arquivo->getListEditar();
						$arq = mysqli_fetch_object( $arqui );
					?>
					<!-- 1ª Linha -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Nome: </div>
								<div class="col-md-12">
									<input name="nome_arq" type="text" class="form-control" id="nomeArquivo" placeholder="Arquivo" value="<?php echo utf8_encode($arq->nome)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<!-- 2ª Linha -->
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<div class="col-md-8"> Lugar do Arquivo: </div>
								<div class="col-md-12">
									<input name="lug_arq" type="text" class="form-control" id="lugarArquivo" placeholder="Lugar do Arquivo" value="<?php echo utf8_encode($arq->lugar_arquivo)?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Número do Arquivo: </div>
								<div class="col-md-12">
									<input name="num_arq" type="text" class="form-control" id="numeroArquivo" placeholder="Numero do Arquivo" value="<?php echo $arq->numero_arquivo?>" readonly>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- fim arquivo -->

	<!--<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">
						Documentos</h3>
					<span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
				</div>
				<div class="panel-body">
					<?php
						$documento = new manipulaData();
						$documento->setTable("tb_tipo_doc");
						$documento->setCampoId('id_cad');
						$documento->setValorId($_GET['id_cad']);
						$docu= $documento->getListEditar();
						$doc = mysqli_fetch_object($docu);
					?>-->
					
					<!-- 1ª Linha -->
					<!--<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Tipo Documento: </div>
								<div class="col-md-12">
									<input name="tipo_documento"  type="text" class="form-control" id="tipo_documento" placeholder="Tipo do Documento" value="<?php echo utf8_encode($doc->tipo_doc)?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<!-- 2ª Linha 
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<div class="col-md-8"> Nome do Documento: </div>
								<div class="col-md-12">
									<input name="nome_doc"  type="text" class="form-control" id="nome_documento" placeholder="Nome do Documento" value="<?php echo utf8_encode($doc->nome)?>" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="col-md-8"> Data do Documento: </div>
								<div class="col-md-12">
									<input name="data_doc" type="date" class="form-control" id="data_documento" placeholder="" value="<?php echo $doc->data?>" readonly>
								</div>
							</div>
						</div>
					</div>
					<br>
					
					<!-- 3ª Linha 
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<div class="col-md-8"> Arquivo: </div>
								<div class="col-md-12">
									<input type="button" class="form-control " value="<?php echo utf8_encode($doc->arquivo_anexado)?>" readonly>
								</div>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
	 
	
	<center id="notprint"><img src="img/impressora.png" class="botao " width="40px" a href="#" onClick="window.print(); "/> </center><br><br>
</div>


<!-- <a href="<?php echo utf8_encode($doc->arquivo_anexado)?>"" onclick=document.download("<?php echo utf8_encode($doc->arquivo_anexado)?>")>Clique aqui para baixar</a> -->
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery-3.2.1.min.js"></script>