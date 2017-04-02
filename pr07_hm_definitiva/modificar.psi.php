<?php
session_start();

$titulo = "Modificar psicólogo";

include("includes/conexion.proc.php");

if (!isset($_SESSION['admin'])) {

  header('location:index.php');
}

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
    <div class="page-header">
        <h1><?php echo $titulo; ?><span class="pull-right">&nbsp;<a href='administrador.php'><i class="fa fa-arrow-circle-left" aria-hidden="true" title='Atrás'></i></a>&nbsp;<a href="cerrar_sesion.php"><i class="fa fa-sign-out" aria-hidden="true" title='Desconectarse'></i></a></span></h1><br/>
      </div>
    <div class="row">

      <div class="col-md-12">

        <?php
        $user_id=$_REQUEST['user_id'];

        $query="SELECT * FROM tbl_user WHERE user_id='$user_id'";
        $resultado=$conexion->query($query);
        $row=$resultado-> fetch_assoc();
        ?>

        <div class="card card-container">
            <div class="col-md-6 col-md-offset-3"><h3>Modificar Psicólogo</h3></div><br><br>
            <p id="profile-name" class="profile-name-card"></p>
            <form action="modificar.psi.proc.php?user_id=<?php echo $row['user_id']; ?>" method="post" class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>

            


            <input type="text" name="user_matricula" class="form-control" value="<?php echo $row['user_matricula']; ?>" required>
            <input type="text" name="user_pwd" placeholder="" class="form-control" value="<?php echo $row['user_pwd']; ?>" required>
            
                <button class="btn-primary btn btn-danger" type="submit">Guardar cambios</button>
            </form>
        </div>              

      </div>

    </div>
  </div>

  <?php
  require_once("footer.php");
  ?>
</body>
</html>
