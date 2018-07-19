<?php 
include_once('../../classes/manipulaData.php');
  $cad = new manipulaData();
  $editar = new manipulaData();
  $deletar = new manipulaData();
//Cadastrar

if(@$_POST["txtLocal"] == "CadastrarTipoEstagio"){
   $txttipoestagio = utf8_decode($_POST["txtTipoEstagio"]);
  
   $cad->setTable("tb_tipo_estagio");
   $cad->setCampos("tipo");
   $cad->setDados("'$txttipoestagio'");
   $cad->insert();
   echo "<script>
            swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                           window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_estagio';
            });</script>";
}elseif (@$_POST["txtLocal"] == "CadastrarSituacaoEstagiario"){
   $txtsituacaoestagio = utf8_decode($_POST["txtSituacaoEstagio"]);
   
   $cad->setTable("tb_situacao");
   $cad->setCampos("situacao");
   $cad->setDados("'$txtsituacaoestagio'");
   $cad->insert();
   echo "<script> 
                swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                           window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_situacao';
            });
            </script>";
}elseif (@$_POST["txtLocal"] == "CadastrarPerfilUsuario"){
   $txtperfilusuario = utf8_decode($_POST["txtPerfilUsuario"]);
   
   $cad->setTable("tb_perfil");
   $cad->setCampos("tipo");
   $cad->setDados("'$txtperfilusuario'");
   $cad->insert();
   echo "<script>
            swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                           window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_perfil';
            });</script>";
}elseif (@$_POST["txtLocal"] == "CadastrarNaj"){
   
  $txtnomenaj = utf8_decode($_POST["txtNomeNaj"]);
  $txtcepnaj = utf8_decode($_POST["txtCepNaj"]);
  $txtendereconaj = utf8_decode($_POST["txtEnderecoNaj"]);
  $txtnumeronaj = utf8_decode($_POST["txtNumeroNaj"]);
  

   $cad->setTable("tb_naj");
   $cad->setCampos("nome,  endereco, telefone, CEP");
   $cad->setDados("'$txtnomenaj', '$txtendereconaj', '$txtnumeronaj','$txtcepnaj'");
   $cad->insert();
  
   echo "<script>
            swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                           window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_naj';
            });</script>";
}elseif (@$_POST["txtLocal"] == "CadastrarDefensoria"){

  $txtNomeNaj = utf8_decode($_POST["txtNajDefensoria"]);
  $txtnomedefensoria = utf8_decode($_POST["txtNomeDefensoria"]);  
  $txttelefonedefensoria = utf8_decode($_POST["txtTelefoneDefensoria"]);



   $cad->setTable("tb_defensoria");
   $cad->setCampos("nome, fk_naj, telefone");
   $cad->setDados("'$txtnomedefensoria', '$txtNomeNaj',  '$txttelefonedefensoria'");
   $cad->insert();
  
   echo "<script>
                swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensoria';
                });
                </script>";
  
}elseif(@$_POST["txtLocal"] == "CadastrarDefensor") {
  $txtDefensor= utf8_decode($_POST["txtDefensor"]);
  $txtCargoDefensor= utf8_decode($_POST["txtCargoDefensor"]);

  $cad->setTable("tb_defensor");
  $cad->setCampos("nome, cargo");
  $cad->setDados("'$txtDefensor', '$txtCargoDefensor'");
  $cad->insert();

  echo "<script> swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensor';
                }); </script>";

}elseif(@$_POST["txtLocal"] == "CadastrarCurso") {
  $txtCurso = utf8_decode($_POST["txtCurso"]);

  $cad->setTable("tb_curso");
  $cad->setCampos("descricao");
  $cad->setDados("'$txtCurso'");
  $cad->insert();

  echo "<script>
        swal(\"Cadastro Efetuado!\", \"O cadastro foi bem-sucedido\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_curso';
        });
        </script>";
}

  //Fim cadastrar 
 //Editar

elseif(@$_POST["editartxtLocal"] == "editarTipoEstagio"){
   
  echo $txttipo = utf8_decode($_POST["txtTipo"]);
  $id_tipo_estagio = utf8_decode($_POST["id_tipo_estagio"]);

  $editar->setTable("tb_tipo_estagio");
  $editar->setCampos("tipo = '$txttipo'");
  $editar->setCampoId("id_tipo_estagio");
  $editar->setValorId("$id_tipo_estagio");
  $editar->update();

  echo "<script>
        swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_estagio';
        });
        </script>";


}elseif(@$_POST["editartxtLocal"] == "editarSituacaoEstagiario"){
   
  $situacao = utf8_decode($_POST["txtSituacaoEstagio"]);
  $id_situacao = utf8_decode($_POST["id_situacao"]);

  $editar->setTable("tb_situacao");
  $editar->setCampos("situacao = '$situacao'");
  $editar->setCampoId("id_situacao");
  $editar->setValorId("$id_situacao");
  $editar->update();

  echo "<script>
                swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_situacao'; 
        });
                </script>";


}elseif(@$_POST["editartxtLocal"] == "editarPerfilUsuario"){
   
  $tipo = utf8_decode($_POST["txtPerfilUsuario"]);
  $id_perfil = utf8_decode($_POST["id_perfil"]);

  $editar->setTable("tb_perfil");
  $editar->setCampos("tipo = '$tipo'");
  $editar->setCampoId("id_perfil");
  $editar->setValorId("$id_perfil");
  $editar->update();

  echo "<script>
                swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_perfil';
                }); </script>";

}elseif(@$_POST["editartxtLocal"] == "editarNaj"){
   
  $nome = utf8_decode($_POST["txtNomeNaj"]);
  $cep = utf8_decode($_POST["txtCepNaj"]);
  $endereco = utf8_decode($_POST["txtEnderecoNaj"]);
  $telefone = utf8_decode($_POST["txtNumeroNaj"]);
  $id_naj = utf8_decode($_POST["id_naj"]);

  $editar->setTable("tb_naj");
  $editar->setCampos("nome = '$nome', 
                      CEP = '$cep',
                      endereco = '$endereco', 
                      telefone = '$telefone'
                     
                     ");

  $editar->setCampoId("id_naj");
  $editar->setValorId("$id_naj");
  $editar->update();

  echo "<script>    swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_naj';
                }); 
            </script>";

}elseif(@$_POST["editartxtLocal"] == "editarDefensoria"){
   
  $nome = utf8_decode($_POST["txtNomeDefensoria"]);
  $telefone = utf8_decode($_POST["txtTelefoneDefensoria"]);
  $txtnajdefensoria = utf8_decode($_POST["txtNajDefensoria"]);
  $id_defensoria = utf8_decode($_POST["id_defensoria"]);

  $editar->setTable("tb_defensoria");
  $editar->setCampos("nome = '$nome', 
                      telefone = '$telefone',
                      fk_naj = '$txtnajdefensoria'
                     ");

  $editar->setCampoId("id_defensoria");
  $editar->setValorId("$id_defensoria");
  $editar->update();

  echo "<script>
                swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensoria';
                }); </script>";


}elseif(@$_POST["editartxtLocal"] == "editarCurso"){
   
  $descricao = utf8_decode($_POST["txtdescricao"]);
  $id_curso = utf8_decode($_POST["id_curso"]);

  $editar->setTable("tb_curso");
  $editar->setCampos("descricao = '$descricao'");
  $editar->setCampoId("id_curso");
  $editar->setValorId("$id_curso");
  $editar->update();

  echo "    <script>swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_curso';
                }); </script>";

}elseif(@$_POST["editartxtLocal"] == "editarDefensor"){
   
  $nome = utf8_decode($_POST["txtDefensor"]);
  $cargo = utf8_decode($_POST["txtCargoDefensor"]);
  $id_defensor = utf8_decode($_POST["id_defensor"]);

  $editar->setTable("tb_defensor");
  $editar->setCampos("nome = '$nome',  cargo = '$cargo'");
  $editar->setCampoId("id_defensor");
  $editar->setValorId("$id_defensor");
  $editar->update();

  echo "
        <script> 
        swal(\"Edição Efetuada!\", \"A edição foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensor'; 
                });
         </script>";
}


//Deletar


elseif (@$_GET["DeletetxtLocal"] == 'deletarTipoEstagio'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_tipo_estagio");
$deletar->setCampoId("id_tipo_estagio" );
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script>    swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_estagio';
                }); </script>";

}elseif (@$_GET["DeletetxtLocal"] == 'deletarSituacao'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_situacao");
$deletar->setCampoId("id_situacao" );
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script>
                 swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_situacao';
                });</script>";

}elseif (@$_GET["DeletetxtLocal"] == 'deletarTipoUsuario'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_perfil");
$deletar->setCampoId("id_perfil");
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script>    swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_perfil';
                });</script>";

}elseif (@$_GET["DeletetxtLocal"] == 'deletarNaj'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_naj");
$deletar->setCampoId("id_naj " );
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script> 
                swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_naj';
                }); </script>";
}elseif (@$_GET["DeletetxtLocal"] == 'deletarDefensoria'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_defensoria");
$deletar->setCampoId("id_defensoria " );
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script>
            swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensoria';
                });
              </script>";

}elseif (@$_GET["DeletetxtLocal"] == 'deletarCurso'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_curso");
$deletar->setCampoId("id_curso " );
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script>
                swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_curso';
                });
                  </script>";

}elseif (@$_GET["DeletetxtLocal"] == 'deletarDefensor'){

$campoId= $_GET["Id"];

$deletar->setTable("tb_defensor");
$deletar->setCampoId("id_defensor " );
$deletar->setValorId("$campoId");
$deletar->delete();

echo "<script> swal(\"Deleção Efetuada!\", \"A deleção foi bem-sucedida\", \"success\")
                        .then(function () {
                            window.location='index.php?url=cad_tipo/lista_cad_tipo&page=lista_defensor';
                });</script>";
}
