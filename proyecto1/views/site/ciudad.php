<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Ciudad.php');
      include ('../../controllers/CiudadController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');
?>

  <body>    
      <div class ="container"> 
        <h1>CIUDADES</h1>

        <div class ="row">
          <div class ="col-md-12">
              <form id ="form1">
                <div class="form-group">
                    <label for="Nombre" class="col-sm-2 control-label">Nombre de la ciudad</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Enter nombre">
                    </div> 
                </div>
              </form>
          </div>
      </div>
    </div>

  </body>
<?php include ('../layouts/footer.php'); ?>