<?php
	session_start();
	error_reporting(0);
	$varsesion = $_SESSION['usuario'];

	if($varsesion == null || $varsesion = ''){
		echo 'Usted no tiene autorizacion';
        header("Refresh:3; url=index.php");
		die();
	}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- SCRIPT PARA EVITAR EL CACHE Y BOTON ATRAS-->
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <script type="text/javascript">
        if (history.forward(1)) {
            location.replace(history.forward(1));
        }

    </script>

    <!-- FIN DEL SCRIPT CACHE Y BOTON ATRAS-->
    <title>Panel Estadisticas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <div class="main-content">
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Panel</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="panel.php">Proyecto</a></li>
                                <li><span>Fotografia</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                <?php echo $_SESSION['usuario'] ?>
                                <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <!--<a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>-->
                                <a class="dropdown-item" href="cerrarSesion.php">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- Statistics area start -->
                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Fotografia</h4>
                                <video id="video"></video>
                                <br>
                                <center>
                                    <button id="boton" class="btn btn-info btn-lg btn-block">Tomar foto</button>
                                </center>
                                <p id="estado"></p>
                                <canvas id="canvas" style="display: none;"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics area end -->
                    <!-- Advertising area start -->
                    <div class="col-lg-4 mt-5">
                        <div class="card h-full">
                            <div class="card-body">
                                <h4 class="header-title">Ultima Imagen</h4>
                                <?php
                                //GUARDAR URL EN MYSQPL
                                //include("conex.php");
                                $con=mysqli_connect('localhost','root','','foto') or die("Problemas al conectar la base de datos");

                                $query = "SELECT Foto1 FROM fotos ORDER BY id DESC LIMIT 1";

                                $resultado = mysqli_query($con, $query) or die ("Problema conectando con la bd");

                                //echo "<img src='./".$resultado."' border='0' width='300' height='100'>";

                                while ($fila=mysqli_fetch_array($resultado)) {

                                        $ruta_img=$fila["Foto1"];
                                    }

                                echo "<img src='./".$ruta_img."ng' border='0' >";  
                                //header("Refresh:3; url=panel.php");
                                //FIN GUARDAR FOTO MYSQL
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Advertising area end -->
                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018 . All right reserved</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- start amcharts -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- all bar chart -->
    <script src="assets/js/bar-chart.js"></script>
    <!-- all map chart -->
    <script src="assets/js/maps.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
<script src="script.js"></script>
</html>
