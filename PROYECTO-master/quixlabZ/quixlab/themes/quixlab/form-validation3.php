<?php
     require("connect_db.php");
     

      $query1 = "SELECT nombre,id from gamers";
      $result1 = mysqli_query($link, $query1);
      date_default_timezone_set("America/Monterrey");
   
      $query3 = "SELECT c.id, p.nombre, p.costo_por_hora, p.costo_en_monedas from consolas c inner join plataformas p on c.id_plataforma = p.id ";
      $result3 = mysqli_query($link, $query3);

        $query4 = "SELECT id,nombre from accesorios";
      $result4 = mysqli_query($link, $query4);


        $query5 = "SELECT id from consolas";
      $result5 = mysqli_query($link, $query5);

?>

       

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            
                        </div>
                        
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    
                                    
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span></span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                   
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        <li><a href="page-login.php"><i class="icon-key"></i> <span>Cerrar Sesion</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
       <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Inicio</li>
                    <li>
                       
                    </li>
                    <li class="mega-menu mega-menu-sm">
                       
                    </li>
                    <li class="nav-label">LISTADOS</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Consolas</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index2.php">Listado de Consolas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i> <span class="nav-text">Listado de Jugadores</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./index3.php">Listado de Jugadores</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Enviar Correo a Gamers</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Enviar Correo</span>
                        </a>
                        <ul aria-expanded="false">
                                                      <li><a href="./email-compose.php">Enviar Correo</a></li>
                        </ul>
                    </li>
                    <li>
                        
                   
                    <li class="nav-label">Registrar</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Jugador</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation.php">Registro de Jugador</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Consola</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation2.php">Registro de Consola</a></li>
                            
                        </ul>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Registrar Renta</span>
                        </a>
                        <ul aria-expanded="false">
                           
                            <li><a href="./form-validation3.php">Registro de Renta</a></li>
                            
                        </ul>
                    </li>

                   

            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="insertarGrupo.php" method="POST">
                                        

                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Jugador <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-jugador" name="val-jugador"  onchange="obtenerID()">
                                                <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                                    <option value="<?php echo $row1[1];?>" ><?php echo $row1[0];?></option>
                                                    

                                                    <?php 
                                                      //  $var = $row1[1]; 
                                                       // echo "vaaar" . $var;
                                                        endwhile;?>
                                               
                                                </select>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-4 csol-form-label" for="val-username">Monedas <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">

                                                <?php 
                                             /*   if(isset($_POST["val-jugador"])){
                                                      $var = $row
                                                      echo $var . "if";
                                                  //    echo "if"
                                                }
                                               

                                                    $query2 = "SELECT monedas from gamers where id=".$var.";";
                                                    echo $var;
                                                    echo $query2;
                                                    $result2 = mysqli_query($link, $query2);
                                                



                                                    */ ?>
      
                                                <?php //while($row2 = mysqli_fetch_array($result2)):;?>

                                                    
                                                     <input type="text" class="form-control" id="val-monedas" name="val-monedas" placeholder="" value="<?php //echo $row2[0];?>" disabled="true" >

                                                  <?php //endwhile;?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Fecha <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="val-fecha" name="val-fecha" value="<?php echo date('Y-m-d'); ?>">
                                            </div>
                                        </div>



                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Hora <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="" name="" value="<?php echo date("H:i:s");?>">
                                            </div>
                                        </div>

                                            
                                          <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Consola <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-consola" name="val-consola"  onchange="obtenerID2()">
                                                <?php while($row5 = mysqli_fetch_array($result5)):;?>

                                                    <option value="<?php echo $row5[0];?>" ><?php echo $row5[0];?></option>
                                                    

                                                    <?php 
                                                      //  $var = $row1[1]; 
                                                       // echo "vaaar" . $var;
                                                        endwhile;?>
                                               
                                                </select>
                                            </div>
                                        </div>

                                         
                                         <div class="form-group row">
                                            <label class="col-lg-4 csol-form-label" for="val-username">Plataforma de Consola <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">

                                                <?php 
                                             /*   if(isset($_POST["val-jugador"])){
                                                      $var = $row
                                                      echo $var . "if";
                                                  //    echo "if"
                                                }
                                               

                                                    $query2 = "SELECT monedas from gamers where id=".$var.";";
                                                    echo $var;
                                                    echo $query2;
                                                    $result2 = mysqli_query($link, $query2);
                                                



                                                    */ ?>
      
                                                <?php //while($row2 = mysqli_fetch_array($result2)):;?>

                                                    
                                                     <input type="text" class="form-control" id="val-plataforma" name="val-plataforma" placeholder="" value="<?php //echo $row2[0];?>" >

                                                  <?php //endwhile;?>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Horas a Rentar <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="hora" name="hora" placeholder="">
                                            </div>
                                        </div>

                                        

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Precio por Hora<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="precio1" name="val-precioC" placeholder="">
                                            </div>
                                        </div>

                                        <!--div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Juego <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-juego" name="val-juego" placeholder="">
                                            </div>
                                        </div-->


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Juego <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                



                                                <input type="text" class="form-control" id="val-juego" name="val-juego" placeholder="" value="<?php //echo $row2[0];?>"  >

                                                  <?php //endwhile;?>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Accesorios <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-accesorios" name="val-accesorios">
                                                <?php while($row4 = mysqli_fetch_array($result4)):;?>

                                                    <option value="<?php echo $row4[1];?>"><?php echo $row4[1];?></option>

                                                    <?php endwhile;?>
                                               
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 csol-form-label" for="val-username">Precio <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="precio2" name="val-precio" placeholder="">
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-lg-4 csol-form-label" for="val-username">Descripción <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="textarea_editor form-control bg-light" rows="10" placeholder="Descripcion ..." name="val-descripcion"></textarea>
                                            </div>
                                        </div>
                                       
                                       
                                    

                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Total <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="total" name="val-total" placeholder="">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Monedas a Acumular <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-monedasA" name="val-monedasA" placeholder="">
                                            </div>
                                        </div>
                                           



                                       
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Registrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/codigo-formValidation.js"></script>
    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>
    <script src="js/codigoFV.js"></script>
    <!--script src="js/codigoFV2.js"></script-->




</body>

</html>