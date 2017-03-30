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
<!--EL SCRIPT ESTE VALIDO LOS 2 CAMPOS SEAN IGUALES -->
<script> 
function comprobarClave(){ 
    password1 = document.f1.password1.value 
    password2 = document.f1.password2.value 

    if (password1 == password2) 
        return true; 
    else 
        alert("Las contraseñas deben coincidir")
        return false;
} 
</script> 
<!--FIN DEL SCRIPT -->
</head>
<body background="img/login.jpg">
<div class="container">
<div class="row">
   <div class=""><a href='index.php'><i class='fa fa-arrow-circle-left fa-3x' aria-hidden='true' title='Atrás'></i></a></br></div>
</div>
<div class="card card-container">
                   
            <p id="profile-name" class="profile-name-card"></p>
            <form action="registro_menor.proc.php" method="POST" class="form-signin" name="f1" onsubmit="comprobarClave">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="password1" id="inputPassword" class="form-control" placeholder="Contraseña" required>
               	<input type="password" name="password2" id="inputPassword" class="form-control" placeholder=" Confirmar contraseña" required>
                <button class="btn-primary btn btn-danger" type="submit" onClick="return comprobarClave()">Confirmar</button>
            <p class="form-group">Al continuar confirmas que has leído y que estás de acuerdo con las <a href="condiciones_uso.php">Condiciones de uso</a> y <a href="politica_privacidad.php">Política de privacidad</a>.</p>
						<hr>
						<p>¿Ya tienes cuenta? <a href="index.php">Inicia sesión</a></p>
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