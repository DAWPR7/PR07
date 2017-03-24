<?php
session_start();
echo $email=$_POST['email'];
echo $password=$_POST['password'];

include("conexion.proc.php");

$proceso= $conexion->query("SELECT user_id FROM tbl_user WHERE user_matricula='$email' AND user_pwd = '$password'");

print_r($proceso);
if($resultado = mysqli_fetch_field($proceso)){

print_r($resultado);
	
	$_SESSION['email'] = $email;
	//header("Location: index.php");
	
}else{
	//header("Location: index.php");
	
}

?>