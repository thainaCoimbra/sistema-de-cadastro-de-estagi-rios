
<?php 

$list2 = new manipulaData();
$list2->setTable("tb_usuario");
$dados= $list2->getList();

$perfil = new manipulaData();
$perfil->setTable("tb_perfil");
$perfil->setCampoId("id_perfil");
	  

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
                 
<a class="btn btn-primary" href="index.php?url=usuario/redefinir_senha&idEditar1=<?=$reg->id_usuario?>"s ><i class="glyphicon glyphicon-user"></i></a>
 <a class="btn btn-success" href="index.php?url=usuario_teste/editar_usuario&idEditar=<?=$reg->id_usuario?>"s ><i class="glyphicon glyphicon-pencil"></i></a>
 <a class="btn btn-danger" href="index.php?url=usuario/acoes/deletar&id_usuario=<?=$reg->id_usuario?>" onclick="return confirm('Tem certeza que deseja deletar <?=$reg->nome?> do registro?'); return false;"><em class="glyphicon glyphicon-trash"></em></i></a>

 
                <td><?=$reg->id_usuario?></td>         
                <td><?=$reg->nome?></td>   
                 <td><?=$reg->login?></td> 
                 <td><?=$reg->senha?></td>

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


 


