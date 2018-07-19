<?php
/*******************************************
**	CLASSE DE INCLUSÃO DE PÁGINAS
**	MÉTODO - trocarURL($url)
**	ESTA CLASSE FAZ A TROCA DE PÁGINAS NA INDEX
**  VERSÃO 1.0 
********************************************/
class verUrl{
	function trocarURL($url){
		if(empty($url)){
			$url = "home.php";
		}else{
			$url = "$url.php";
		}
		include_once($url);
	}
}
?>

