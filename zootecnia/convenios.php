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
                        <li class="active nav-item dropdown">
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
                    <h1 class="heading-title pull-left">Convenios</h1>
                </header> 
                <div class="page-content">                 
                    <div class="row page-row">                     
                        <div class="privacy-wrapper col-md-12">     
                            <div class="featured-courses tabbed-info page-row">             
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#tab1" data-toggle="tab">2015</a></li>
                                  <li><a href="#tab2" data-toggle="tab">2014</a></li>
                                  <li><a href="#tab3" data-toggle="tab">2013</a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab1">
                                      <div class="row">
                                          
                                          <table class="table table-striped">
                                            <thead>
                                                <th>Titulo</th>
                                                <th>Archivo</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.TITULO 1 <b>(FECHA 1)</b>
                                                    </td>
                                                    <td class="span2" ><a class="btn btn-info btn-small" target='_blank' href='#'><i class="fa fa-download"></i> Ver archivo</a>
                                                    </td>  
                                                </tr>

                                                <tr>
                                                    <td>2.TITULO 2 <b>(FECHA 2)</b>
                                                    </td>
                                                    <td class="span2" ><a class="btn btn-info btn-small" target='_blank' href='#'><i class="fa fa-download"></i> Ver archivo</a>
                                                    </td>  
                                                </tr>
                                            </tbody>
                                        </table>


                                      </div><!--//row-->
                                  </div>
                                  <div class="tab-pane" id="tab2">
                                      <div class="row">
                                          <table class="table table-striped">
                                            <thead>
                                                <th>Titulo</th>
                                                <th>Archivo</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.TITULO 3 <b>(FECHA 3)</b>
                                                    </td>
                                                    <td class="span2" ><a class="btn btn-info btn-small" target='_blank' href='#'><i class="fa fa-download"></i> Ver archivo</a>
                                                    </td>  
                                                </tr>

                                                <tr>
                                                    <td>2.TITULO 4 <b>(FECHA 4)</b>
                                                    </td>
                                                    <td class="span2" ><a class="btn btn-info btn-small" target='_blank' href='#'><i class="fa fa-download"></i> Ver archivo</a>
                                                    </td>  
                                                </tr>
                                            </tbody>
                                        </table>
                                      </div><!--//row-->
                                  </div>
                                  <div class="tab-pane" id="tab3">
                                      <div class="row">
                                          <table class="table table-striped">
                                            <thead>
                                                <th>Titulo</th>
                                                <th>Archivo</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.TITULO 5 <b>(FECHA 5)</b>
                                                    </td>
                                                    <td class="span2" ><a class="btn btn-info btn-small" target='_blank' href='#'><i class="fa fa-download"></i> Ver archivo</a>
                                                    </td>  
                                                </tr>

                                                <tr>
                                                    <td>2.TITULO 6 <b>(FECHA 6)</b>
                                                    </td>
                                                    <td class="span2" ><a class="btn btn-info btn-small" target='_blank' href='#'><i class="fa fa-download"></i> Ver archivo</a>
                                                    </td>  
                                                </tr>
                                            </tbody>
                                        </table>
                                      </div><!--//row-->
                                  </div>
                                </div>
                            </div><!--//featured-courses-->
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