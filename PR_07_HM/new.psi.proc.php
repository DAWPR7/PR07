<?php
include("includes/conexion.proc.php");

$user_matricula= $_POST['user_matricula'];
$user_pwd= $_POST['user_pwd'];

$query="INSERT INTO tbl_user(user_matricula, user_pwd) VALUES('$user_matricula','$user_pwd')";

$resultado= $conexion->query($query);

$last_id = mysqli_insert_id($conexion);

echo $last_id;
					//Insertamos las notas con el último usuario insertado 
	$sql_insert2 = "INSERT INTO `tbl_psico` (`user_id`) VALUES ('".$last_id."');";

	$resultado2= $conexion->query($sql_insert2);


if($resultado){
	//echo "se ha insertado";
	header("Location: administrador.php");
}
else{
	echo "No se ha insertado :(";
}
?>