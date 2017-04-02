<?php
session_start();
include("includes/conexion.proc.php");

$titulo = "Espera!";
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

            <div class="col-md-12">

              <div class="card card-inverse" style="margin-top: 120px;">
                      <p id="profile-name" class="profile-name-card"><h1>Esperando...</h1></p>
                      <p>En unas horas se te asignará un Hermano Mayor/Menor. </p>
              </div>

            </div>

  	</div>

<?php
    require_once("footer.php");
?>
</body>
</html>
