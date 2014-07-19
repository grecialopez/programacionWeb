<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
     include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');

  echo "<pre>datos:";
  print_r($_POST);
  print_r($_FILES);
  echo"</pre>";

  if (isset($_POST['nombre'])){
    $ArticuloC = new ArticuloController();
    $ArticuloC->insertaArticulo($_POST,$_FILES);
    echo $ArticuloC->alertas();

  }
?>

  <body>    
      <div class ="container"> 
        <h1>Articulos</h1>

        <div class ="row">
          <div class ="col-md-12">
              <form id ="form1" action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
                </div>

                    <label for="resumen" class="col-sm-2 control-label">Resumen</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="resumen"></textarea>
                    </div> 

                    <label for="abstract" class="col-sm-2 control-label">Abstract</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="abstract"></textarea>
                    </div> 

                    <label for="introduccion" class="col-sm-2 control-label">Introducci&oacute;n</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="introduccion"></textarea>
                    </div> 

                    <label for="metodologia" class="col-sm-2 control-label">Metodolog&iacute;a</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="metodologia"></textarea>
                    </div> 

                    <label for="contenido" class="col-sm-2 control-label">Contenido</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="contenido" id="contenido"></textarea>
                    </div> 

                    <div class="form-group">
                    <label for="fecha_creacion" class="col-sm-2 control-label">Fecha de Creaci&oacute;n</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="fecha_creacion" name="fecha_creacion" placeholder="Enter fecha de creaci&oacute;n">
                    </div> 
                    </div>

                    <div class="form-group">
                        <label for="foto">Seleccione Archivo PDF</label>
                        <input type="file" id="archivo_pdf" name="archivo_pdf">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

                    <label for="conclusiones" class="col-sm-2 control-label">Conclusiones</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" rows="3" name="conclusiones" id="conclusiones"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="agradecimientos" class="col-sm-2 control-label">Agradecimientos</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="agradecimientos" name="agradecimientos" placeholder="Enter agradecimientos">
                    </div> 
                    </div>

                    <div class="form-group">
                    <label for="referencias" class="col-sm-2 control-label">Referencias</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="referencias" name="referencias" placeholder="Enter referencias">
                    </div> 
                    </div>
                    <label for="id_status" class="col-sm-2 control-label">Status</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="id_status" name ="id_status">
                           <option value="1">1</option>
                            <option value ="2">2</option>
                            </select>
                   </div>
               <button type="submit" class="btn btn-default navbar-btn">ENVIAR</button>
              </form>
          </div>
      </div>
    </div>

  </body>
<?php include ('../layouts/footer.php'); ?>