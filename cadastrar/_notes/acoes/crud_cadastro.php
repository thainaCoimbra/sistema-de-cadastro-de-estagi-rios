<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  
</head>

<?php 
include("../../classes/manipulaData.php");

if ( $_POST["txtLocal"] == 'Cadastrar'){
$idcad = $_POST["id_cad"];

// Endereço// 

$CEP = $_POST["cep_end"];
$cidade = $_POST["cidade"];
$residencia = $_POST["residencia_end"];
$bairro = $_POST["bairro_end"];
$obs = $_POST["observacoes_end"];




$list = new manipulaData();
$list->setTable("tb_end");
$list->setCampos("
id_cad,
CEP,
cidade,
residencia,
bairro,
obs
");

$list->setDados("
'$idcad',
'$CEP',
'$cidade', 
'$residencia', 
'$bairro',
'$obs'
");
$list->insert();

//fim endereço


// Instituição 

$nome_inst = $_POST["nome_inst"];
$curso = $_POST["curso_inst"];
$nivel = $_POST["nivel"];
$turno = $_POST["turno_inst"];
$periodo = $_POST["periodo"];
$data_inicio = $_POST["data_inicio_inst"];
$data_fim = $_POST["data_fim_inst"];


$list2 = new manipulaData();
$list2->setTable("tb_instituicao");
$list2->setCampos("
id_cad,
nome_inst,
curso,
nivel,
turno,
periodo,
data_inicio,
data_fim
");

$list2->setDados("
'$idcad',
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
$idcad = $_POST["id_cad"];
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
$idcad = $_POST["id_cad"];
$idnaj  = $_POST["txtNomeNaj"];
$iddef  = $_POST["txtNomeDefensoria"];
$nome_lot = $_POST["nom_lot"];
$endereco_lot = $_POST["end_lot"];
$telefone_lot = $_POST["tel_lot"];


$list4 = new manipulaData();
$list4->setTable("tb_lotacao");
$list4->setCampos("
id_cad,
id_naj,
id_defensoria,
nome,
endereco,
telefone
");

$list4->setDados("
'$idcad',
 $idnaj, 
 $iddef,
  
'$nome_lot',
'$endereco_lot', 
'$telefone_lot'
");
$list4->insert(); 

// fim lotacao



	// Arquivo
$idcad = $_POST["id_cad"];
$nome = $_POST["nome_arquivo"];
$lugar_arquivo = $_POST["lugar_arquivo"];
$num_arquivo = $_POST["num_arquivo"];


$list4 = new manipulaData();
$list4->setTable("tb_arquivo");
$list4->setCampos("
id_cad,
nome,
lugar_arquivo,
numero_arquivo
");

$list4->setDados("
'$idcad',
'$nome',
'$lugar_arquivo',  
'$num_arquivo'
");
$list4->insert();


// arquivo


	// Documentos
$tipo_doc = $_POST["tipo_documento"];
$nome = $_POST["nome_doc"];
$data = $_POST["data_doc"];
$arquivo_anexado = $_FILES["arquivo_anexado"]["tmp_name"];
	$destino = "arquivos/". md5 ( time () * 6 ) . ".png";	
	$nome_arquivo = md5 ( time () * 6 ) . ".png";
     	move_uploaded_file($arquivo_anexado, $destino);;



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
$list5->insert();




// Usuários
/*
$nome_usuario = $_POST["nome_usuario"];
$email = $_POST["email_usuario"];
$login = $_POST["login_usuario"];
$senha = $_POST["senha_usuario"];
$perfil_usuario = $_POST["txtPerfilUsuario"];


$list5 = new manipulaData();
$list5->setTable("tb_usuario");
$list5->setCampos("
id_perfil,
nome,
email,
login,
senha,
perfil
");

$list5->setDados("

'$perfil_usuario',
'$nome_usuario',
'$email',
'$login',
'$senha',
'$perfil_usuario'
");
$list5->insert();

*/

//fim documento


print "<div class='alert alert-success' style='font-size:20px'>Cadastrado com sucesso!
<a href='../../pre_cadastro/lista_pre_cadastro.php'><button type='text' style='float:right' class='btn btn-success'>Voltar</button></a>
<br> <br>
</div>";
}

elseif( $_POST["txtLocal"] == 'cancelar'){



	print "
	<div class='container'>

	<form class='form-horizontal' method='post' action='./acoes/crud_cadastro.php' >

	<div class='alert alert-danger' style='font-size:20px'>
	Deseja Cancelar o Cadastro?
<a href='../cadastrar.php'><button type='text' style='float:right' class='btn btn-success'>Não</button></a>
<a href='../../pre_cadastro/lista_pre_cadastro.php'><button value='cancelarId' name='txtLocal2' type='text' style='float:right' class='btn btn-success'>Sim</button></a>
<br> <br>
</div></div>";
 
}


?>

