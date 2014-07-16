<?php 

      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Indice.php');
      include ('../../controllers/Indice_ArticuloController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');

  if (isset($_POST['id_indice'])){
    $Indice_ArticuloC = new Indice_ArticuloController();
    $Indice_ArticuloC->insertaIndice_Articulo($_POST);

  }
?>
<body>    
      <div class ="container"> 
        <h1>INDICE POR ARTICULO</h1>
        <div class ="row">
          <div class ="col-md-12">            
              <form id ="form5" action="" method="POST">
             <label for="id_indice" class="col-sm-2 control-label">Indice</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="id_indice" name ="id_indice">
                           <option value="1">1</option>
                            <option value ="2">2</option>
                            </select>
                   </div>

             <label for="id_articulo" class="col-sm-2 control-label">Articulo</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="id_articulo" name ="id_articulo">
                           <option value="1">1</option>
                            <option value ="2">2</option>
                            </select>
                   </div>

                <div class="form-group">
                    <label for="numero_indice" class="col-sm-2 control-label">N&uacute;mero</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="numero_indice" name="numero_indice" placeholder="Enter n&uacute;mero">
                    </div> 
            </div>
                <button type="submit" class="btn btn-default navbar-btn">ENVIAR</button>           
        </form>

          </div>
        </div>
      </div>
 
  </body>
<?php include ('../layouts/footer.php'); ?>