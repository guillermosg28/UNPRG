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
                        <li class="nav-item"><a href="index.php">Inicio</a></li>
                        <li class="nav-item"><a href="historia.php">Historia</a></li>
                        <li class="nav-item"><a href="autoridades.php">Autoridades</a></li>
                        <li class="nav-item"><a href="docentes.php">Plana docente</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Esc. Profesionales <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="e_zootecnia.php">Esc. Profesional de Zootecnia</a></li>       
                            </ul>
                        </li>
                        <li class="nav-item"><a href="oficinas.php">Oficinas</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Servicios <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="convenios.php">Convenios</a></li>
                                <li><a href="tesis_alumno.php">Tesis de Alumnos</a></li>
                                <li><a href="sistema_academico.php">Sistema Academico</a></li>    
                            </ul>
                        </li>
                        <li class="active nav-item"><a href="postgrado.php">PostGrado</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->


        <!-- ******CONTENIDO****** -->
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Postgrado</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="jobs-wrapper col-md-12">           
                            
                            <!-- POSTGRADO -->
                              
                            <div class="panel panel-default page-row" style="padding: 0 0;">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="job-single.html">SECCION DE POSTGRADO</a></h3>
                                </div>
                                <div class="panel-body">
                                   Resolución N° 275-2014-FIZ/D del 18 de julio del 2014.<br>
                                   Ing. Enrique Gilberto Lozano Alva, M. Sc.<br>
                                   Ing. Bernardo Eliseo Nieto Castellanos, M. Sc.<br>
                                   Ing. Napoleón Corrales Rodríguez, M.Sc.
                                </div>
                            </div><!--//panel-->

                            <div class="panel panel-default page-row" style="padding: 0 0;">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="job-single.html">COMISION DE AUTOEVALUACION Y ACREDITACION</a></h3>
                                </div>
                                <div class="panel-body">
                                   Resolución N° 319-2014-FIZ/D del 18 de agosto del 2014.<br>
                                   <b>Presidente:</b> Ing. Rafael Antonio Guerrero Delgado, M. Sc.<br>
                                   <b>Miembro:</b> Ing. Enrique Gilberto Lozano Alva, M. Sc.<br>
                                   <b>Miembro:</b> Ing. Jorge Artemio Guerrero Quijano, M. Sc.<br>
                                   <b>Miembro:</b> Est. Yamiko Stefany Roque Garnique<br>
                                   <b>Miembro:</b> Graduado Ing. Nancy Pilar Granda Figueroa.</b>
                                </div>
                            </div><!--//panel-->

                            <div class="panel panel-default page-row" style="padding: 0 0;">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="job-single.html">COORDINADOR DE CALIDAD DE LA AUTOEVALUACION Y ACREDITACION</a></h3>
                                </div>
                                <div class="panel-body">
                                   Resolución N° 320-2014-FIZ/D del 18 de Agosto del 2014.<br>
                                   Ing. Jorge Artemio Guerrero Quijano, M. Sc.
                                </div>
                            </div><!--//panel-->

                            <div class="panel panel-default page-row" style="padding: 0 0;">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="job-single.html">COMISION DE GRADOS Y TITULOS</a></h3>
                                </div>
                                <div class="panel-body">
                                   Resolución N° 261-2014-FIZ/D del 16 de julio del 2014.<br>
                                   <b>Presidente:</b> Ing. Salvador Zuloeta Romero<br>
                                   <b>Miembro:</b> Ing. Jorge Artemio Guerrero Quijano, M. Sc.<br>
                                   <b>Miembro:</b> Ing. José Victorino Romero Rentería, M. Sc.
                                </div>
                            </div><!--//panel-->

                    </div><!--//page-row-->

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