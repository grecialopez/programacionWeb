<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Pais.php');
      include ('../../controllers/PaisController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');
   echo "<pre>datos:";

  print_r($_POST);
  print_r($_FILES);
  echo"</pre>";
   if (isset($_POST['nombre'])){
    $paisC = new PaisController();
    $paisC->insertaPais($_POST,$_FILES);
     echo  $paisC->alertas();
}
?>
  <body>    
      <div class ="container"> 
        <h1>PA&Iacute;SES</h1>

        <div class ="row">
          <div class ="col-md-12">
                      <form  id="form3" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nombre">Nombre del Pa&iacute;s</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                      </div>
                        <div class="form-group">
                        <label for="bandera">Seleccione Bandera</label>
                        <input type="file" id="bandera" name="bandera">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
                       <label for="idcontinente">Continente</label>
                      <div >
                       <select class="form-control" id="idcontinente">
                           <option>1</option>
                            <option>2</option>
                            
                    </select>
                   </div>   
                    <button type="submit" class="btn btn-default navbar-btn">ENVIAR</button>                     
                    </form>
          </div>
        </div>
      </div>
  </body>
<?php include ('../layouts/footer.php'); ?>