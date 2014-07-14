<?php 

      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      //include ('../../controllers/IntegranteController.php');
      //include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');
?>
<body>    
      <div class ="container"> 
        <h1>INTEGRANTE</h1>
        <div class ="row">
          <div class ="col-md-12">
          <label for="idintegrante" class="col-sm-2 control-label">Tipo de integrante</label>
                       
          <button type="button" class="btn btn-primary" id="botonEntrenador">Entrenador</button>
          <button type="button" class="btn btn-primary" id="botonJugador">Jugador</button>

                   </div>  
                   </div>

              <form id ="form6">
             <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
            </div>
             <div class="form-group">
                    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Enter apellido">
                    </div> 
            </div>
            <div class="form-group">
                    <label for="peso" class="col-sm-2 control-label">Peso</label>
                    <div class="col-md-5">
                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Enter peso">
                    </div> 
            </div>
            <div class ="row">
              <div class ="col-md-12">
               <div class="form-group">
                    <label for="estatura" class="col-sm-2 control-label">Estatura</label>
                    <div class="col-md-5">
                    <input type="text" class="form-control" id="estatura" name="estatura" placeholder="Enter estatura">
                    </div> 
                </div>
            </div>
          </div>
         		<div class="form-group">
                        <label for="foto">Seleccione Foto</label>
                        <input type="file" id="foto" name="foto">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
               <div class="form-group">
                    <label for="edad" class="col-sm-2 control-label">Edad</label>
                    <div class="col-md-5">
                    <input type="text" class="form-control" id="Edad" name="Edad" placeholder="Enter edad">
                    </div> 
            	</div>                  
            </form>

            <!--form entrenador-->
            <form id="form7">
              <div class ="row">
                <div class ="col-md-12">
            <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter nombre">
                    </div> 
            </div>
             <div class="form-group">
                    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Enter apellido">
                    </div> 
            </div>
          </div>
        </div>
              <div class="row">
                <div class ="col-md-12">            
              <label for="idpais" class="col-md-2 control-label">Pais</label>
              <div class ="col-md-10">
                       <select class="form-control" id="idintegrante">
                          <option value="1">Argentina</option>
                          <option value="2">Kenia</option>
                            </select>
                          </div>
                  </div>
                  </div>              
        </form>

          </div>
 
  </body>












<?php include ('../layouts/footer.php'); ?>