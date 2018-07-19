<?php 
$list = new manipulaData();
$list->setTable("tb_cadastro");
$list->setCampoId("id_situacao");
$list->setValorId(1);
$list1 = $list->getLF1();
$reg = mysqli_fetch_object( $list1);

$list1 = new manipulaData();
$list1->setTable("tb_remocao");
$list1->setCampos("id_remocao");
$list11 = $list1->getLF();
$reg2 = mysqli_fetch_object( $list11);

$list123 = new manipulaData();
$list123->setTable("tb_obs");
$list123->setCampos("id_obs");
$list1123 = $list123->getLF();
$reg223 = mysqli_fetch_object( $list1123);

$list12 = new manipulaData();
$list12->setTable("tb_usuario");
$list12->setCampos("id_usuario");
$list112 = $list12->getLF();
$reg22 = mysqli_fetch_object( $list112);


 ?>

<head>
    <!-- Layout Novo Salim -->
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">


    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers1.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select21.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/hover.css" rel="stylesheet" media="all">
</head>

                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                
                                <div class="overview-item overview-item--c1" >
                                    <div class="overview__inner">
                                        <a href="index.php?url=pre_cadastro/listapre_cad" class="hvr-grow">
                                        <div class="overview-box clearfix hvr-icon">
                                            <div class="icon" >
                                                <i class="zmdi zmdi-accounts-alt" ></i>
                                            </div><br>
                                            <div class="text">
                                                <h2><?php echo $reg->ativos?></h2>
                                                <span>Estagiário/Colaborador</span>
                                            </div>
                                        </div>
                                    </a>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <a href="https://app.powerbi.com/view?r=eyJrIjoiNzE0NWEwYTAtODUzZS00MmQ2LWEyMDktZWVhM2Y5NGZmN2M4IiwidCI6ImZhMzVkNzcxLTE2N2MtNGVmNi04MTExLWFiYWUzZjU2NzU5ZCJ9" class="hvr-grow">
                                        <div class="overview-box clearfix hvr-icon">
                                            <div class="icon">
                                                <i class="zmdi zmdi-file-plus"></i>
                                            </div><br>
                                            <div class="text">
                                                <h2><?php echo $reg223->id_obs?></h2>
                                                <span>Relatorios Gerais</span>
                                            </div>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <a href="index.php?url=remocao/lista_remocao&pag=1" class="hvr-grow">
                                        <div class="overview-box clearfix hvr-icon">
                                            <div class="icon">
                                                <i class="zmdi zmdi-walk"></i>
                                            </div><br>
                                            <div class="text">
                                                <h2><?php echo $reg2->id_remocao ?></h2>
                                                <span>Encaminhamento</span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <a href="index.php?url=usuario/listar_usuario" class="hvr-grow">
                                        <div class="overview-box clearfix hvr-icon">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-add" ></i>
                                            </div><br>
                                            <div class="text">
                                                <h2><?php echo $reg22->id_usuario ?></h2>
                                                <span>Usuários</span>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>

<!-- Layout Novo -->
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select21.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main1.js"></script>

<script>
    var contador=0;
   function encolhe_fonte() {
       if(contador%2==0){
           $(".ssb-title").animate({
               fontSize: "90%"
           })
       }else{
           $(".ssb-title").animate({
               fontSize: "120%"
           })
       }
       contador++;

   }

</script>

<script>
  
</script>

