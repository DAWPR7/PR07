
<?php
// include_once "includes/conexion_bd.php";
include "includes/conexion_bd.php";

// echo 'HMA '. $_SESSION['hma_id'];

// echo 'HME '. $_SESSION['hme_id'];

if (!empty($_SESSION['hma_id'])) {

	$sentencia= 'hma_id='.$_SESSION['hma_id'];

}else{
	$sentencia= 'hme_id='.$_SESSION['hme_id'];
}

// echo $sentencia;

// ----- SQL PARA SELECCIONAR ID EN LA TABLA HISTORIAL:

$selectHistorial = $databaseConnection->prepare("SELECT his_id FROM tbl_historial WHERE ".$sentencia."");


            	$selectHistorial->execute();

              	$rows=$selectHistorial->fetchColumn();


?>
