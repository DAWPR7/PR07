<?php
	require_once("includes/conexion.proc.php");
	extract($_GET);
	$ap_sol_sql = "UPDATE `tbl_hmenor` SET `hme_estado` = 'libre' WHERE `tbl_hmenor`.`hme_id` = ".$id;
	$ap_sol_query = mysqli_query($conexion,$ap_sol_sql);
	if($ap_sol_query)
	{
		echo "<script type='text/javascript'>alert('Solicitud aprobada con éxito');
								location.href='orientacion-full.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('error');
								location.href='orientacion-full.php';</script>";
	}
?>