<?php
include("conexion.proc.php");

$user_matricula= $_POST['user_matricula'];
$user_pwd= $_POST['user_pwd'];

$query="INSERT INTO tbl_user(user_matricula, user_pwd) VALUES('$user_matricula','$user_pwd') ";

$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: administrador.php");
}
else{
	echo "No se ha insertado :(";
}
?>