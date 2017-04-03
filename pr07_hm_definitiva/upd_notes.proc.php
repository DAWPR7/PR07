<?php 
	extract($_POST);
	//echo $hmeid;
	require_once("includes/conexion.proc.php");
	//Consulta para seleccionar el ID del último historial:
	$hist_id_sql="SELECT * from `tbl_historial` WHERE `hme_id` = ".$hmeid." order by `his_id` DESC limit 0,1";
	$hist_id_query = mysqli_query($conexion,$hist_id_sql);
	if($hist_id_query)
	{
		while($hist_id = mysqli_fetch_array($hist_id_query))
		{
			$id = $hist_id['his_id'];
		}
		//Con el ID seleccionado, creamos la consulta para modificar el apartado de notas
		$update_notes_sql = "UPDATE `tbl_historial` SET `his_comentario` = '".$notas."' WHERE `tbl_historial`.`his_id` = ".$id;
		//echo $update_notes;
		$update_notes_query = mysqli_query($conexion,$update_notes_sql);
			if($update_notes_query)
			{
				echo "<script type='text/javascript'>alert('Modificación correcta');
				location.href='orientacion-full.php';</script>";
			}
			else 
			{
				echo "<script type='text/javascript'>alert('Modificación incorrecta, vuelva a intentarlo');
				location.href='orientacion-full.php';</script>";
			}
	}
	else 
	{
		echo "<script type='text/javascript'>alert('Modificación incorrecta, vuelva a intentarlo');
				location.href='orientacion-full.php';</script>";
	}
	
 ?>