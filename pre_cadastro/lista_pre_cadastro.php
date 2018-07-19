<?php 


header('content-type:text/html; charset=utf-8');



$list = new manipulaData();

$pag = (isset($_GET['pag'])) ? (int)$_GET['pag'] : 1 ;
 
if($pag=='0'){
    $pag = '1';
}
 
// Pegamos a palavra
$palavra = trim($_POST['palavra']);
 
$maximo = '20';
 
//Atribui a variável inicio o inicio de onde os registros vão ser mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
$inicio = ($pag * $maximo) - $maximo;
  
 $list->setTable("tb_cadastro");

  $list->setDados($palavra);
  $list->setCampos('nome');
  $list->setInicio($inicio);
  $list->setFim($maximo);
//  if(!empty($palavra)){
  $consulta = $list->getBuscaPaginacao();
 // }else{
	// $consulta = $list->getPaginacao();
//	 }
 $count = mysqli_num_rows($consulta);
 
?>

<div class="container">
				<a href="index.php?url=pre_cadastro/pre_cadastro"><button type="button" class="btn btn-success">Cadastrar</button><br><br></a> <center><h3>Lista de Servidores Cadastrados</h3></center>
<hr>
 

<form name="frmBusca" method="post" enctype="multipart/form-data" action="index.php?url=pre_cadastro/listapre_cad&pag=1" >
   <div class="row">
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Pesquisar..." name="palavra"/>
                                <span class="input-group-btn">
                                    <input class="btn btn-danger"  type="submit">
                                        <span class=" glyphicon glyphicon-search"  value="Buscar" ></span>
                                    </input>
                                </span>
                            </div>
                        </div>
	</div>
</div>
<br><br><br>
</form>
 
 
	



			
				<table  class="table table-striped table-bordered" cellspacing="ss0" width="100%">
					<thead>
						<tr>
							<th class="actions">Ações</th>
                            <th>Matricula</th>      
							<th>Nome</th>
							<th>Identidade</th>
							<th>CPF</th>
							
						</tr>
					</thead>
					
					<tbody>
							
						<?php 
						
						
						header('content-type:text/html; charset=utf-8');
						
						
						
						if ($count != 0) {
						 while($reg = mysqli_fetch_object($consulta)){ ?>
							<tr>
								<td align="center">
                                 
								 	 <a class="btn btn-primary" href="cracha/cracha.php?id_cad=<?=$reg->id_cad?>" target="_blank"  title="Visualizar Crachar"><i class="glyphicon glyphicon-picture"></i></a>
									 <a class="btn btn-info" href="index.php?url=pre_cadastro/visualizar&id_cad=<?=$reg->id_cad?>"  title="Visualizar Dados"><i class="glyphicon glyphicon-search"></i></a>
									 <a class="btn btn-success" href="index.php?url=pre_cadastro/editar_relatorio&id_cad=<?=$reg->id_cad?>"><i class="glyphicon glyphicon-pencil" title="Editar Dados"></i></a>
									 <a class="btn btn-danger" href="index.php?url=pre_cadastro/acoes/deletar&id_cad=<?=$reg->id_cad?>" onclick="return confirm('Tem certeza que deseja deletar <?=$reg->nome?> do registro?'); return false;" title="Excluir Registro"><em class="glyphicon glyphicon-trash"></em></i></a>
								</td>
                                <td><?=$reg->matricula?></td>
								<td><?=$reg->nome?></td>                    
								<td><?=$reg->identidade?></td>
								<td><?=$reg->CPF?></td>
								
							</tr>
						<?php  }}else { echo "nenhum registro encontrado!!";} ?>
					</tbody>
				</table>
                 <?php



header('content-type:text/html; charset=utf-8');




// Query de consulta

 $list->setTable("tb_cadastro");

  $list->setDados($palavra);
  $list->setCampos('nome');
    $consulta = $list->getPaginacao();
 $count = mysqli_num_rows($consulta);
 
 
 
    
$paginas = ceil($count/$maximo);
$links = '4';
     
    echo '<ul class="pagination" id="paginacao">'; 
                 
echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag=1" >Primeira</a></li>';
     
    for($i = $pag-$links; $i <= $pag-1; $i++){
        if($i <= 0){
        }else{
            echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag='.$i.'">'.$i.'</a></li>';
        }
    }
     
    echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag='.$i.'">'.$pag.'</a></li>';
     
    for($i = $pag+1; $i <= $pag+$links; $i++){
        if($i > $paginas){
         
        }else{
            echo '<li>
			<a href="index.php?url=pre_cadastro/listapre_cad&pag='.$i.'">'.$i.'</a>
			</li>';
        }
    }          
     echo '<li><a href="index.php?url=pre_cadastro/listapre_cad&pag='.$paginas.'">Última</a></li>';
echo '</ul>';
?>