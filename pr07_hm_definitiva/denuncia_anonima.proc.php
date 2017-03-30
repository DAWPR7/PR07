<?php
include("includes/conexion.proc.php");
$textarea= $_POST['textarea'];

$query="INSERT INTO tbl_denuncia(den_mensaje) VALUES('$textarea') ";

$resultado= $conexion->query($query);

if($resultado){
	//echo "se ha insertado";
	header("Location: index.php");
}
else{
	echo "No se ha insertado :(";
}
?>