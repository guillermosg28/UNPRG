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
                        <li class="active nav-item"><a href="autoridades.php">Autoridades</a></li>
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
                        <li class="nav-item"><a href="postgrado.php">PostGrado</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->


        <!-- ******CONTENIDO****** -->
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Autoridades</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="jobs-wrapper col-md-5">   
                            <div class="panel panel-profile">
                                <div class="panel-body">
                                    <img src="imagenes/autoridades/avatar.jpg" class="img-circle">
                                    <div class="name"><b>M.Sc. Ing. Carlos Pomares Neira</b></div>
                                    <div class="info">Decano</div>
                                </div>
                            </div><!-- panel -->
                        </div><!--item-->

                        <div class="jobs-wrapper col-md-5">   
                            <div class="panel panel-profile">
                                <div class="panel-body">
                                    <img src="imagenes/autoridades/avatar.jpg" class="img-circle">
                                    <div class="name"><b>M.Sc. Ing. Jorge Guerrero Quijano</b></div>
                                    <div class="info">Director de Escuela</div>
                                </div>
                            </div><!-- panel -->
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