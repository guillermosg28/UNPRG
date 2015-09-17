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
                        <li class="active nav-item"><a href="historia">Historia</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Servicios <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="convenios">Convenios</a></li>
                                <li><a href="tesis_alumno">Tesis de Alumnos</a></li>
                                <li><a href="sistema_academico">Sistema Academico</a></li>  
                            </ul>
                        </li>
                        <li class="nav-item"><a href="docentes">Plana docente</a></li>
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
                    <h1 class="heading-title pull-left">Historia</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="privacy-wrapper col-md-12">     
                            <div class="page-row">
                                <p class="text-justify">
                                    Por Ley N° 14681 del 22 de Octubre de 1963 se eleva a la categoría de Universidad, la ex Escuela Nacional de Agronomía de Lambayeque, con el nombre de UNIVERSIDAD AGRARIA DEL NORTE.
Que, para cumplir con sus actividades académicas, la Universidad Agraria del Norte debe organizar las Facultades que imparten las disciplinas de las ciencias aplicadas para las profesiones de agricultura y ganadería y las ciencias básicas afines a ambas.
Por Resolución N° 3 del 24 de diciembre de 1963, la Universidad Agraria del Norte, resolvió crear a partir del 1 de enero de 1964, como organismos de la Universidad Agraria del Norte, de Lambayeque, las Facultades de CIENCIAS, de AGRONOMIA y ZOOTECNIA. En la misma resolución indica que debe procederse a la elección de las siguientes autoridades Universitarias: a) Decano de la Facultad de Ciencias, b) Decano de la Facultad de Agronomía y c) Decano de la Facultad de Zootecnia. Las autoridades elegidas entrarán en funciones a partir del 1 de Enero de 1964.
Por Resolución N° 213-1966 del 23 de Noviembre de 1966 de la Universidad Agraria del Norte, se indica que por Resolución Rectoral N° 31 del 21 de Mayo de 1964 se nombró una Comisión Organizadora de la Facultad de Zootecnia presidida por el Ing. Enrique Vásquez Guzmán e integrada por el Dr. Enrique Arbaiza Fernández y el Ing. Constante Rubiños Rubio. 
La Resolución N° 7-1967 del 18 de Enero de 1967 de la Universidad Agraria del Norte, considera que la Comisión Organizadora de la Facultad de Zootecnia, ha terminado sus funciones, al haber entregado el Proyecto de Organización General de la Facultad, se resuelve crear el Organismo que dirija el funcionamiento de la Facultad de Zootecnia con los siete miembros siguientes: Decano de la Facultad de Ciencias, Decano de la Facultad de Agronomía, Director del Instituto de Investigación, Profesores de Zootecnia Ingenieros: Enrique Vásquez Guzmán y Constante Rubiños Rubio y dos Delegados Estudiantiles, miembros del Consejo Universitario.
Por Resolución N° 130-1969 del 23 de Abril de 1969 se resuelve crear el Departamento de Zootecnia.
La Resolución N° 005-2003-AU del 16 de Abril del 2003 la Universidad Nacional Pedro Ruiz Gallo, que por acuerdo de la sesión de fecha 15 de Abril del 2003, la Asamblea Universitaria acordó por unanimidad modificar el nombre a  FACULTAD DE INGENIERIA ZOOTECNIA con la ESCUELA PROFESIONAL DE INGENIERIA ZOOTECNIA. 
                                </p> 
                                <a class="prettyphoto" rel="prettyPhoto[gallery]" title="Facultad de Zootecnia" href="imagenes/historia.jpg"><img class="img-responsive center-block" src="imagenes/historia.jpg"></a>
                            </div>
                        </div><!--//privacy-wrapper-->
                      
                    </div><!--//page-row-->
                </div><!--//page-content-->
                
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