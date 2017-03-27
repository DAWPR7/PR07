<?php
require('includes/conexion.proc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hermano Mayor</title>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>	
</head>
<body background="IMG/login.jpg">

<div class="container">
<div class="row">
   <div class=""><a href='index.php'><i class='fa fa-arrow-circle-left fa-3x' aria-hidden='true' title='Atrás'></i></a></br></div>
</div>

<div class="card card-inverse" style="margin-top: 150px;">

<form action="denuncia_anonima.proc.php" method="POST">
	<div class="form-group" >
    <h3>Si has sido testigo de un caso de bullying denúncialo, es anónimo y seguro.</h3><br>
    <textarea class="form-control" name="textarea" id="textarea" rows="3" placeholder="Descripción de los hechos, fecha, lugar, personas implicadas..." required></textarea>
    </div>
  	
  	<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<!-- Footer -->
<?php
include("footer.php");
?>
<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>