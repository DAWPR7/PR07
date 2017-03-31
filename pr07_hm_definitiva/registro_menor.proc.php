<?php
include("includes/conexion.proc.php");

$email= $_POST['email'];
$password1= $_POST['password1'];
$password2= $_POST['password2'];
$notas=$_POST['notas'];



$query1="INSERT INTO tbl_user(user_matricula, user_pwd) VALUES('$email','$password1') ";


$resultado1= $conexion->query($query1);

$last_id = mysqli_insert_id($conexion);



$query2="INSERT INTO tbl_hmenor(user_id, hme_notas, hme_estado) VALUES('$last_id','$notas', 'pendiente') ";

$resultado2= $conexion->query($query2);

// echo $last_id;

if($resultado2){
	//echo "se ha insertado";
	header("Location: index.php");
}
else{
	echo "No se ha insertado :(";
}
?>