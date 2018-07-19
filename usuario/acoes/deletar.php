<?php 

	if($_GET['id_usuario'] != null){
		include("../../classes/manipulaData.php");
		$del = new manipulaData();
		$del->setTable("tb_usuario");
		$del->setCampoId('id_usuario');
		$del->setValorId($_GET['id_usuario']);
		$del->delete();
        echo "<script>
        swal(\"Deleção Bem-Succedida\", \"O item em questão foi excluído da base de dados\", \"success\")
            .then(function () {
                window.location='index.php?url=usuario/listar_usuario#edit_conf';
            })
    </script>";
				
	}else{
        echo "<script>
    swal(\"Erro na Deleção\", \"O protocolo de deleção recebeu parâmetros inválidos\", \"error\");
        .then(function () {
                window.location='index.php?url=usuario/listar_usuario#edit_conf';
            })
        </script>";
	}
?>