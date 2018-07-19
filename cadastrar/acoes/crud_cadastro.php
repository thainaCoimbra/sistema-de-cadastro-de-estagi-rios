<?php 
include("../../classes/manipulaData.php");

if ($_POST["txtLocal"] == 'Cadastrar'){



$idcad = $_POST["id_cad"];



//fim endereço


// Instituição 

$nome_inst = utf8_decode($_POST["nome_inst"]);
$curso = utf8_decode($_POST["curso_inst"]);
$nivel = utf8_decode($_POST["nivel"]);
$turno = utf8_decode($_POST["turno_inst"]);
$periodo = utf8_decode($_POST["periodo"]);
$data_inicio = $_POST["data_inicio_inst"];
$data_fim = $_POST["data_fim_inst"];


$list2 = new manipulaData();
$list2->setTable("tb_instituicao");
$list2->setCampos("
id_cad,
nome_inst,
id_curso,
nivel,
turno,
periodo,
data_inicio,
data_fim
");

$list2->setDados("
$idcad,
'$nome_inst',
'$curso', 
'$nivel',
'$turno',
'$periodo', 
'$data_inicio',
'$data_fim'
");
$list2->insert();

// fim instituicao

	// Telefone 

$residencial = $_POST["tel_1"];
$celular = $_POST["tel_cel1"];
$trabalho = $_POST["tel_trab"];




$list3 = new manipulaData();
$list3->setTable("tb_telefone");
$list3->setCampos("
id_cad,
residencial,
celular,
trabalho
");

// Fim Telefone
$list3->setDados("
'$idcad',
'$residencial', 
'$celular',
'$trabalho'
");
$list3->insert();

	// Lotação 
$dataCad = $_POST["data_cadastro1"];
$naj = $_POST["txtNomeNaj"];
$obs1 = utf8_decode($_POST["obs_lotacao"]);
$tipo = $_POST["tipo_estagio"];

$cad_lot = new manipulaData();
$cad_lot->setTable("tb_lotacao");
$cad_lot->setCampos("id_naj, id_cad");
$cad_lot->setDados(" '$naj', '$idcad' ");
$cad_lot->insert();

$cad_rem = new manipulaData();
$cad_rem->setTable("tb_remocao");
$cad_rem->setCampos("id_cad,  id_najNova, id_tipo_estagio, obs, data_inicio");
$cad_rem->setDados(" '$idcad',  '$naj', '$tipo', '$obs1','$dataCad'");
$cad_rem->insert();


// fim lotacao



	// Arquivo

$nome = utf8_decode($_POST["nome_arquivo"]);
$lugar_arquivo = utf8_decode($_POST["lugar_arquivo"]);
$num_arquivo = $_POST["num_arquivo"];


$list7 = new manipulaData();
$list7->setTable("tb_arquivo");
$list7->setCampos("
id_cad,
nome,
lugar_arquivo,
numero_arquivo
");

$list7->setDados("
'$idcad',
'$nome',
'$lugar_arquivo',  
'$num_arquivo'
");
$list7->insert();


// arquivo


	// Documentos
/*$tipo_doc = $_POST["tipo_documento"];
$nome = $_POST["nome_doc"];
$data = $_POST["data_doc"];
$arquivo_anexado = $_FILES["arquivo_anexado"]["tmp_name"];

	$destino = "../arquivos/". md5 ( time () * 6 ) . ".png";	
	$nome_arquivo = md5 ( time () * 6 ) . ".png"; move_uploaded_file($arquivo_anexado, $destino);


$list5 = new manipulaData();
$list5->setTable("tb_tipo_doc");
$list5->setCampos("
id_cad,
tipo_doc,
nome,
data,
arquivo_anexado
");

$list5->setDados("
'$idcad',
'$tipo_doc',
'$nome',
'$data',
'$nome_arquivo'
");
$list5->insert();*/


$CEP = $_POST["cep_end"];
$residencia = $_POST["residencia_end"];
$complemento = utf8_decode($_POST["complemento"]);
$cidade = utf8_decode($_POST["cidade"]);
$bairro = utf8_decode($_POST["bairro_end"]);
$uf = $_POST["uf"];
$obs = utf8_decode($_POST["observacoes_end"]);



$list = new manipulaData();
$list->setTable("tb_end");
$list->setCampos("
id_cad,
residencia,
CEP,
complemento,
bairro,
uf,
cidade,
obs
");

$list->setDados("
$idcad,
'$residencia',
'$CEP',
'$complemento',
'$bairro',
'$uf',
'$cidade',
'$obs' 


");
$list->insert(); 



print "<script> 	swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                            window.location='index.php?url=pre_cadastro/listapre_cad#edit_conf';
                        })
</script>
";
}

elseif( $_POST["txtLocal"] == 'cancelar'){


	print("<script> window.location='index.php'; alert('Deseja Cancelar o Cadastro?')</script>");
/*	print "
	<script> window.location='index.php?url=cadastrar/acoes/crud_cadastro&txtLocalDeletar'; alert('Deseja Cancelar o Cadastro?')
</script>"; 
 */
}?>  