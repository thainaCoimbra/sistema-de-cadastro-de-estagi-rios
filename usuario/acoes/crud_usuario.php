<?php
include("../../classes/manipulaData.php");

if ( $_POST["txtLocal"] == 'Cadastrar'){


$nome_usuario = $_POST["nome_usuario"];
$csenha = md5($_POST["csenha_usuario"]);
$login = $_POST["login_usuario"];
$senha = md5($_POST["senha_usuario"]);
$perfil_usuario = $_POST["txtPerfilUsuario"];


$list5 = new manipulaData();
$list5->setTable("tb_usuario");
$list5->setCampos("

id_perfil,
nome,
csenha,
login,
senha

");

$list5->setDados("

'$perfil_usuario',
'$nome_usuario',
'$csenha',
'$login',
'$senha'

");
$list5->insert();

echo "    <script>
        swal(\"Cadastro Bem-Sucedido\", \"A cadastro em questão foi bem-succedido\", \"success\")
            .then(function () {
                window.location='index.php?url=usuario/listar_usuario#cad_conf';
            })
        </script>
        ";

}elseif ( $_POST["txtLocal"] == 'Editar') {
 $editar = new manipulaData();
 $id_usuario = $_POST["id_usuario"] ;
 $perfil_usuario = $_POST["txtPerfilUsuario"];
 $nome = $_POST["nome_usuario"];
 $login = $_POST["login_usuario"];
 $csenha = $_POST["csenha_usuario"];
 $senha = $_POST["senha_usuario"];

   $verificar = new manipulaData();
   $verificar->setTable("tb_usuario");
   $verificar->setCampoId("csenha");
   $verificar->setValorId("'$senha' AND senha = '$senha'  AND id_usuario = $id_usuario");
  $dados = $verificar->getListEditar();

    $cont = mysqli_num_rows($dados);

  
   if($cont > 0){
	   
  $editar->setTable("tb_usuario");
  $editar->setCampos("id_perfil = '$perfil_usuario', nome = '$nome', login = '$login' ");
  $editar->setCampoId("id_usuario");
  $editar->setValorId("$id_usuario");
  $editar->update();
   }else{
	   $csenha = md5($_POST["csenha_usuario"]);
		 $senha = md5($_POST["senha_usuario"]);
  $editar->setTable("tb_usuario");
 $editar->setCampos("id_perfil = '$perfil_usuario', nome = '$nome', csenha    = '$csenha', login     = '$login', senha     = '$senha'  ");
   $editar->setCampoId("id_usuario");
  $editar->setValorId("$id_usuario");
  $editar->update();
     }

     echo "<script>
        swal(\"Edição Bem-Succedida\", \"A edição deste registro foi bem-succedida\", \"success\")
            .then(function () {
                window.location='index.php?url=usuario/listar_usuario#edit_conf';
            })
    </script>";

}





 ?>