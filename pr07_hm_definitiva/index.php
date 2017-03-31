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
<body background="img/login.jpg">

<div class="container">
	<div class="page-header">
	  <h1>Hermano Mayor &nbsp;<a href='info.php'><i class="fa fa-info-circle" aria-hidden="true" title='Información'></i></a><span class="pull-right"><a href="denuncia_anonima.php"><img src="img/button_anonima.png"></a></span></h1><br/>
	</div>
<!-- <div class="row" style="text-align: right;">
  <div class="col-md-offset-8"><a href="denuncia_anonima.php"><img src="img/button_anonima.png"></div></a>
</div> -->

    <div class="card card-container">
            <DIV style="text-align: center"><label>HERMANO MAYOR</label></DIV>

            <img id="profile-img" class="profile-img-card" src="IMG/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="login2.proc.php" method="POST" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Iniciar sesión</button>
                <hr>
                <p>¿No tienes cuenta? <a href="registro_menor.php">Regístrate</a></p>
                <p style="color:red; text-align: center;"><?php if(isset($_REQUEST['error'])){echo $_REQUEST['error'];

                };  ?></p>
            </form><!-- /form -->
            <!--<a href="#" class="forgot-password">
                Forgot the password?
            </a> -->
        </div><!-- /card-container -->
    </div><!-- /container -->


<!-- Footer -->
<?php
include("footer.php");




?>
<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
