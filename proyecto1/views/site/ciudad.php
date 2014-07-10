<?php 
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
                    <label for="nombre" class="col-sm-2 control-label">Nombre de la ciudad</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
                </div>
              </form>
          </div>
      </div>
    </div>

  </body>
<?php include ('../layouts/footer.php'); ?>