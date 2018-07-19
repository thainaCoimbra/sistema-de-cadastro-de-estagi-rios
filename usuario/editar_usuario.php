<?php 

  $list = new manipulaData();
  $list->setTable("tb_usuario");
  $list->setCampoId("id_usuario"); 
  $list->setValorId($_GET["idEditar"]); // metodo para pega da url 
  $dados= $list->getListEditar();
  $reg = mysqli_fetch_object($dados);

$list4 = new manipulaData();
$list4->setTable("tb_perfil");
$dados4 = $list4->getList();


?>




  
    <script type="text/javascript">
      function validar(){
        var senha_usuario = formuser.senha_usuario.value;
        var csenha_usuario = formuser.csenha_usuario.value;
        
        if(senha_usuario == "" || senha_usuario.length <= 5){
            swal("Erro na Edição!", "As senhas precisam ter ao menos 6 caracteres!", "error");
          formuser.senha_usuario.focus();
          return false;
        }
        
        if(csenha_usuario == "" || csenha_usuario.length <= 5){
            swal("Erro na Edição!", "As senhas precisam ter ao menos 6 caracteres!", "error");
            formuser.csenha_usuario.focus();
            return false;
        }
        
        if (senha_usuario != csenha_usuario) {
            swal("Erro na Edição!", "As senhas precisam ser iguais!", "error");
          formuser.senha_usuario.focus();
          return false;
        }
      }
    </script>
  

  </head>




<div class="container">
<form class="form-horizontal" name="formuser" method="post" action="index.php?url=usuario/acoes/crud_usuario" >
<input type="hidden" name="txtLocal" value="Editar">
<input type="hidden" name="id_usuario" value="<?=$reg->id_usuario?>">
<fieldset>
   <legend> <h3>Usuário</h3></legend>

    <!-- 1ª Linha --> 

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-8">
                                Nome:
                            </div>
                            <div class="col-md-12">
                                <input name="nome_usuario" type="text" class="form-control" id="nome" value="<?=$reg->nome?>" required="required">
                            </div>                        
                        </div>                   
                    </div>
                </div>

               <div class="row">
                  
                     <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-8">
                                Perfil:
                            </div>
                            <div class="col-md-12">
                                <select id="" name="txtPerfilUsuario" class="form-control">
                                  
                                    <?php  while($reg4 = mysqli_fetch_object($dados4)){ ?>

                                    <option value="<?=$reg4->id_perfil?>" <?php if($reg->id_perfil == $reg4->id_perfil){  echo "selected"; }?>><?=$reg4->tipo?></option>
                                    <?php  } ?>
                                    </select>
                            </div>                        
                        </div>                   
                    </div>
                
                </div>
    <!-- 2ª Linha --> 

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-8">
                                Login:
                            </div>
                            <div class="col-md-12">
                                <input name="login_usuario" type="text" class="form-control" id="login" value="<?=$reg->login?>" required="required">
                            </div>                        
                        </div>                   
                    </div>
                
                </div>
    <!-- 3ª Linha --> 

                <div class="row">
                   <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-8">
                                Senha:
                            </div>
                            <div class="col-md-12">
                                <input name="senha_usuario" type="password" class="form-control" id="senha" value="<?=$reg->senha?>" >
                            </div>                        
                        </div>                   
                    </div>
                
                </div>

               <div class="row">
                   <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-8">
                                Confirmar Senha:
                            </div>
                            <div class="col-md-12">
                                <input name="csenha_usuario" type="password" class="form-control" id="senha" value="<?=$reg->csenha?>" >
                            </div>                        
                        </div>                   
                    </div>
                
                </div>
            <br> 
<center>        

            <div class="btn-group">
                
            <button id="btlimpar" name="txtLocal" value="cancelar" class="btn btn-danger">Cancelar</button>
            
            </div>

            <div class="btn-group">
                
            <button id="btsalvar" name="txtLocal" value="Editar" type="submit" onclick="return validar()" class="btn btn-success">Editar</button>
            </div>
    </center>

            </fieldset>



</form><br>
</div>