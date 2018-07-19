<!-- clonado do git-->
<?php 
include ("classes/manipulaData.php");
include ("classes/verUrl.php");
session_start();
 if(isset($_SESSION["LOGADO"])){

 ?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
<meta charset="utf-8">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116143567-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116143567-3');
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Departamento de Estágio</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="tema/csstema.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/blocos.css">
<link rel="stylesheet" type="text/css" href="pre_cadastro/csspre/csspre.css">
<link rel="stylesheet" type="text/css" href="cadastrar/csscad/jscad.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/estilho_thommy.css">
             <script
                     src="https://code.jquery.com/jquery-3.3.1.js"
                     integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                     crossorigin="anonymous"></script>
         <script src="bootstrap/js/sweet_alert.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/menu1.css">
<link href="css/hover.css" rel="stylesheet" media="all">

</head>
<body >
  <!-- MENU PRINCIPAL -->
 <header>
    <center>
       <nav class="hvr-underline-from-center">
         <div class="menuTC">
           <ul class="ulTC">

            <li class="liTC">
               <a href="index.php" class="hvr-icon-bob  hvr-float-shadow" data-toggle="tooltip" data-placement="bottom" title="HOME">
                  <i class="fa-2x fas fa-home hvr-icon" ></i>

               </a>
             </li>

             <li class="liTC">
               <a href="index.php?url=pre_cadastro/listapre_cad" class="hvr-icon-bob  hvr-float-shadow" data-toggle="tooltip" data-placement="bottom" title="ESTAGIÁRIOS">
                  <i class="fa-2x fas fa-users hvr-icon"></i>
               </a>
             </li>

             <li class="liTC">
               <a href="https://app.powerbi.com/view?r=eyJrIjoiNzE0NWEwYTAtODUzZS00MmQ2LWEyMDktZWVhM2Y5NGZmN2M4IiwidCI6ImZhMzVkNzcxLTE2N2MtNGVmNi04MTExLWFiYWUzZjU2NzU5ZCJ9" target="blanck" class="hvr-icon-bob hvr-float-shadow" data-toggle="tooltip" data-placement="bottom" title="RELATÓRIOS">
                  <i class="fa-2x far fa-file-word hvr-icon"></i>
               </a>
             </li>

             <li class="liTC">
               <a href="index.php?url=cad_tipo/lista_cad_tipo" class="hvr-icon-bob hvr-float-shadow" data-toggle="tooltip" data-placement="bottom" title="ÁREA ADMIN">
                  <i class="fa-2x fas fa-unlock-alt hvr-icon"></i>
               </a>
             </li>

             <li class="liTC">
               <a href="index.php?url=usuario/listar_usuario" class="hvr-icon-bob hvr-float-shadow" data-toggle="tooltip" data-placement="bottom" title="USUÁRIOS">
                  <i class="fa-2x fas fa-user-plus hvr-icon"></i>
               </a>
             </li>

             <li class="liTC">
               <a href="classes/autentica.php?txtLocal=logout" target="blanck" class="hvr-icon-bob hvr-float-shadow" data-toggle="tooltip" data-placement="bottom" title="SAIR">
                  <i class="fa-2x fas fa-sign-out-alt hvr-icon"></i>
               </a>
             </li>

             <!-- <li class="logoTC"><img src="img/logo.png"></li> -->
             
           </ul>
         </div>
       </nav>
   </center>
</header>
<!-- FIM MENU PRINCIPAL -->

<div id="wrapper" class="active" >


        <!-- Sidebar -->
        <!--
        <div id="sidebar-wrapper" class="container" >
            <nav id="spy">
                <ul class="sidebar-nav ">
                    <li style="padding-top: 10%" class="sidebar-brand">
                        <a href="index.php"><span class="fa fa-home solo">Home</span></a>
                    </li>
                    <li style="padding-top: ; padding-bottom: 5%;" >
                        <a href="index.php?url=pre_cadastro/listapre_cad" data-scroll>
                            <span class="fa fa-user-circle-o" >Servidor</span>
                        </a>
                    </li>
                    <li style="padding-top: 5%;padding-bottom: 5%;">
                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNzE0NWEwYTAtODUzZS00MmQ2LWEyMDktZWVhM2Y5NGZmN2M4IiwidCI6ImZhMzVkNzcxLTE2N2MtNGVmNi04MTExLWFiYWUzZjU2NzU5ZCJ9" target="blanck" data-scroll>
                            <span class="fa fa-file-text ">Relatórios</span>
                        </a>
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;">
                       <?php if ($_SESSION["PERFIL"] == "Administrador" || $_SESSION["PERFIL"] == "Super Administrador") {?><a href="index.php?url=cad_tipo/lista_cad_tipo" data-scroll>
                            <span class="fa fa-users ">Área Admin</span>
                        </a> <?php  $_SESSION["PERFIL"];} ?>  
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;">
                        <a  href="http://10.223.1.126/glpi/" target="blanck" data-scroll>
                            <span class="fa fa-sitemap ">GLPI</span>
                        </a>
                    </li>
                    <li style="padding-top: 5%; padding-bottom: 5%;">
                        
                         <a href="classes/autentica.php?txtLocal=logout" target="blanck" data-scroll>
                            <span class="fa fa-sign-out ">Sair</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> -->



        <!-- Page content -->
        <div id="page-content-wrapper">
            <div class="content-header">
                
            </div>

            <div class="page-content inset" data-spy="scroll" data-target="#spy">
             
                <div class="row">
                    <div class="col-md-12 "> 
                        <legend id="anch1">SISTEMA ESTÁGIO - BEM VINDO <?php echo $_SESSION["NOME"];?></legend>
                       
                       
                       <?php 
                          $link = new verUrl();
                          @$link->trocarURL($_GET["url"]);
                       ?>
                       
  
                    </div>
                
                
                </div>


            </div>

        </div>
        <br><br> <br> 
<center>
        <p> <span class="text-muted" style="text-align: center;"><b>Subsecretaria de Inovação, Tecnologia da Informação e Comunicação - SITIC </b></span><br>
        <span class="text-muted">Telefone: 4391/ 4335</span></p>
</center>

    </div>


<br> <br> <br> <br> <br>
<br>


<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="tema/jstema.js"></script>


<script src="pre_cadastro/csspre/jspre.js"></script>


<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script src="datatable/js/databalbetradutor.js"></script>
<script src="jquery/buscaEnd.js"></script>


<script src="bootstrap/js/validação.js"></script>
<script src="bootstrap/js/alerts.js"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

</body>
</html>
<?php  }else{
    session_destroy();
    session_unset();
    header("Location: login.php");  
}?> 

