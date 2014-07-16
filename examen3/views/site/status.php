<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Status.php');
      include ('../../controllers/StatusController.php');
      include ('../../libs/Er.php');
  session_start();
  include ('../layouts/header.php');
  
  if (isset($_POST['status'])){
    $StatusC = new StatusController();
    $StatusC->insertaStatus($_POST);
  }
?>
  <body>    
      <div class ="container">
        <h1>STATUS</h1>
        <div class ="row">
          <div class ="col-md-12">
           <form id ="status" action="" method="POST">
            <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" name="status" placeholder="Enter status">
                    </div> 
                </div>

                   <button type="submit" class="btn btn-default navbar-btn">ENVIAR</button>
       </form>
      </div>
    </div>
  </div>

  </body>
<?php include ('../layouts/footer.php'); ?>