<?php 
	include_once('../../classes/manipulaData.php');


	//Editar

if(@$_POST["txtLocal"] == "Editar"){
	$editar = new manipulaData();
	$salvar = new manipulaData();
	$data   = new manipulaData();


	    $data_rem       = date("d/m/Y");
	    $data_inicio    = $_POST["data_inicio"];
		$id_cad         = $_POST["id_cad"];
		$novaNaj        = utf8_decode($_POST["txtNomeNaj"]);
		$novaDefensoria = utf8_decode($_POST["txtNomeDefensoria"]);
		$naj            = utf8_decode($_POST["naj"]);
		$defensoria     = utf8_decode($_POST["defensoria"]);
		$obs            = utf8_decode($_POST['obs']);
		$id_tipo_estagio = $_POST['id_tipo_estagio'];
		$id_rem         = $_POST['id_rem'];	

		$data->setTable("tb_remocao");
		$data->setCampoId("id_remocao");
		$data->setValorId($_POST["id_rem"]);
		$data->setCampos("data_rem = '$data_rem'");
		$data->update();


		$salvar->setTable("tb_remocao");
		$salvar->setCampos("
			id_naj,           
			id_defensoria,     
			id_cad,          
			id_najNova,        
			id_defensoriaNova,
			id_tipo_estagio,
			obs,
			data_inicio
		");
		$salvar->setDados("
			'$naj',
			'$defensoria',
			'$id_cad',
			'$novaNaj',
			'$novaDefensoria',
			'$id_tipo_estagio',
			'$obs',
			'$data_inicio'
		");
		$salvar->insert();

		$editar->setTable("tb_lotacao");
		$editar->setCampoId("id_cad");
		$editar->setValorId($_POST["id_cad"]);
		$editar->setCampos(" id_naj = '$novaNaj', id_defensoria = '$novaDefensoria'");		 
		$editar->update();


		

		echo "<script> window.location='../../index.php?url=remocao/lista_remocao'; alert('Alterado com Sucesso!'); </script>";

} elseif (@$_POST["txtLocal"] == "cancelar") {
	echo "<script> window.location='../../index.php?url=remocao/lista_remocao';  </script>";
} ?>