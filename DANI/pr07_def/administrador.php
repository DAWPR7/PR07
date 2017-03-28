<?php
session_start();

include("includes/conexion.proc.php");

if (!isset($_SESSION['admin'])) {

  header('location:index.php');
}

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
<?php
//session_destroy();
// if(isset($_SESSION['u_usuario'])){
// 	echo "Session exitosa\n Bienvenido";
// 	echo " " . $_SESSION['u_usuario'];

	echo "<a href='cerrar_sesion.php'> Cerrar Sesión</a></br>";
	// echo "<a href='sesion.php'> Atras</a></br>";
// }
// else{
// 	//header("Location: index.php");
// }
?>

<div class="container">
<div class="row">
   <div class=""><a href='index.php'><i class='fa fa-arrow-circle-left fa-3x' aria-hidden='true' title='Atrás'></i></a></br></div>
</div>
<div class="container" style="background-color: white;">
       
    <h1>Administración</h1><br><h3>Psicólogos</h3>
<table class="table table-striped">
  <thead>
    <tr>
	      <th></th>
	      <th>ID</th>
	      <th>Nombre</th>
	      <th>Password</th>
	      <th>
	      	 <td><a href="new.psi.php"><i class="fa fa-user-plus fa-3x" aria-hidden="true" title="Nuevo Psicólogo"></i></a></td>
		 </th>
    </tr>
  </thead>
  <tbody>
  	<?php
			$query="SELECT * FROM tbl_user";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
	?>
  
    <tr>
   
      <th scope="row"></th>
      <td><?php echo $row['user_id']; ?></td>
      <td><?php echo $row['user_matricula']; ?></td>
      <td>@<?php echo $row['user_pwd']; ?></td>
      <?php $user_id=$row['user_id']; ?>
      	<td><a href="modificar.psi.php?user_id=<?php echo $row['user_id']; ?>"><i class="fa fa-pencil fa-2x" aria-hidden="true" title="Modificar"></i></a></td>
		<td><a href="eliminar.psi.php?user_id=<?php echo $row['user_id']; ?>"><i class="fa fa-trash fa-2x" aria-hidden="true" title="Eliminar"></i></a></td>
    </tr>
  		<?php
			}
			?>
  </tbody>
</table>
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