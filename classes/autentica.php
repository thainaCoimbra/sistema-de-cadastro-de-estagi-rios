<?php 
 session_start();  
  include_once("manipulaData.php");
   

          
if(@$_POST["txtLocal"] == "logar"){ 
	
	$login = $_POST["login"];
	$senha = md5($_POST["senha"]);
	$dados = new manipulaData();
	$dados->setTable("tb_usuario");
	$dados->setCampos("nome, login, senha, id_perfil");
	$dados->setDados("login");
	$dados->setValor("'$login'");
	$dados->setCampoId("senha");
	$dados->setStatus("'$senha'");
	$resul = $dados->getVerifica();
	
	$dados = mysqli_fetch_object($resul);
	
   if (mysqli_num_rows($resul)>0) {
	     
          $_SESSION['LOGIN'] = $dados->login;
          $_SESSION['SENHA'] = $dados->senha;
		 $nome = $_SESSION['NOME'] = $dados->nome;
		   echo $nome;
		   
		 
		   $dados1 = new manipulaData();
		   $dados1->setTable("tb_perfil");
		   $dados1->setCampoId("id_perfil");
		   $dados1->setValorId($dados->id_perfil);
		   $res= $dados1->getList1();
          $per = mysqli_fetch_object($res);
		  $_SESSION['PERFIL'] = $per->tipo;
		  $_SESSION["LOGADO"] = "true";
         
		   echo "<script>location.href='../index.php';</script>";       
		  
		  
		} else{
			unset ($_SESSION['LOGIN']);
			unset ($_SESSION['SENHA']);
			$_SESSION["verificar"] = "Usuário ou Senha Inválido!";
			   //header('location:../index.php');
			   echo "<script>window.location='../index.php'; alert('Usuário ou Senha Inválidos!');</script>";
			}
}



if(@$_GET["txtLocal"] == "logout"){ 
	session_destroy(); 
	session_unset(); 
	   echo "Aqui";
 header('location:../index.php');
}
?>

