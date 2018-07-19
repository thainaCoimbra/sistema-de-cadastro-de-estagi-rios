<?php
  $list1 = new manipulaData();
  $list1->setCampos("*");
  $list1->setTable("tb_usuario");
  $dados1= $list1->getList();

  $list2 = new manipulaData();
  $list2->setCampos("*");
  $list2->setTable("tb_perfil");
  $dados2= $list2->getList();

?>

    <script type="text/javascript">
      function validar(){
        var senha_usuario = formuser.senha_usuario.value;
        var csenha_usuario = formuser.csenha_usuario.value;
        
        if(senha_usuario == "" || senha_usuario.length <= 5){
          swal("Erro no Cadastro", "Os campos de senha precisam ter ao menos 6 dígitos!", "error");
          formuser.senha_usuario.focus();
          return false;
        }
        
        if(csenha_usuario == "" || csenha_usuario.length <= 5){
          swal("Erro no Cadastro", "Os campos de senha precisam ter ao menos 6 dígitos!", "error");
          formuser.csenha_usuario.focus();
          return false;
        }
        
        if (senha_usuario != csenha_usuario) {
            swal("Erro no Cadastro", "Os campos de senha precisam ter ao menos 6 dígitos!", "error");
          formuser.senha_usuario.focus();
          return false;
        }
      }
    </script>
  

  </head>




<div class="container">
<form class="form-horizontal" name="formuser" method="post" action="index.php?url=usuario/acoes/crud_usuario" >

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
                                <input name="nome_usuario" type="text" class="form-control" id="nome" placeholder="Nome Completo" required="required">
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
                                  <option value=""></option>
                                    <?php  while($reg3 = mysqli_fetch_object($dados2)){ ?>
                                    <option value="<?=$reg3->id_perfil?>"><?=$reg3->tipo?></option>
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
                                <input name="login_usuario" type="text" class="form-control" id="login" placeholder="@usuario.login" required="required">
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
                            <div class="col-md-11">
                                <input name="senha_usuario" type="password" class="form-control" id="senha" >
                            </div>
                            <div class="col-md-1" onclick="visualiza_esconde(document.getElementById('img1'), document.getElementById('senha'));" style="padding-left: 0px;">
                                <i  class="eye_img" ><span  id="img1" class="fa fa-eye" style="padding-top: 10px;"></i>

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
                            <div class="col-md-11">
                                <input name="csenha_usuario" type="password" class="form-control" id="csenha" >
                            </div>
                            <div class="col-md-1" onclick="visualiza_esconde(document.getElementById('img2'), document.getElementById('csenha'));" style="padding-left: 0px;">
                                <i  class="eye_img" ><span  id="img2" class="fa fa-eye" style="padding-top: 10px;"></i>

                            </div>

                        </div>                   
                    </div>
                <br><br>
                </div>
            <br>
    <div><span id = "senhas_msg" class="erro_msg"></span></div>
<center>        

            <div class="btn-group">
                
            <button id="btlimpar" name="txtLocal" value="cancelar" class="btn btn-danger">Cancelar</button>
            
            </div>

            <div class="btn-group">
                
            <button id="btsalvar" name="txtLocal" value="Cadastrar" type="submit" onclick="return validar()" class="btn btn-success">Cadastrar</button>
            </div>
    </center>

            </fieldset>



</form><br>
</div>


