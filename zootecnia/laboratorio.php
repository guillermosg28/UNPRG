<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->  
<head>
<?
@include_once("html/head.php");
?>
</head>

<body class="home-page">

    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
<?
@include_once("html/header.php");
?>
        </header><!--//header-->


        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a href="index">Inicio</a></li>
                        <li class="nav-item"><a href="autoridades">Autoridades</a></li>
                        <li class="nav-item"><a href="historia">Historia</a></li>
                        <li class="nav-item"><a href="convenios">Convenios</a></li>
                        <li class="nav-item"><a href="#">TESIS DE ALUMNOS</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Esc. Profesionales <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="e_zootecnia">Esc. Profesional de Zootecnia</a></li>       
                            </ul>
                        </li>
                        <li class="nav-item"><a href="oficinas">Oficinas</a></li>
                        <li class="active nav-item"><a href="laboratorio">Laboratorio</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->


        <!-- ******CONTENIDO****** -->
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Laboratorio</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="privacy-wrapper col-md-12">     
                            <div class="page-row">
                                <p class="text-justify">
                                    <b>Laboratorio de Nutrición:</b> Brinda el servicio de analisis varios a diferentes empresas y publico en general dar  clic en enlase.<br>
                                    <b>Laboratorio de Lecheria:</b><br>
                                    <b>Unidad Lacteos:</b><br>
                                    <b>Laboratorio de Productos Carnicos:</b><br>
                                    <b>Centro de Computo:</b>
                                </p>
                            </div>
                        </div><!--//privacy-wrapper-->
                      
                    </div><!--//page-row-->
                </div><!--//page-content-->
                
            </div><!--//page--> 

        </div> <!-- fin container-->
    </div> <!-- fin wrapper -->


<!-- ******FOOTER****** --> 
    <footer class="footer">
<?
@include_once("html/footer.php");
?>
    </footer><!--//footer-->

    <!-- Javascript -->          
<?
@include_once("html/js.php");
?>
</body>
</html> 