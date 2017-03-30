<?php
include 'includes/conexion.proc.php';
$user_id= $_REQUEST['user_id'];

$query1="DELETE FROM tbl_psico WHERE user_id = '$user_id'";
$resultado1 = $conexion->query($query1);


$query2="DELETE FROM tbl_user WHERE user_id = '$user_id'";
$resultado = $conexion->query($query2);

if ($resultado) {
	//echo 'Se elimino';
	header("Location: administrador.php");
}else {
	echo ' No se elimino :(';
		
	}