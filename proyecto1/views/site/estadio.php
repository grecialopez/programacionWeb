<?php 
  session_start();
  include ('../layouts/header.php');
?>
  <body>    
      <div class ="container">
        <h1>ESTADIOS</h1>
        <div class ="row">
          <div class ="col-md-12">
           <form id ="form2">
                  <div class="form-group">
                    <label for="estadio" class="col-sm-2 control-label">Nombre de Estadio</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="estadio" name="estadio" placeholder="Enter nombre">
                    </div>         
                    <label for="idciudad" class="col-sm-2 control-label">Ciudad</label>
                      <div class ="col-sm-10">
                       <select class="form-control" id="idciudad">
                           <option>Am&eacute;rica</option>
                            <option>Auropa</option>
                            <option>Asia</option>
                            <option>Australlia</option>
                            <option>Ocean&iacute;a</option>
                            <option>Ant&aacute;rtica</option>
                    </select>
                   </div>                 
         </div>
       </form>
      </div>
    </div>
  </div>

  </body>
<?php include ('../layouts/footer.php'); ?>