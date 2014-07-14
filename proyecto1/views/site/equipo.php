<?php 
   include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');

  session_start();
  include ('../layouts/header.php');


  if (isset($_POST['nombre'])){
    echo "<pre>";
    print_r($_POST);
    echo"</pre>";

  }
?>
  <body>    
      <div class ="container"> 
        <h1>EQUIPO</h1>
        <div class ="row">
          <div class ="col-md-12">
              <form id ="form5"  action="" method="POST">
                 
             <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
            </div>
         				<div class="form-group">
                        <label for="escudo">Seleccione Escudo</label>
                        <input type="file" id="escudo" name="escudo">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>

            <label for="idpais" class="col-sm-2 control-label">Pais</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="idpais" name ="idpais">
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