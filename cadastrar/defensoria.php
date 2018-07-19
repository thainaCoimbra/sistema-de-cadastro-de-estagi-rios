<?php include ("../classes/manipulaData.php");

$naj = $_GET['txtNomeNaj'];
$list2 = new manipulaData();
$list2->setCampoId("id_defensoria");
$list2->setValorId($naj);
$list2->setTable("tb_defensoria");
$dados2= $list2->getListEditar();


 
while ($reg2 = mysqli_fetch_object($dados2)){  ?>
                                   <option value="<?= utf8_encode($reg2->id_defensoria)?>"><?= utf8_encode($reg2->nome)?></option>
 <?php } 

?>