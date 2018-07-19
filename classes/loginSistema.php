<?php 
	include_once("mySqlConn.php");
	
	class LoginSistema extends MySqlConn{
		
		private $usuario, $senha;
		
		public function setUsuario($usr){
			$this->usuario = $usr;
		}
		
		public function setSenha($snh){
			$this->senha = $snh;
		}		
	
			
		
		public function executeLoginAdmin(){
			$sql = "SELECT * FROM tb_usuario  WHERE  login = '$this->login' AND senha = '$this->senha'";
			$qr = self::execSql($sql);
			$total = self::countData($qr);  // resgatar quantos dados foram encontrados
				
			if($total > 1){
				session_cache_expire(1);
				session_start();
				$_SESSION["msg"] = 'Usuario ou Senha Invalidos';
				$erro = base64_encode("Dados Duplicados, login n&atilde;o efetuado, entre em contato com o Administrador");
				header("Location: ".$_SERVER['HTTP_REFERER']."");
					
					
			}else if($total <= 0){
				session_cache_expire(1);
				session_start();
				$_SESSION["msg"] = 'Usuario ou Senha Invalidos';
				$erro = base64_encode("Login ou Senha Inv&aacute;lidos");
				header("Location: ".$_SERVER['HTTP_REFERER']);
					
			}else if($total == "1"){
				session_start();						//abre a sessao
				$dados = self::listQr($qr);				// resgato os dados
				$_SESSION["LOGADO"] = "TRUE";			// carregar a sessão logado
				$_SESSION["NOME"] = $dados->usuario;
				$_SESSION["IDUSER"] = $dados->id_usuario;// carregar a sessão nome

				$sqlPerfil = "SELECT * FROM tb_perfil  WHERE  id_perfil = '$dados->id_perfil'";
				$qrp = self::execSql($sqlPerfil);
                $perfil = self::listQr($qrp);
                $_SESSION["PERFIL"] = $perfil->tipo;
			header("Location: ".$_SERVER['HTTP_REFERER']."");
			}
		}
		
	}
/****************************************
**	executando o login
*****************************************/
	if($_POST["txtLocal"] == "frmLogin" ){
		$login = new LoginSistema();
		$login->setUsuario($_POST["txtUsuario"]);
		$login->setSenha($_POST["txtSenha"]);
		$login->executeLogin();
	}else if($_GET["txtLocal"] == "logOff"){
		echo "aqui";
		session_start();
		session_destroy();
		session_unset();
		if($_GET["Dir"] == "Admin"){
	          	$erro = base64_encode('Muito Obrigado por utilizar nosso sistema!!!');
				echo "<script> window.location='http://sinpecpf.org.br/paginas/Admin/';</script>";
		}else {
			  	$erro = base64_encode('Muito Obrigado por utilizar nosso sistema!!!');
			echo "<script> window.location='http://sinpecpf.org.br';</script>";}
	}else{
		$erro = base64_encode('Acesso de forma inadequada, entre em contato com o Administrador');
		echo "<script> window.location='http://sinpecpf.org.br';</script>";
	}
	
	
	
	
?>