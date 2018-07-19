<?php

	
$list = new manipulaData();
	
$list2 = new manipulaData();

$list3= new manipulaData();



 


?>

<link rel="stylesheet" type="text/css" href="../bootstrap/css/datatable.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/datatablenet.css">

<div class="container">
	<center><h3>Lista de Estagiários Cadastrados</h3></center>
    
    <form name="frmBusca" method="post" enctype="multipart/form-data" action="index.php?url=remocao/lista_remocao&pag=1" >
   <div class="row">
           <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Pesquisar..." name="palavra"/>
                                <span class="input-group-btn">
                                    <input class="btn btn-danger"  type="submit" >
                                        <span class=" glyphicon glyphicon-search"  value="Buscar" ></span>
                                    </input>
                                </span>
                            </div>
                        </div>
	</div>
</div>
<br><br><br>
</form>
    
	<hr>
	<table  class="table table-striped table-bordered" cellspacing="ss0" width="100%">
		<thead>
			<tr>
				<th class="actions">Ações</th>
				<th>Matricula</th>
				<th>Nome</th>
				<th>Naj</th>
				<th>Data Remoção</th>
			</tr>
		</thead>

		<tbody>
			<?php  
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
  $consulta = $list->get_decresc_srch();
 // }else{
	// $consulta = $list->getPaginacao();
//	 }ss
 $count = mysqli_num_rows($consulta);
 



				while($reg = mysqli_fetch_object($consulta)){ ?>

				<tr>
					<td align="center">
					<a class="btn btn-primary" href="remocao/doc_enca.php?id_cad=<?=$reg->id_cad?>" data-toggle='tooltip' title="Memorando de Encaminhamento" target="_blank"><i class="glyphicon glyphicon-open-file" ></i></a>
						
                    <a class="btn btn-primary" href="remocao/doc_remo.php?id_cad=<?=$reg->id_cad?>" target="_blank" data-toggle='tooltip' title="Memorando de Remoção "><i class="glyphicon glyphicon-list-alt"></i></a>
						<a class="btn btn-success" data-toggle='tooltip' title="Efetuar Novo Encaminhamento" href="index.php?url=remocao/remocao&id_cad=<?=$reg->id_cad?>"><i class="glyphicon glyphicon-plane" ></i></a>
            
					</td>

					<td><?=$reg->matricula?></td>

					<td><?=utf8_encode($reg->nome)?></td>
            
                  <?php 

                    $list->setTable("tb_lotacao");
                    $list->setCampoId("id_cad");
                    $list->setValorId($reg->id_cad);
	                $dados1= $list->getListEditar();
                     $rem = mysqli_fetch_object($dados1); 



                    $list2->setTable("tb_naj");
                    $list2->setCampoId("id_naj");
                     $list2->setValorId($rem->id_naj);
	                $dados2= $list2->getListEditar();
                     $naj = mysqli_fetch_object($dados2); 

	

          ?>
					<td>   <?=utf8_encode($naj->nome)?> </td>
          
					<td>
						
					 <?php 
	
	$list3->setTable("tb_remocao");


	 $list3->setCampoId("id_cad");
     $list3->setValorId($reg->id_cad);
	$dados3= $list3->getListEditar();
	$remocao = mysqli_fetch_object($dados3);

       echo $remocao->data_rem;
	?>


					 </td>
							
				</tr>
			<?php  } ?>
		</tbody>
	</table>
</div>
<?php
$list->setTable("tb_cadastro");

  $list->setDados($palavra);
  $list->setCampos('nome');
    $consulta = $list->getPaginacao();
 $count = mysqli_num_rows($consulta);
 
 
 
    
$paginas = ceil($count/$maximo);
$links = '4';
     
    echo '<ul class="pagination" id="paginacao">'; 
                 
echo '<li><a href="index.php?url=remocao/lista_remocao&pag=1" >Primeira</a></li>';
     
    for($i = $pag-$links; $i <= $pag-1; $i++){
        if($i <= 0){
        }else{
            echo '<li><a href="index.php?url=remocao/lista_remocao&pag='.$i.'">'.$i.'</a></li>';
        }
    }
     
    echo '<li><a href="index.php?url=remocao/lista_remocao&pag='.$i.'">'.$pag.'</a></li>';
     
    for($i = $pag+1; $i <= $pag+$links; $i++){
        if($i > $paginas){
         
        }else{
            echo '<li>
			<a href="index.php?url=remocao/lista_remocao&pag='.$i.'">'.$i.'</a>
			</li>';
        }
    }          
     echo '<li><a href="index.php?url=remocao/lista_remocao&pag='.$paginas.'">Última</a></li>';
echo '</ul>';
?></div>


<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>