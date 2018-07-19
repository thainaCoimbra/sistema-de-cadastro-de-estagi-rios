<!DOCTYPE html>
<html lang="en">
<head>
  <title>DADOS GERAIS DO SERVIDOR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <script src="jquery/jquery.js"></script>
</head>
<body>

    <div class="container">

        <center> <h2>Cadastrar</h2></center><br>
  

<!-- Botoes -->
<br> 
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-3"><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_naj"> <button   class="btn verde-btn " style="font-size: 20px; color: white;" ><i class="fa fa-map-marker" aria-hidden="true"></i>  NAJ</button> </a></div>

        <div class="col-md-3"><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_situacao"><button  style="font-size: 20px; color: white;"  class="btn verde-btn "><i class="fa fa-id-card" aria-hidden="true"></i>  Situação Estagiário</button></a></div>

        <div class="col-md-3"><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_estagio"><button  style="font-size: 20px; color: white;" class="btn verde-btn "><i class="fa fa-graduation-cap" aria-hidden="true"></i>  Tipo de Estágio</button></a></div>
      </div> <br>

      <div class="row">
        <div class="col-md-3"><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensor"><button  style="font-size: 20px; color: white;" class="btn verde-btn "><i class="fa fa-user-circle-o" aria-hidden="true"></i>  Defensor</button></a></div>

        <div class="col-md-3"><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_curso"><button  style="font-size: 20px; color: white;" class="btn verde-btn "><i class="fa fa-briefcase" aria-hidden="true"></i>  Curso</button></a></div> 

        <div class="col-md-3">
          <?php if ($_SESSION["PERFIL"] == "Super Administrador") {?><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_perfil"><button  style="font-size: 20px; color: white;"  class="btn verde-btn "><i class="fa fa-user" aria-hidden="true"></i>  Perfil Usuário</button></a><?php  $_SESSION["PERFIL"];} ?> </div>
      </div> <br> 

      <div class="row">
        
        <!-- 
        <div class="col-md-3"><a href="index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensoria"><button  style="font-size: 20px;"  class="btn btn-primary "><i class="fa fa-university" aria-hidden="true"></i>  Defensoria</button></a></div> -->
      </div> <br>

    </div>
  </div>
  
  </div>


  <div class="row">
    <div class="col-lg-12">
      <?php
        switch (@$_REQUEST["page"]) {
          //Cadastrar
          case "lista_naj":
            include("lista_naj.php");
          break;
          /*case "lista_defensoria":
            include("lista_defensoria.php");
          break;*/
          case "lista_estagio":
            include("lista_tipo_estagio.php");
          break;
          case "lista_situacao":
            include("lista_tipo_situacao.php");
          break;

          case "lista_perfil":
            include("lista_tipo_usuario.php");
          break;
          case "lista_curso":
            include("lista_curso.php");
          break;
          case "lista_defensor":
            include("lista_defensor.php");
          break;
          //Editar
          case "editar_naj":
            include("editar_naj.php");
          break;
          /*case "editar_defensoria":
            include("editar_defensoria.php");
          break;*/
          case "editar_tipo_estagio":
            include("editar_tipo_estagio.php");
          break;
          case "editar_situacao":
            include("editar_situacao.php");
          break;
          case "editar_perfil":
            include("editar_tipo_usuario.php");
          break;
          case "editar_curso":
            include("editar_curso.php");
          break;
          case "editar_defensor":
            include("editar_defensor.php");
          break;
        }
      ?>
    </div>
  </div>



</div>

<style>
  .col-md-12 {
    padding-bottom: 2%;
  }
  .col-md-3 button{
    width: 100%;
  }
</style>


  


    
    </footer>

    
<hr>
</div>
</body>


<script src="jquery/jquery.js"></script>

<script src="jquery/jquery-3.2.1.min.js"></script>

<script src="js/ie10-viewport-bug-workaround.js"></script>
   

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
 
</html>
