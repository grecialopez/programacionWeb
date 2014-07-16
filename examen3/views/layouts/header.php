<?php 
  define('BASEURL','http://localhost/programacionWeb/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Revista</title>

    <!-- hojas de estilo-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
    <link rel ="stylesheet" type="text/css" href="../css/estilos.css">
    <link rel="stylesheet" href="../fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>

  <body role="document">
 <div class="container">
    <!-- Fixed navbar -->
   <div class "row">
      <div class _"col-md-12">
             <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Revista.com</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Organizaci&oacute;n</a></li>
                  <li><a href="#">Desarrollo</a></li>
                  <li><a href="#">Gobierno</a></li>
                    <li><a href="#">Responsabilidad Social</a></li>
                  </ul>
              
                </form>
                <ul class="nav navbar-nav navbar-right">
                  <li><a><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                  <li><a><span class="glyphicon glyphicon-registration-mark"></span></a></li>
                   <li><a><span class="glyphicon glyphicon-thumbs-up"></span></a></li>
                    <li><a><span class="glyphicon glyphicon-user"></span></a></li>
                
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>  
        </div>
</div>
                 
    <div class ="row">
     <div class ="col-md-6">
     </div>
        <div class ="col-md-1"class ="pull-right">
          <a><span class="glyphicon glyphicon-file">Noticias</span></a>
        </div>
        <div class ="col-md-1"class ="pull-right">
            <a><span class="glyphicon glyphicon-camera">Fotos</span></a>
        </div>
        <div class ="col-md-1"class ="pull-right">
            <a><span class="glyphicon glyphicon-facetime-video">V&iacute;deos</span></a>
        </div>
        <div class ="col-md-1"class ="pull-right">
              <a><span class="glyphicon glyphicon-play">Juegos</span></a>
        </div>
        <div class ="col-md-1"class ="pull-right">
              <a><span class="glyphicon glyphicon-glass">Actividad Social</span></a>
        </div>                                       
        </div>


         <div class ="row">
            <div class ="col-md-20">             
              <div class="btn-group"> 
                <button type="button" class="btn btn-danger  btn-lg" onclick=" location.href='../site/articulo.php'">Articulo</button>                         
                <button type="button" class="btn btn-danger  btn-lg" onclick=" location.href='../site/articulo_autor.php'">Articulo por Autor</button>
                <button type="button" class="btn btn-danger  btn-lg" onclick=" location.href='../site/autor.php'" >Autores</button>
                <button type="button" class="btn btn-danger  btn-lg" onclick=" location.href='../site/indice.php'">Indice</button>
                <button type="button" class="btn btn-danger  btn-lg" onclick=" location.href='../site/indice_articulo.php'" >Indice Por Articulo</button>
                <button type="button" class="btn btn-danger  btn-lg" onclick=" location.href='../site/revista.php'">Revista</button>
                <button type="button" class="btn btn-danger  btn-lg"onclick=" location.href='../site/status.php'">Status</button>
                </div>
                </div>
                </div> 
       <!--<a class="btn btn-success various" data-fancybox-type="iframe" href="ciudad.php">Ciudades</a></p>-->

      
       <div class ="row">
          <div class ="col-md-6">
            <div class ="col-md-5">
              <div class="form-group">
               <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                </span>
                </div>
                  </div>
               </div> 
            </div>
        <div class ="col-md-6">
          <span class="glyphicon glyphicon-dashboard">Cambiar tu zona horaria</span>
        </div>
        </div>
        <hr> 

  </div>

    <div class="container theme-showcase" role="main">

