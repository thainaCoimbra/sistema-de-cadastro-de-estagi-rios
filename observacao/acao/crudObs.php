<?php 
include_once('../../classes/manipulaData.php');


if ($_POST["txtLocal"] == 'Cadastrar'){
date_default_timezone_set('America/Sao_Paulo');

$id_cad = $_POST["id_cad"];
$data = date("d/M/Y H:i");
$obs = utf8_decode($_POST["obs"]);


$list = new manipulaData();
$list->setTable("tb_obs");
$list->setCampos("
id_cad,
data,
obs
 ");


$list->setDados("
'$id_cad', 
'$data', 
'$obs'"
);

$list->insert();

print "<script> 	swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                            window.location='index.php?url=pre_cadastro/listapre_cad#edit_conf';
                        })
</script>
";
}
?>


