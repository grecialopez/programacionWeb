<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');

  if (isset($_POST['nombre'])){
    $AutorC = new AutorController();
    $AutorC->insertaAutor($_POST);
  }
  
?>
  <body>    
      <div class ="container"> 
        <div class ="row">
          <div class ="col-md-12">
            <h1>AUTORES</h1>
            <form id ="form3" action="" method="POST">
            <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Enter apellidos">
                    </div> 
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                    </div> 
                </div>
<button type="submit" class="btn btn-default navbar-btn">ENVIAR</button>
            </form>
          </div>
      </div>
    </div>
  </body>
<?php include ('../layouts/footer.php'); ?>