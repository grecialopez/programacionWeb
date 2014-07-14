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
?>
  <body>    
      <div class ="container"> 
        <h1>PA&Iacute;SES</h1>

        <div class ="row">
          <div class ="col-md-12">
                      <form  id="form3">
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
                           <option>Am&eacute;rica</option>
                            <option>Auropa</option>
                            <option>Asia</option>
                            <option>Australlia</option>
                            <option>Ocean&iacute;a</option>
                            <option>Ant&aacute;rtica</option>
                    </select>
                   </div>                        
                    </form>


          </div>
        </div>
      </div>
  </body>
<?php include ('../layouts/footer.php'); ?>