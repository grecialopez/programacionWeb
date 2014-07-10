<?php 
  session_start();
  include ('../layouts/header.php');
?>
  <body>    
      <div class ="container"> 
        <div class ="row">
          <div class ="col-md-12">
            <h1>CONTINENTES</h1>
            <form>
            <label for="nombre" class="col-sm-2 control-label">Continente</label>
                <div class ="col-sm-10">
                    <select class="form-control" id="continente">
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