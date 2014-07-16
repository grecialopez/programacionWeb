<?php 
   include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Indice.php');
      include ('../../controllers/IndiceController.php');
      include ('../../libs/Er.php');

  session_start();
  include ('../layouts/header.php');
  
  if (isset($_POST['titulo'])){
    $indiceC = new IndiceController();
    $indiceC->insertaIndice($_POST);
  }
  
?>
  <body>    
      <div class ="container"> 
        <h1>INDICE</h1>
        <div class ="row">
          <div class ="col-md-12">
              <form id ="form4"  action="" method="POST">
                 
             <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">T&iacute;tulo</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Enter titulo">
                    </div> 
            </div>
         				<div class="form-group">
                    <label for="numero" class="col-sm-2 control-label">N&uacute;mero</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Enter numero">
                    </div> 
            </div>

            <label for="id_revista" class="col-sm-2 control-label">Revista</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="id_revista" name ="id_revista">
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