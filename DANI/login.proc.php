<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

include("conexion.proc.php");

$proceso= $conexion->query("SELECT * FROM tbl_user WHERE user_matricula='$email' AND user_pwd = '$password'");

if($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['email'] = $email;
	header("Location: index.php");
	
}else{
	header("Location: login.php");
	
}

?>