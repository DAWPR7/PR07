<?php
include("includes/conexion.proc.php");

$email= $_POST['email'];
$password1= $_POST['password1'];
$password2= $_POST['password2'];



$query="INSERT INTO tbl_user(user_matricula, user_pwd) VALUES('$email','$password1') ";


$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: index.php");
}
else{
	echo "No se ha insertado :(";
}
?>