
<?php
include_once "includes/conexion_bd.php";
// include "includes/conexion_bd.php";

// echo 'HMA '. $_SESSION['hma_id'];

// echo 'HME '. $_SESSION['hme_id'];

if (!empty($hmenor_ini)) {

	$sentencia= 'hme_id='.$hmenor_ini;
	// echo $sentencia;

}else{
	$sentencia= 'hma_id='.$hmayor_ini;
	// echo $sentencia;
}

// echo $sentencia;

// ----- SQL PARA SELECCIONAR ID EN LA TABLA HISTORIAL:

$selectHistorial = $databaseConnection->prepare("SELECT his_id FROM tbl_historial WHERE ".$sentencia."");


            	$selectHistorial->execute();

              	$rows=$selectHistorial->fetchColumn();


?>
