<?php
 include_once("../classes/manipulaData.php");


  $visualizar2 = new manipulaData();
  $visualizar2->setTable("tb_cadastro");
  $visualizar2->setCampoId( 'id_cad' );
  $visualizar2->setValorId( $_GET[ 'id_cad' ] );
  $dados5= $visualizar2->getListEditar();
  $reg5 = mysqli_fetch_object( $dados5 );


?>
<head>
<link rel="stylesheet" href="css/historico.css">


<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
             <script
                     src="https://code.jquery.com/jquery-3.3.1.js"
                     integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                     crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <br><br>
  <div class="observacao" style="display: none;" id="conteudo_oab_mostra">
      <legend>Nova Observação</legend>
          <!-- content goes here -->
           <form action="../index.php?url=observacao/acao/crudObs" method="post">
<input type="hidden" name="id_cad" value="<?=$reg5->id_cad?>">

        <div class="row">        
        <div class='col-sm-2'>
            <div class="form-group">
              <label for="">Data da Observação</label>
              <?php  date_default_timezone_set('America/Sao_Paulo'); $data= date("d/m/Y H:i")?> 
                <div class="col-md-16">                    
               <input type="text" class="form-control" disable value="<?php echo $data?>" readonly>                     
                </div>
            </div>
        </div>
    
           </div>
                       

            <div class="row">
             <div class="col-md-6">            
             <div class="form-group">
               <label for="">Nome</label>
               <input type="text" class="form-control"  name="nome" value="<?php echo utf8_encode($reg5->nome)?>">
             </div>
            </div>
           </div>
            


            
            <div class="row">
                 <div class="col-md-6">
             <div class="form-group">
               <label >Observação</label>
               <textarea name="obs" class="form-control"></textarea>
             </div>
            </div>
           </div>
           

       
               

               <div class="btn-group" role="group">
                   <button type="submit" id="saveImage" class="btn btn-success btn-hover-green" data-action="save" role="button"
                   name="txtLocal" value="Cadastrar">Salvar</button>
               </div>
         
       </form>
   <span id="scroll_edit"></span>

</div>

   <div class="container">
    <div class="page-header">
    <h3 id="">Histórico de Observações</h3>
  </div>
  <div id="timeline"><div class="row timeline-movement timeline-movement-top">
    <div class="timeline-badge timeline-future-movement" >

        <a href="#" onclick="mostra_esconde_oab('mostra');" >
            <span class="glyphicon glyphicon-plus" ></span>
        </a>
    </div>
    <div class="timeline-badge timeline-filter-movement">
        <a href="#">
            <span class="glyphicon glyphicon-time"></span>
        </a>
    </div>

</div>

<?php 

$obs1 = new manipulaData();
$obs1->setTable("tb_obs");
$obs1->setCampoId("id_cad");
$obs1->setValorId($reg5->id_cad." order by id_obs DESC");
$obs2 = $obs1->getListEditar();

$contador = 0;
 ?>



<?php while ($obs = mysqli_fetch_object($obs2)) {
$data = explode("/",  $obs->data);  

  ?>

<div class="row timeline-movement" >

    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"><i class="  glyphicon glyphicon-calendar"></i></span> 
    </div>

<!-- item à esquerda -->
 <?php if ($contador == 0) {?>  
    <div class="col-sm-6  timeline-item " >
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits">
                    <ul class="timeline-panel-ul">
                        <!--<li><span class="causale"> <h4>Observações Gerais</h4></span></li>-->
                        <li><textarea class="teste" ><?php echo utf8_encode($obs->obs)?></textarea> </li> <br>
                        <li><p><span class="text-muted"><i class="glyphicon glyphicon-time"></i><?=$data = implode('.', $data)?></span></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<?php $contador = 1;} 
else {?>

<!-- item à direita -->
    <div class="col-sm-6  timeline-item" >
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <!--<li><span class="causale"> <h4>Observações Gerais</h4></span></li>-->
                        <li><textarea class="teste "  ><?php echo utf8_encode($obs->obs)?></textarea> </li> <br>
                        <li><p><span class="text-muted"><i class="glyphicon glyphicon-time"></i><?=$data = implode('.', $data)?></span></p> </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>    
</div>
<?php $contador = 0;} ?>

<?php  } ?>

<!--due -->


</div>
</div>

   </div>



     <script>
$(document).ready(function() {
   $('#example').DataTable();
} );
</script>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</div>

<script type="text/javascript">
  
  function mostra_esconde_oab(valor){

        if(valor=='mostra'){
            $('#conteudo_oab_mostra').fadeIn(400);
            setTimein(function () {
                $('#conteudo_oab_mostra').show();
            }, 500);
        }else{
            $('#conteudo_oab_mostra').fadeOut(400);
            setTimeout(function () {
                $('#conteudo_oab_mostra').hide();
            }, 500);
        }


}
</script>

