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
                        <li class="active nav-item dropdown">
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
                    <h1 class="heading-title pull-left">Ingeniería Zootecnia</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="privacy-wrapper col-md-12">     
                            <div class="page-row">
                                <p class="text-justify">
                                    En la Resolución N° 1198-2014-R del 16 de Julio del 2014, indica que, según el informe contenido en el Oficio N° 055-2014-OCP-OEED, de la Oficina de Escalafón y Evaluación Documentaria, debe procederse a encargar el Decanato hasta la elección del titular, al docente <b>Ing. Carlos Herbert Pomares Neira, M. Sc.</b>, quien cumple con los requisitos establecidos por ley.
Considerando que el mundo enfrenta hoy día la difícil misión de buscar un equilibrio que satisfaga las necesidades de alimento de una población creciente, de manera que se le pueda proveer una mejor dieta y a la vez conservar el medio ambiente, para asegurar así una mejor calidad de vida de las futuras generaciones.
Por lo tanto aprovecho este espacio para hacerles una invitación a integrarse a una institución de prestigio, en donde requerimos jóvenes entusiastas, innovadores, emprendedores y con liderazgo, con capacidad para propiciar e impulsar los cambios que nuestro país y el mundo demandan para hacer frente a las exigencias del sector agroalimentario y de la necesidad de conservar el medio ambiente para contribuir a un desarrollo sostenible.
En nuestra Facultad buscamos jóvenes para transformarlos en profesionistas capaces de demostrar sus capacidades intelectuales en el análisis, síntesis, pensamiento crítico y creatividad para la identificación y solución de problemas, con una visión global del sector agropecuario y del medio ambiente, considerando además los aspectos sociales y económicos que les permita interactuar positivamente con el sector productivo, enfocando su aprendizaje hacia la formación de destrezas, actitudes y habilidades necesarias para el manejo de los sistemas de producción animal y de los recursos naturales.

                                </p> 
                                <h2 class="text-center">¡Bienvenido a la Facultad de Ingeniería Zootecnia!</h2>
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