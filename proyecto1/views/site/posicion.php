<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Posicion.php');
      include ('../../controllers/PosicionController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');
?>
  <body>    
      <div class ="container"> 
        <h1>POSICIONES</h1>
        <div class ="row">
          <div class ="col-md-12">
              <form id ="form4">
             <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
            </div>
            <div class="form-group">
                    <label for="abreviatura" class="col-sm-2 control-label">Abreviatura</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Enter Abreviatura">
                    </div> 
            </div>


            </form>
          </div>
      </div>
    </div>
  </body>
<?php include ('../layouts/footer.php'); ?>