<?php
	//Página que modifica las notasde la terapia del hermano menor
	require_once("includes/conexion.proc.php");
	extract($_GET);
	//SQL de actualización del historial
	$notesh_query_sql = "UPDATE `tbl_hmenor` SET `hme_notas` = '".$textareaModal."' WHERE `tbl_hmenor`.`hme_id` = ".$forHmid;
	$sql_notesh_query = mysqli_query($conexion,$notesh_query_sql);
	
	//UPDATE `tbl_hmenor` SET `hme_notas` = 'Hermano menor de pruebas as Motivo de finalización: Inserte nota<br/> Motivo de finalización: Inserte nota ' WHERE `tbl_hmenor`.`hme_id` = 1;
	if($sql_notesh_query)
	//Controlamos que la modificación haya sido correcta, si lo ha sido mostramos el mensaje de modificacion correcta
	{
		echo "<script type='text/javascript'>alert('Modificación correcta');
				location.href='orientacion-full.php';</script>";//Redireccionamos a orientacion
	}
	else{// Si n le indicamos que ha habido un error
		echo "<script type='text/javascript'>alert('A ocurrido un error inesperado, porfavor vuelva a intentarlo');
				location.href='orientacion-full.php';</script>";//Redireccionamos a ver terapias
	}
?>