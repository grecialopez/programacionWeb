<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo_Autor.php');
      include ('../../controllers/Articulo_AutorController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');

  if (isset($_POST['id_articulo'])){
    $Articulo_AutorC = new Articulo_AutorController();
    $Articulo_AutorC->insertaArticulo_Autor($_POST);

  }

?>
  <body>    
      <div class ="container">
        <h1>ARTICULOS DE AUTOR</h1>
        <div class ="row">
          <div class ="col-md-12">
           <form id ="articulos_autor" action="" method="POST">
            <label for="id_articulo" class="col-sm-2 control-label">Articulo</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="id_articulo" name ="id_articulo">
                           <option value="1">1</option>
                            <option value ="2">2</option>
                            </select>
                   </div>

            <label for="id_autor" class="col-sm-2 control-label">Autor</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="id_autor" name ="id_autor">
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