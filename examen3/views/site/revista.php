<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Revista.php');
      include ('../../controllers/RevistaController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
    $RevistaC = new RevistaController();
    $RevistaC->insertaRevista($_POST);
  }
?>
  <body>    
      <div class ="container">
        <h1>REVISTA</h1>
        <div class ="row">
          <div class ="col-md-12">
           <form id ="revista" action="" method="POST">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
                </div>
                <div class="form-group">
                        <label for="foto">Portada</label>
                        <input type="file" id="portada" name="portada">
                        
                </div>

                <div class="form-group">
                    <label for="fecha" class="col-sm-2 control-label">Fecha</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Enter fecha">
                    </div> 
                </div>
                <div class="form-group">
                    <label for="volumen" class="col-sm-2 control-label">Volumen</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="volumen" name="volumen" placeholder="Enter volumen">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">T&iacute;tulo</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Enter titulo">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="subtitulo" class="col-sm-2 control-label">Subt&iacute;tulo</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Enter subtitulo">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="numero" class="col-sm-2 control-label">N&uacute;mero</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Enter n&uacute;mero">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="clave" class="col-sm-2 control-label">Clave</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="clave" name="clave" placeholder="Enter Clave">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="directorio" class="col-sm-2 control-label">Directorio</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="directorio" name="directorio" placeholder="Enter Directorio">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="editorial" class="col-sm-2 control-label">Editorial</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Enter Editorial">
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