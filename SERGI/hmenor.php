<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- LINKS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<!-- TITLE -->
	<title>Hermano Mayor</title>

</head>

<body background="assets/img/login.jpg">
  <!-- BARRA MENÚ -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Hermano Menor</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#about">Informa de un problema</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav><br><br>
	<!-- DIV CONTENIDO -->
	<div class="container">

    <div class="contenedor-chat">

      <div class="chat">
      </div>
      <div class="escribir">
      </div>

    </div>

  </div>
<!-- INCUDE FOOTER -->
<?php
include("footer.php");
?>
<!-- SCRIPTS -->
<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
