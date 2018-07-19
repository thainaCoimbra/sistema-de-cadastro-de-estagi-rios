<?php 

	if($_GET['id_cad'] != null){
		include("../../classes/manipulaData.php");
		$del = new manipulaData();
		$del->setTable("tb_cadastro");
		$del->setCampoId('id_cad');
		$del->setValorId($_GET['id_cad']);
		$del->delete();
		echo "<script> window.location='../lista_pre_cadastro.php'; alert('Registro deletado.');</script>";
				
	}else{
		echo "<script> window.location='../lista_pre_cadastro.php'; alert('ERRO ao excluír o registro');</script>";
	}
?>