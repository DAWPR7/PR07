<?php
session_start();
include("includes/conexion.proc.php");

//if (!isset($_SESSION['admin'])) {
//  header('location:index.php');
//}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hermano Mayor</title>

  <!-- META -->
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <!-- BOOTSTRAP -->
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</head>
<body background="img/login.jpg">

    <div class="container">
          <?php
          include "includes/titulo.php";
          ?>
        <div class="row">

            <div class="col-md-12">

              <form action="denuncia_anonima.proc.php" method="POST">
              	<div class="form-group" >
                  <h3>Si has sido testigo de un caso de bullying denúncialo, es anónimo y seguro.</h3><br>
                  <textarea class="form-control" name="textarea" id="textarea" rows="3" placeholder="Descripción de los hechos, fecha, lugar, personas implicadas..." required></textarea>
                  </div>

                	<button type="submit" class="btn btn-primary">Enviar</button>
              </form>

            </div>

  	    </div>
    </div>

<?php
    require_once("footer.php");
?>
</body>
</html>
