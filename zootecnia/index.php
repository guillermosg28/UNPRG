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
                        <li class="active nav-item"><a href="index.php">Inicio</a></li>
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
                        <li class="nav-item"><a href="postgrado.php">PostGrado</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->


        <!-- ******CONTENIDO****** -->
        <div class="content container">
            <div class="row cols-wrapper">

                <div class="col-md-sli col-sm-12 col-xs-12">

                    <div id="promo-slider" class="slider flexslider">
                        <ul class="slides">
                            <li>
                                <img src="imagenes/slider/1.jpg"  alt="" />
                                <p class="flex-caption">
                                    <span class="secondary clearfix" >CHARLAS EN MORROPE</span>
                                </p>
                            </li>
                            <li>
                                <img src="imagenes/slider/2.jpg"  alt="" />
                                <p class="flex-caption">
                                    <span class="secondary clearfix" >ANIVERSARIO UNPRG</span>
                                </p>
                            </li>
                            <li>
                                <img src="imagenes/slider/3.jpg"  alt="" />
                                <p class="flex-caption">
                                    <span class="secondary clearfix" >SEMANA CACHIMBOS</span>
                                </p>
                            </li>
                            <li>
                                <img src="imagenes/slider/4.jpg"  alt="" />
                                <p class="flex-caption">
                                    <span class="secondary clearfix" >RUMBO A LA ACREDITACION</span>
                                </p>
                            </li>
                        </ul><!--//slides-->
                    </div><!--//flexslider-->

                    </div>

                    <div class="col-md-no col-sm-12 col-xs-12">
                        <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line">Noticias</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#noticias-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#noticias-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content medidacuadro">
                            <div id="noticias-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner" style="height:260px;">

                                    <div class="item active">
                                        <div class="item active">
                                            <img class="img-responsive center-block" src="imagenes/avisos/1.jpg">
                                        </div>

                                    </div><!--//item-->

                                    <div class="item">
                                        <div class="item active">
                                            <img class="img-responsive center-block" src="imagenes/avisos/2.jpg">
                                        </div>
                                    </div><!--//item-->

                                    <div class="item">
                                        <div class="item active">
                                            <img class="img-responsive center-block" src="imagenes/avisos/3.jpg">
                                        </div>
                                    </div><!--//item-->

                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->

                        </div><!--//section-content-->
                    </section>
                    </div>

                    <div class="col-md-12" style="padding-right:0px;padding-left:0px;">
                    
                    <section style="background:#fff;">
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="admision">
                                <a href="#"></a>
                                <img src="imagenes/botones/admision.jpg" class="img-responsive">
                                <div class="pricing-table-header-tiny">
                                <div class="menuprincipal">ADMISION</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="cpu">
                                <a href="#"></a>
                                <img src="imagenes/botones/cpu.jpg" class="img-responsive">
                                <div class="pricing-table-header-small">
                                <div class="menuprincipal">CPU</div>
                            </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="pregrado">
                                <a href="#"></a>
                                <img src="imagenes/botones/pregrado.jpg" class="img-responsive">
                                <div class="pricing-table-header-medium">
                                <div class="menuprincipal">PRE GRADO</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="postgrado">
                                <a href="#"></a>
                                <img src="imagenes/botones/postgrado.jpg" class="img-responsive">
                                <div class="pricing-table-header-pro">
                                    <div class="menuprincipal">POST GRADO</div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>

            <!-- FIN SLIDER Y MENU-->

            <div class="row cols-wrapper">

                <div class="col-md-3">

                    <section class="links">
                        <a href="sistema_academico.php" class="btn btn-warning btn-block btn-lg" rel="tooltip" data-placement="right" title="Registro de Notas Matrículas, Historial Académico"><i class="fa fa-university"></i> Sistema Academico</a>
                        <br>
                        <button type="button" class="btn btn-info btn-block btn-lg" rel="tooltip" data-placement="right" title="Sistema de Investigación Docente"><i class="fa fa-lightbulb-o"></i> Selgestiun</button>
                    </section>

                    <section class="links line-sub">
                        <h1 class="section-heading text-highlight"><span class="line">Servicios</span></h1>
                        <div class="section-content">
                            <p><a href="#" rel="tooltip" data-placement="right" title="Aula Virtual Para Alumnos y Docentes de la UNPRG"><i class="fa fa-graduation-cap"></i> Aula Virtual</a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Blog de Docentes Para Docentes de la UNPRG"><i class="fa fa-book"></i> Blog de Docentes</a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Oferta de Empleos Para Alumnos y Egresados"><i class="fa fa-users"></i> Oferta de Empleos</a></p>
                        </div>
                    </section>

                    <section class="events line-sub">
                        <h1 class="section-heading text-highlight"><span class="line">Agenda</span></h1>
                        <div class="section-content">
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">SEP</span>
                                    <span class="date-number">18</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Conferencia 1</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>10:00am - 1:00pm</p>
                                    <p class="location"><i class="fa fa-map-marker"></i>Auditorio UNPRG</p>                            
                                </div><!--//details-->
                            </div><!--event-item-->  
                            <div class="event-item">
                                <p class="date-label">
                                    <span class="month">SEP</span>
                                    <span class="date-number">25</span>
                                </p>
                                <div class="details">
                                    <h2 class="title">Conferencia 2</h2>
                                    <p class="time"><i class="fa fa-clock-o"></i>8:00am - 10:ampm</p>
                                    <p class="location"><i class="fa fa-map-marker"></i>Auditorio FICSA</p>                            
                                </div>
                            </div>
                    </section>

                    <section class="links" style="background:#fff;">
                        <h1 class="section-heading text-highlight"><span class="line">Otros enlaces</span></h1>
                        <div class="section-content">
                            <p><a href="#" rel="tooltip" data-placement="right" title="Concytec"><img class="img-responsive center-block" src="imagenes/interes/concytec.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Asociación de Estudiantes Investigadores"><img class="img-responsive center-block" src="imagenes/interes/aeinv.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Acceso Libre a Informacion Cientifica para la Innovacion"><img class="img-responsive center-block" src="imagenes/interes/alicia.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Science Direct"><img class="img-responsive center-block" src="imagenes/interes/sciencedirect.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Scopus"><img class="img-responsive center-block" src="imagenes/interes/scopus.png"></a></p>
                        </div>
                    </section>

                </div><!--//col-md-3-->

                <div class="col-md-6">
                    <section class="course-finder">
                        <div class="page-wrapper">
                            <header class="page-heading clearfix">
                                <h1 class="section-heading text-highlight"><span class="line">IDIPSA</span></h1>
                            </header> 

                            <div class="page-content">
                                <div class="row page-row">
                                    <div class="news-wrapper col-md-12 col-sm-12">
                                        <article class="news-item page-row has-divider clearfix row">
                                            <figure class="thumb col-md-6 col-sm-4 col-xs-4">
                                                <img class="img-responsive" src="imagenes/menu-centro/idipsa.jpg" alt="" />
                                            </figure>
                                            <div class="details col-md-6 col-sm-8 col-xs-8">
                                                <p>El Dr. Agustín Ramos García, Rector de la Universidad Nacional Pedro Ruiz Gallo, Decanos de las Facultades de Medicina, Enfermería y ...</p>
                                                <a class="btn btn-default btn-sm read-more" href="#">Mas detalles</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="course-finder">
                        <div class="page-wrapper">
                            <header class="page-heading clearfix">
                                <h1 class="section-heading text-highlight"><span class="line">Convenios</span></h1>
                            </header> 

                            <div class="page-content">
                                <div class="row page-row">
                                    <div class="news-wrapper col-md-12 col-sm-12">
                                        <article class="news-item page-row has-divider clearfix row">
                                            <figure class="thumb col-md-6 col-sm-4 col-xs-4">
                                                <img class="img-responsive" src="imagenes/menu-centro/convenios.jpg" alt="" />
                                            </figure>
                                            <div class="details col-md-6 col-sm-8 col-xs-8">
                                                <p>La Universidad Nacional Pedro Ruiz Gallo, con el objetivo de responder a los nuevos retos que nos plantea el siglo XXI, la ...</p>
                                                <a class="btn btn-default btn-sm read-more" href="convenios.php">Mas detalles</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="course-finder">
                        <div class="page-wrapper">
                            <header class="page-heading clearfix">
                                <h1 class="section-heading text-highlight"><span class="line">Bienestar Universitario</span></h1>
                            </header> 

                            <div class="page-content">
                                <div class="row page-row">
                                    <div class="news-wrapper col-md-12 col-sm-12">
                                        <article class="news-item page-row has-divider clearfix row">
                                            <figure class="thumb col-md-6 col-sm-4 col-xs-4">
                                                <img class="img-responsive" src="imagenes/menu-centro/bienestar.jpg" alt="" />
                                            </figure>
                                            <div class="details col-md-6 col-sm-8 col-xs-8">
                                                <p>La oficina Central de Bienestar Universitario (OCBU) liderada por la ingeniero María Julia Jaramillo Carrión, cumple los objetivos ...</p>
                                                <a class="btn btn-default btn-sm read-more" href="#">Mas detalles</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="course-finder">
                        <div class="page-wrapper">
                            <header class="page-heading clearfix">
                                <h1 class="section-heading text-highlight"><span class="line">Convenios</span></h1>
                            </header> 

                            <div class="page-content">
                                <div class="row page-row">
                                    <div class="news-wrapper col-md-12 col-sm-12">
                                        <article class="news-item page-row has-divider clearfix row">
                                            <figure class="thumb col-md-6 col-sm-4 col-xs-4">
                                                <img class="img-responsive" src="imagenes/menu-centro/convenios.jpg" alt="" />
                                            </figure>
                                            <div class="details col-md-6 col-sm-8 col-xs-8">
                                                <p>La Universidad Nacional Pedro Ruiz Gallo, con el objetivo de responder a los nuevos retos que nos plantea el siglo XXI, la ...</p>
                                                <a class="btn btn-default btn-sm read-more" href="convenios.php">Mas detalles</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="course-finder">
                        <div class="page-wrapper">
                            <header class="page-heading clearfix">
                                <h1 class="section-heading text-highlight"><span class="line">Bienestar Universitario</span></h1>
                            </header> 

                            <div class="page-content">
                                <div class="row page-row">
                                    <div class="news-wrapper col-md-12 col-sm-12">
                                        <article class="news-item page-row has-divider clearfix row">
                                            <figure class="thumb col-md-6 col-sm-4 col-xs-4">
                                                <img class="img-responsive" src="imagenes/menu-centro/bienestar.jpg" alt="" />
                                            </figure>
                                            <div class="details col-md-6 col-sm-8 col-xs-8">
                                                <p>La oficina Central de Bienestar Universitario (OCBU) liderada por la ingeniero María Julia Jaramillo Carrión, cumple los objetivos ...</p>
                                                <a class="btn btn-default btn-sm read-more" href="#">Mas detalles</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div><!--//col-md-6-->

                <div class="col-md-3">

                    <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line"> Galerias</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner" style="height:240px;">

                                    <div class="item active">
                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                                <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                                <div class="desc">
                                                    <h5><small><a href="#">Acreditacion</a></small></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                                <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                                <div class="desc">
                                                    <h5><small><a href="#">Aniverario UNPRG</a></small></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                                <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                                <div class="desc">
                                                    <h5><small><a href="#">Bienvenida Cachimbo</a></small></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                             <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                             <div class="desc">
                                                <h5><small><a href="#">Deportes</a></small></h5>
                                            </div>
                                        </div>
                                    </div>

                                    </div><!--//item-->

                                    <div class="item">
                                        
                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                                <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                                <div class="desc">
                                                    <h5><small><a href="#">Filial</a></small></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                                <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                                <div class="desc">
                                                    <h5><small><a href="#">Izamiento</a></small></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                                <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                                <div class="desc">
                                                    <h5><small><a href="#">Charlas en Morrope</a></small></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-6 text-center">
                                            <div class="album-cover">
                                             <a href="#"><img class="img-responsive center-block" src="imagenes/galeria/foto.png" alt="" /></a>
                                             <div class="desc">
                                                <h5><small><a href="#">Navidad 2014</a></small></h5>
                                            </div>
                                        </div>
                                    </div>
                                    </div><!--//item-->
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                            <br>
                           <a class="read-more text-right" target="_black" href="https://www.youtube.com/user/canalunprg"> <small><i class="fa fa-video-camera"></i></small> Mas fotos</a>
                        </div><!--//section-content-->
                    </section>

                    <section class="links">
                        <button type="button" class="btn btn-danger btn-block btn-lg" rel="tooltip" data-placement="right" title="Directorio Telefonico"><i class="fa fa-phone"></i> Directorio Telefonico</button>
                    </section>

                    <section class="links" style="background:#fff;">
                        <h1 class="section-heading text-highlight"><span class="line">Otros enlaces</span></h1>
                        <div class="section-content">
                            <p><a href="#" rel="tooltip" data-placement="right" title="Concytec"><img class="img-responsive center-block" src="imagenes/interes/concytec.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Asociación de Estudiantes Investigadores"><img class="img-responsive center-block" src="imagenes/interes/aeinv.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Acceso Libre a Informacion Cientifica para la Innovacion"><img class="img-responsive center-block" src="imagenes/interes/alicia.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Science Direct"><img class="img-responsive center-block" src="imagenes/interes/sciencedirect.png"></a></p>
                            <p><a href="#" rel="tooltip" data-placement="right" title="Scopus"><img class="img-responsive center-block" src="imagenes/interes/scopus.png"></a></p>
                        </div>
                    </section>

                </div><!--//col-md-3-->

            </div><!-- fin cols-wrapper-->

            <section class="awards">
                <div id="awards-carousel" class="awards-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="logos">
                                <li class="col-md-2 col-sm-2 col-xs-6">
                                    <h5 class="linea-sub">I.E. PEDRO RUIZ G.</h5>
                                    <a href="#" rel="tooltip" data-placement="right" title="Institucion Educativa Pedro Ruiz Gallo"><img class="img-responsive" src="imagenes/enlaces/ieprg.png"/></a>
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-6">
                                    <h5 class="linea-sub">PASTORAL UNIV.</h5>
                                    <a href="#" rel="tooltip" data-placement="right" title="Patoral Universitario"><img class="img-responsive" src="imagenes/enlaces/pastoral.png"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-6">
                                    <h5 class="linea-sub">FEDERACIÓN DOC.</h5>
                                    <a href="#" rel="tooltip" data-placement="right" title="Federacion de Docentes"><img class="img-responsive" src="imagenes/enlaces/fedurg.png"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-6">
                                    <h5 class="linea-sub">SINDICATO UNPRG</h5>
                                    <a href="#" rel="tooltip" data-placement="right" title="Sindicato UNPRG"><img class="img-responsive" src="imagenes/enlaces/sindicato.png"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-6">
                                    <h5 class="linea-sub">ASAM. ESTATUTARIA</h5>
                                    <a href="#" rel="tooltip" data-placement="right" title="Asamblea Estatutaria"><img class="img-responsive" src="imagenes/enlaces/asamblea.png"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-sm-2 col-xs-6">
                                    <h5 class="linea-sub">GALERIA DE FOTOS</h5>
                                    <a href="#" rel="tooltip" data-placement="right" title="Galeria de Fotos"><img class="img-responsive" src="imagenes/enlaces/galeria.png"  alt="" /></a>
                                </li>             
                            </ul><!--//slides-->
                        </div><!--//item-->
                        
                    </div><!--//carousel-inner-->        
                </div>
            </section>

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