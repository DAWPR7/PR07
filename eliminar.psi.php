<?php
include 'conexion.proc.php';
$user_id= $_REQUEST['user_id'];

$query="DELETE FROM tbl_user WHERE user_id = '$user_id'";
$resultado = $conexion->query($query);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: administrador.php");
}else {
	echo ' No se elimino :(';
		
	}