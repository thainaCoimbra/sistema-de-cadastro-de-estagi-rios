<?php 
$list = new manipulaData();

$pag = (isset($_GET['pag'])) ? (int)$_GET['pag'] : 1 ;
 
if($pag=='0'){
    $pag = '1';
}
 
// Pegamos a palavra







$palavra = trim($_REQUEST['palavra']);

$maximo = '20';
 
//Atribui a variável inicio o inicio de onde os registros vão ser mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pag * $maximo) - $maximo;
  
 $list->setTable("tb_cadastro");

  $list->setDados($palavra);
  $list->setCampos('nome');
  $list->setInicio($inicio);
  $list->setFim($maximo);
//  if(!empty($palavra)){
  $consulta = $list->get_decresc_srch();
 // }else{
    // $consulta = $list->getPaginacao();
//   }

 $count = mysqli_num_rows($consulta);


   if($count==0){
    $list->setTable("tb_cadastro");
    $list->setDados($palavra);
    $list->setCampos('CPF');
    $consulta = $list->get_decresc_srch();
    $count = mysqli_num_rows($consulta);
 }
 if($count==0){
    $list->setTable("tb_cadastro");
    $list->setDados($palavra);
    $list->setCampos('matricula');
    $consulta = $list->get_decresc_srch();
    $count = mysqli_num_rows($consulta);
 }
 if($count==0){
    $list->setTable("tb_cadastro");
    $list->setDados($palavra);
    $list->setCampos('identidade');
    $consulta = $list->get_decresc_srch();
    $count = mysqli_num_rows($consulta);
 }
?>

<div class="container">
<center><h3>Lista de Estagiários Cadastrados</h3></center>
    <hr>


    <form name="frmBusca" method="post" enctype="multipart/form-data" action="index.php?url=pre_cadastro/listapre_cad&pag=1" >
        <div class="row">
            <div id="custom-search-input">
                <center>
                    <div class="col-md-2" >
                        <?php if ($_SESSION["PERFIL"] == "Administrador" || $_SESSION["PERFIL"] == 'Super Administrador') {?>
        <a href="index.php?url=pre_cadastro/pre_cadastro" ><button style="width: 100%;" type="button" class="btn btn-success"><b>Cadastrar</b></button></a>
        <?php  $_SESSION["PERFIL"];} ?> 
                    </div>
                    <div class="input-group col-md-7">
                        <input type="text" class="  search-query form-control" placeholder="Pesquisar..." value="<?php echo $palavra ?>" name="palavra"/>
                        <span class="input-group-btn">
                                    <input class="btn btn-success" value="Buscar" type="submit">

                                        <span class=" glyphicon glyphicon-search"   ></span>
                            </input>
                            <a href="index.php?url=pre_cadastro/listapre_cad" class="btn btn-primary" data-toggle='tooltip' title='Atualizar' >

                                        <span class=" glyphicon glyphicon-refresh"   ></span>
                                    </a>

                                </span>
                    </div>
                </center>
            </div>
        </div>
</div>
<br><br><br>
</form>






<table  class="table table-striped " cellspacing="ss0" width="80%">
    <thead>
    <tr>
        <th class="actions">A&ccedil;&otilde;es</th>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Identidade</th>
        <th>CPF</th>

    </tr>
    </thead>

    <tbody>

    <?php


    if ($count != 0) {

        while($reg = mysqli_fetch_object($consulta)){ ?>

            <tr>
                <td align="center">

                    <a class="btn btn-primary" data-toggle='tooltip' title='Emitir Crachá' href="cracha/cracha.php?id_cad=<?=$reg->id_cad?>" target="_blank"><i class="glyphicon glyphicon-picture" ></i></a>
                    <a class="btn btn-info" data-toggle='tooltip' title='Visualizar Dados' href="index.php?url=pre_cadastro/visualizar&id_cad=<?=$reg->id_cad?>"><i class="glyphicon glyphicon-search" ></i></a>
                    <?php if ($_SESSION["PERFIL"] == "Administrador" || $_SESSION["PERFIL"] == 'Super Administrador') {?>
                        <a class="btn btn-success" data-toggle='tooltip' title='Editar' href="index.php?url=pre_cadastro/editar_relatorio&id_cad=<?=$reg->id_cad?>">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <?php  $_SESSION["PERFIL"];} ?>
                    <?php if ($_SESSION["PERFIL"] == "Administrador" || $_SESSION["PERFIL"] == 'Super Administrador') {?>
                    <a class="btn btn-danger" data-toggle='tooltip' title='Deletar' onclick="ao_deletar_conf(<?=$reg->id_cad?>)">
                        <em class="glyphicon glyphicon-trash">
                        </em></i>
                        <?php  $_SESSION["PERFIL"];} ?>
                    </a>
                    <a class="btn btn-info" data-toggle='tooltip' title='Historico de observação' href="observacao/historico_obs.php?id_cad=<?=$reg->id_cad?>" target="_blank"><i class="glyphicon glyphicon-list-alt" ></i></a>
                </td>
                <td><?= utf8_encode($reg->matricula)?></td>
                <td><?= utf8_encode($reg->nome)?></td>
                <td><?= utf8_encode($reg->identidade)?></td>
                <td><?= utf8_encode($reg->CPF)?></td>

                <script>
                    function ao_deletar_conf(id) {
                        swal({
                            title: "Certeza de que deseja deletar esse registro?",
                            text: "Uma vez deletado, o registro não poderá ser recuperado",
                            icon: "warning",
                            buttons:{
                                cancelar : "cancelar",
                                deletar : "deletar"

                            },
                            dangerMode: true
                        }).then(function (value) {

                            switch (value){

                                case "deletar":
                                    window.location="index.php?url=pre_cadastro/acoes/deletar&id_cad="+id.toString();
                                case "cancelar":

                            }
                        })

                    }

                </script>

            </tr>
        <?php  }}else { echo "nenhum registro encontrado!!";} ?>
    </tbody>
</table>


<?php
// Query de consulta
/*
$list->setTable("tb_cadastro");

$list->setDados($palavra);
$list->setCamposExtras(['nome', 'matricula', 'CPF', 'identidade']);
$consulta = $list->get_decresc_srch();
$count = mysqli_num_rows($consulta);
 */

  $list->setTable("tb_cadastro");
  $list->setDados($palavra);
  $list->setCampos('nome');
  $consulta = $list->get_decresc();
 $count = mysqli_num_rows($consulta);

 if($count==0){
    $list->setTable("tb_cadastro");
    $list->setDados($palavra);
    $list->setCampos('CPF');
    $consulta = $list->get_decresc();
    $count = mysqli_num_rows($consulta);
 }
 if($count==0){
    $list->setTable("tb_cadastro");
    $list->setDados($palavra);
    $list->setCampos('matricula');
    $consulta = $list->get_decresc();
    $count = mysqli_num_rows($consulta);
 }
 if($count==0){
    $list->setTable("tb_cadastro");
    $list->setDados($palavra);
    $list->setCampos('identidade');
    $consulta = $list->get_decresc();
    $count = mysqli_num_rows($consulta);
 }







$paginas = ceil($count/$maximo);
$links = '4';

echo '<ul class="pagination" id="paginacao">';

echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag=1" >Primeira</a></li>';

for($i = $pag-$links; $i <= $pag-1; $i++){
    if($i <= 0){
    }else{
        echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag='.$i.'&palavra='.$palavra.'">'.$i.'</a></li>';
    }
}

echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag='.$i.'&palavra='.$palavra.'">'.$pag.'</a></li>';

for($i = $pag+1; $i <= $pag+$links; $i++){
    if($i > $paginas){

    }else{
        echo '<li>
			<a href="index.php?url=pre_cadastro/listapre_cad&pag='.$i.'&palavra='.$palavra.'">'.$i.'</a>
			</li>';
    }
}
echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag='.$paginas.'&palavra='.$palavra.'">Última</a></li>';
echo '</ul>';
?>




<script>

    /*
    if (window.location.hash == "#del_conf") {
        swal("Deleção Bem-Succedida", "O item em questão foi excluído da base de dados", "success");
    }else if (window.location.hash == "#del_erro") {
        swal("Erro na Deleção", "O protocolo de deleção recebeu parâmetros inválidos", "error");
    }else if (window.location.hash == "#edit_conf") {
        swal("Edição Bem-Succedida", "A edição deste registro foi bem-succedida", "success");
        }else if (window.location.hash == "#cad_conf") {
        swal("Cadastro Bem-Succedido", "A cadastro em questão foi bem-succedido", "success");
    }
    */
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

