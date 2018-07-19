<?php  
session_start();

if(!isset($_SESSION["LOGADO"])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema Departamento RH</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="./img/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./bootstrap/font/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./bootstrap/font/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="./vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="./bootstrap/util.css">
  <link rel="stylesheet" type="text/css" href="./bootstrap/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('img/img-01.jpg');">
      <div class="wrap-login100 p-t-190 p-b-30">
        <form class="login100-form validate-form" method="post" action="classes/autentica.php">
          <div class="login100-form-avatar">
            <img src="img/logo.png" alt="AVATAR">
          </div>

          <span class="login100-form-title p-t-20 p-b-20">
            DEFENSORIA PÚBLICA</span>
            <span class="login100-form-title p-t-20 p-b-20">
            SISTEMA DE CADASTRO DE ESTAGIÁRIOS
          </span>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Precisa digitar o login!">
            <input type="hidden" name="txtLocal" value="logar">
            <input class="input100" type="text" name="login" placeholder="Login">           
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Precisa digitar a senha!">
            <input class="input100" type="password" name="senha" placeholder="senha">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
          </div>

          <div class="container-login100-form-btn p-t-10">
            <button class="login100-form-btn" type="submit">
              Entrar
            </button>
          </div>
        </form>

          <div class="text-center w-full p-t-25 p-b-230">
            <a href="#" class="txt1">
              
            </a>
          </div>

          <div class="text-center w-full">
            <label style="color: white;"> Versão 2.0 <i class="fa fa-long-arrow-right"></i> </label>   
                       
            
          </div>
        </form>
      </div>
    </div>
  </div>
  
  

  
<!--===============================================================================================-->  
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>
<?php }else {

  echo $_SESSION["verificar"];
  unset ($_SESSION['verificar']);
  
} ?>