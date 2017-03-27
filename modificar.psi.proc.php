<?php
include 'conexion.proc.php';
$user_id= $_REQUEST['user_id'];
$user_matricula= $_POST['user_matricula'];
$user_pwd= $_POST['user_pwd'];


$query="UPDATE tbl_user SET user_matricula='$user_matricula', user_pwd='$user_pwd'WHERE user_id='$user_id' ";

$resultado = $conexion->query($query);
if ($resultado) {
	header("Location: administrador.php");
}else {
	echo ' No se modifico :(';
}