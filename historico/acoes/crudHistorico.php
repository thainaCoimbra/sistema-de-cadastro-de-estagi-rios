<?php 
include_once('../../classes/manipulaData.php');

$editar = new manipulaData();
$lot    = new manipulaData();


$id_rem = $_POST["id_rem"];
$id_cad = $_POST["id_cad"];
$naj    = $_POST["naj"];
$inicio = $_POST["dataInicio"];
$fim    = $_POST["dataFim"];
$obs    = $_POST["obs"];
$totalHoras     = utf8_decode($_POST["totalHoras"]);


if (@$_POST["lotAtual"] == "Sim") {
	
	$editar->setTable("tb_remocao");
	$editar->setCampos(" id_najNova  = '$naj', 
						 obs         = '$obs',
						 totalHoras  = '$totalHoras',
						 data_inicio = '$inicio'
					   ");

	$editar->setCampoId("id_remocao");
	$editar->setValorId("$id_rem");
	$editar->update();

	$lot->setTable("tb_lotacao");
	$lot->setCampos("id_naj = '$naj'");
	$lot->setCampoId("id_cad");
	$lot->setValorId("$id_cad");
	$lot->update();

	/*echo "<script>
                swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=pre_cadastro/editar_relatorio&id_cad=$id_cad';
                }); </script>";*/
               header("location:../../index.php?url=pre_cadastro/editar_relatorio&id_cad='$id_cad'");

}elseif (@$_POST["lotAtual"] == "Nao") {

	$editar->setTable("tb_remocao");
	$editar->setCampos(" data_rem    = '$fim',
						 id_najNova  = '$naj', 
						 obs         = '$obs',
						 totalHoras  = '$totalHoras',
						 data_inicio = '$inicio'
					   ");

	$editar->setCampoId("id_remocao");
	$editar->setValorId("$id_rem");
	$editar->update();

             header("location:../../index.php?url=pre_cadastro/editar_relatorio&id_cad='$id_cad'");
}
 ?>