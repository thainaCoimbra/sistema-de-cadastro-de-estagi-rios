<?php
include("../../classes/manipulaData.php");

if(!empty($_GET['id_cad'])){

    $del = new manipulaData();
    $del->setTable(" tb_cadastro");
    $del->setCampoId('id_cad');
    $del->setValorId($_GET['id_cad']);
    $del->delete();

    $del1 = new manipulaData();
    $del1->setTable("tb_end");
    $del1->setCampoId('id_cad');
    $del1->setValorId($_GET['id_cad']);
    $del1->delete();

    $del2 = new manipulaData();
    $del2->setTable("tb_instituicao");
    $del2->setCampoId('id_cad');
    $del2->setValorId($_GET['id_cad']);
    $del2->delete();

    $del3 = new manipulaData();
    $del3->setTable("tb_lotacao");
    $del3->setCampoId('id_cad');
    $del3->setValorId($_GET['id_cad']);
    $del3->delete();

    $del4 = new manipulaData();
    $del4->setTable("tb_telefone");
    $del4->setCampoId('id_cad');
    $del4->setValorId($_GET['id_cad']);
    $del4->delete();

    $del5 = new manipulaData();
    $del5->setTable("tb_tipo_doc");
    $del5->setCampoId('id_cad');
    $del5->setValorId($_GET['id_cad']);
    $del5->delete();

    // header("location:index.php?url=pre_cadastro/lista_pre_cadastro");


    echo "<script>
        swal(\"Deleção Bem-Sucedida\", \"O item em questão foi excluído da base de dados\", \"success\")
            .then(function () {
                window.location = 'index.php?url=pre_cadastro/listapre_cad#del_conf';
            })
        
    </script>";

}else{
    echo "<script>
        swal(\"Erro na Deleção\", \"O protocolo de deleção recebeu parâmetros inválidos\", \"error\");
            .then(function () {
                    window.location = 'index.php?url=pre_cadastro/listapre_cad#del_erro';
                })</script>";
}
?>