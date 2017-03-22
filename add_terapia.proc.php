<?php 
	require_once("includes/conexion.proc.php");
	extract($_POST);
	
	$insert_his_sql =  "INSERT INTO `tbl_historial` ( `hma_id`, `hme_id`, `his_fecha_inicio`, `his_comentario`, `psi_id`) VALUES ('".$hmayor."', '".$hmenor."', CURRENT_TIMESTAMP, '".$nota."', '".$psico."');";
	if (mysqli_query($conexion,$insert_his_sql))
		{
			$update_hmayor_sql="UPDATE `tbl_hmayor` SET `hma_estado` = 'ocupado' WHERE `tbl_hmayor`.`user_id` = ".$hmayor.";";
				//echo $update_hmayor_sql;die;
				if(mysqli_query($conexion,$update_hmayor_sql))
				{
					$update_hmenor_sql="UPDATE `tbl_hmenor` SET `hme_estado` = 'ocupado' WHERE `tbl_hmenor`.`user_id` = ".$hmenor.";";
					if(mysqli_query($conexion,$update_hmenor_sql))
					{
						echo "<script type='text/javascript'>alert('Terapia iniciada con éxito');
								location.href='orientacion.php';</script>";
					}
					else
					{
						echo "<script type='text/javascript'>alert('Ups, a ocurrido un error inesperado con el hermano menor, porfavor revisa los datos.');
								location.href='add_terapia.php';</script>";
					}//End else hermano menor
				}//End if insert
				else
					{
						echo "<script type='text/javascript'>alert('Ups, a ocurrido un error inesperado con el hermano mayor, porfavor revisa los datos.');
								location.href='add_terapia.php';</script>";
					}//end else hermano mayor
			
		}
	else
	{
		echo "<script type='text/javascript'>alert('A ocurrido un error inesperado, porfavor vuelva a intentarlo');
				location.href='add_terapia.php';</script>";
	}
 ?>