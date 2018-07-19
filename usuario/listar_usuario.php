
<?php 

$list2 = new manipulaData();
$list2->setTable("tb_usuario");

$dados= $list2->getListDecresc();

$perfil = new manipulaData();
$perfil->setTable("tb_perfil");
$perfil->setCampoId("id_perfil");
	  
/*
*
$list->setTable("tb_cadastro");
$list->setDados($palavra);
$list->setCampos('CPF');
$consulta = $list->get_decresc_srch();
$count = mysqli_num_rows($consulta);
*
*/
?>
 

<div class="container">
    <a href="index.php?url=usuario/usuario"><button type="button" class="btn btn-success">Cadastrar Novo Usuário</button><br><br><br></a>
  <div class="row">
       <table id="example" class="table table-striped table-bordered table-hover" cellspacing="ss0" width="100%">
   
        <thead>
            <tr>
             <th class="actions">Ações</th>
                <th>ID</th>
                <th>Nome</th>              
                <th>Login</th>
                <th>Senha</th>
                <th>Perfil</th>
                
            </tr>
        </thead>
        
        <tbody>
                
            <?php  while($reg = mysqli_fetch_object($dados)){ ?>
                <tr>
                
                 <td align="center">
                 

 <a class="btn btn-success"  href="index.php?url=usuario/editar_usuario&idEditar=<?=$reg->id_usuario?>"s ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger"  onclick="ao_deletar_conf(<?=$reg->id_usuario?>)"><em class="glyphicon glyphicon-trash"></em></i></a>

 
                <td><?=$reg->id_usuario?></td>         
                <td><?=$reg->nome?></td>   
                 <td><?=$reg->login?></td> 
                 <td><?=$reg->senha?></td>
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
                                        window.location="index.php?url=usuario/acoes/deletar&id_usuario="+id.toString();
                                    case "cancelar":

                                }
                            })

                        }

                    </script>
                <td>
                  <?php

          $perfil->setValorId($reg->id_perfil);
          $dados3= $perfil->getListEditar();
         $reg3 = mysqli_fetch_object($dados3);
           
if($reg->id_perfil == $reg3->id_perfil)
{                 
 echo $reg3->tipo;  

}

?>                   </td>

                 <?php  } ?>
                </tr>
       

            
            
        </tbody>
      
    </table>
  </div>
</div>


<script>
    condicao_scrollar = false;
/*
    if (window.location.hash == "#del_conf") {
        swal("Deleção Bem-Succedida", "O item em questão foi excluído da base de dados", "success");
    }else if (window.location.hash == "#del_erro") {
        swal("Erro na Deleção", "O protocolo de deleção recebeu parâmetros inválidos", "error");
    }else if (window.location.hash == "#edit_conf") {
        swal("Edição Bem-Succedida", "A edição deste registro foi bem-succedida", "success");
    }else if (window.location.hash == "#cad_conf") {
        swal("Cadastro Bem-Succedido", "A cadastro em questão foi bem-succedido", "success");
    } */
</script>


 


