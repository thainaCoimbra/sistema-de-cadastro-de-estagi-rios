<?php 

	if($_GET['id_usuario'] != null){
		include("../../classes/manipulaData.php");
		$del = new manipulaData();
		$del->setTable("tb_usuario");
		$del->setCampoId('id_usuario');
		$del->setValorId($_GET['id_usuario']);
		$del->delete();
		echo "<script> window.location='index.php?url=usuario/listar_usuario'; alert('Deletado com sucesso!');</script>";
				
	}else{
		echo "<script> window.location='index.php?url=usuario/listar_usuario'; alert('ERRO ao excluír o registro');</script>";
	}
?>