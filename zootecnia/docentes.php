<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->  
<head>
<?php
@include_once("html/head.php");
?>
</head>

<body class="home-page">

    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
<?php
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
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Servicios <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="convenios">Convenios</a></li> 
                                <li><a href="tesis_alumno">Tesis de Alumnos</a></li>
                                <li><a href="sistema_academico">Sistema Academico</a></li> 
                            </ul>
                        </li>
                        <li class="active nav-item"><a href="docentes">Plana docente</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Esc. Profesionales <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="e_zootecnia">Esc. Profesional de Zootecnia</a></li>       
                            </ul>
                        </li>
                        <li class="nav-item"><a href="oficinas">Oficinas</a></li>
                        <li class="nav-item"><a href="laboratorio">Laboratorio</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->


        <!-- ******CONTENIDO****** -->
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Plana Docente</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row highlights">   

                        <div class="col-md-4" style="padding-bottom: 30px;">   
                            <div class="span3">
                                <div class="hl-circle12" ><img class="hl-icon2" src="imagenes/docentes/avatar.jpg"></div>
                                <div class="highlights-content botonrojo">
                                    <h4>Nombres y Apellidos</h4>
                                    Estudio 1<br>
                                    Estudio 2
                                </div>
                            </div>
                        </div><!--item-->

                        <div class="col-md-4" style="padding-bottom: 30px;">   
                            <div class="span3">
                                <div class="hl-circle12" ><img class="hl-icon2" src="imagenes/docentes/avatar.jpg"></div>
                                <div class="highlights-content botonrojo">
                                    <h4>Nombres y Apellidos</h4>
                                    Estudio 1<br>
                                    Estudio 2
                                </div>
                            </div>
                        </div><!--item-->

                        <div class="col-md-4" style="padding-bottom: 30px;">   
                            <div class="span3">
                                <div class="hl-circle12" ><img class="hl-icon2" src="imagenes/docentes/avatar.jpg"></div>
                                <div class="highlights-content botonrojo">
                                    <h4>Nombres y Apellidos</h4>
                                    Estudio 1<br>
                                    Estudio 2
                                </div>
                            </div>
                        </div><!--item-->
                        <div class="col-md-4" style="padding-bottom: 30px;">   
                            <div class="span3">
                                <div class="hl-circle12" ><img class="hl-icon2" src="imagenes/docentes/avatar.jpg"></div>
                                <div class="highlights-content botonrojo">
                                    <h4>Nombres y Apellidos</h4>
                                    Estudio 1<br>
                                    Estudio 2
                                </div>
                            </div>
                        </div><!--item-->

                    </div><!--//page-content-->
                </div> 
            </div><!--//page--> 

        </div> <!-- fin container-->
    </div> <!-- fin wrapper -->


<!-- ******FOOTER****** --> 
    <footer class="footer">
<?php
@include_once("html/footer.php");
?>
    </footer><!--//footer-->

    <!-- Javascript -->          
<?php
@include_once("html/js.php");
?>
</body>
</html>