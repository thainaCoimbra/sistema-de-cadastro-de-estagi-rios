<?php

	if($_GET['id_cad'] != null){
		include("../../classes/manipulaData.php");
		$listEditar = new manipulaData();
		$listEditar->setTable("tb_cadastro");
		$listEditar->setCampoId('id_cad');
		$listEditar->setValorId($_GET['id_cad']);
		$listEditar->getListEditar();
		echo "<script> window.location='../editar_relatorio.php';</script>";

	}else{
		echo "<script> window.location='../lista_pre_cadastro.php'; alert('ERRO ao excluír o registro');</script>";
	}
