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
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<!-- TITLE -->
	<title>Hermano Mayor</title>

</head>

<body background="assets/img/login.jpg">
	<!-- DIV LOGIN -->
	<div class="container">
        <div class="card card-container">
						<!-- LOGO -->
            <img id="profile-img" class="profile-img-card" src="assets/img/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
						<!-- FORMULARIO LOGIN -->
						<form action="login.proc.php" method="POST" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Matrícula" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar sesión</button>
            </form>

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
