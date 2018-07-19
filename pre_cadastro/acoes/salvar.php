<?php 

	if($_GET['id_cad'] != null){
		include("../../classes/manipulaData.php");
		$update = new manipulaData();
		$update->setTable("tb_cadastro");
		$update->setCampoId('id_cad');
		$update->setValorId($_GET['id_cad']);
		$update->update();
		
		echo "<script> window.location='../lista_pre_cadastro.php'; alert('Registro deletado.');</script>";
				
	}else{
		echo "<script> window.location='../lista_pre_cadastro.php'; alert('ERRO ao salvar o registro');</script>";
	}
?>