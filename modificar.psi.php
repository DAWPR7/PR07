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
<?php
session_start();
echo "<a href='cerrar_sesion.php'> Cerrar Sesión</a></br>";
?>

<?php
            $user_id=$_REQUEST['user_id'];
            include("conexion.proc.php");
            $query="SELECT * FROM tbl_user WHERE user_id='$user_id'";
            $resultado=$conexion->query($query);
            $row=$resultado-> fetch_assoc();
?>


<div class="container">
<div class="row">
   <div class=""><a href='administrador.php'><i class='fa fa-arrow-circle-left fa-3x' aria-hidden='true' title='Atrás'></i></a></br></div>
</div>
<div class="card card-container">
            <div class="col-md-6 col-md-offset-3"><h3>Modificar Psicólogo</h3></div><br><br>
            <p id="profile-name" class="profile-name-card"></p>
            <form action="modificar.psi.proc.php?user_id=<?php echo $row['user_id']; ?>" method="post" class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>

            


            <input type="text" name="user_matricula" class="form-control" value="<?php echo $row['user_matricula']; ?>" required>
            <input type="text" name="user_pwd" placeholder="" class="form-control" value="<?php echo $row['user_pwd']; ?>" required>
          	
                <button class="btn-primary btn btn-danger" type="submit">Guardar cambios</button>
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