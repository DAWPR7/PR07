<?php 
	extract($_GET);
	require_once("includes/conexion.proc.php");
	//Consulta SQL para cambiar el hermano al nuevo con el ID del historial
	$ch_hmayor_sql = "UPDATE `tbl_historial` SET `hma_id` = '".$hmayor."' WHERE `tbl_historial`.`his_id` = ".$id.";";
	//Consulta SQL para liberar al antiguo hermano mayor y ponerlo en libre
	$free_hmayor_sql = "UPDATE `tbl_hmayor` SET `hma_estado` = 'libre' WHERE `tbl_hmayor`.`hma_id` = ".$old_hmaid;
	//Consulta para poner al nuevo hermano mayor en estado ocupado
	$change_hmayor_status = "UPDATE `tbl_hmayor` SET `hma_estado` = 'ocupado' WHERE `tbl_hmayor`.`hma_id` = ".$hmayor;
	//echo $ch_hmayor_sql . "<br/>" . $free_hmayor_sql . "<br/>" . $change_hmayor_status;die;
	//En primer lugar liberamos al antiguo hermano mayor (controlando la consulta)
		if(mysqli_query($conexion,$free_hmayor_sql))
		{
			//Si la consulta la ha lanzado bien, ponemos al nuevo hermano mayor como ocupado
			if(mysqli_query($conexion,$change_hmayor_status))
			{	//Si la consulta la ha lanzado bien, asignamos al hermano mayor al historíco
				if(mysqli_query($conexion,$ch_hmayor_sql))
				{
					echo "<script type='text/javascript'>alert('Modificación correcta');
					location.href='orientacion.php';</script>";//Redireccionamos a orientacion
				}
				else 
				{
					echo "<script type='text/javascript'>alert('A ocurrido un error, vuelva a intentarlo');
						location.href='sh_terapias.php';</script>";//Redireccionamos a orientacion
				}
			}
			else 
			{
				echo "<script type='text/javascript'>alert('A ocurrido un error, vuelva a intentarlo');
					location.href='sh_terapias.php';</script>";//Redireccionamos a orientacion
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('A ocurrido un error, vuelva a intentarlo');
				location.href='sh_terapias.php';</script>";//Redireccionamos a orientacion
		}
 ?>