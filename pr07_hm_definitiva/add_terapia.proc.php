<?php 
	require_once("includes/conexion.proc.php");
	extract($_POST);
	//Consulta para coger el hma_id através del user
		$id_hme_sql = "SELECT `hme_id`from `tbl_hmenor` WHERE `user_id` = ".$hmenor;
 							
 								$id_hme_query = mysqli_query($conexion,$id_hme_sql);

 								while($id_hme = mysqli_fetch_array($id_hme_query))
 								{
 									$hme = $id_hme['hme_id'];
 								}
 								//echo $hme;die;
 		$id_hma_sql = "SELECT `hma_id`from `tbl_hmayor` WHERE `user_id` = ".$hmayor;
 							//echo $id_hma_sql;die;
 								$id_hma_query = mysqli_query($conexion,$id_hma_sql);

 								while($id_hma = mysqli_fetch_array($id_hma_query))
 								{
 									$hma = $id_hma['hma_id'];
 								}
 								//echo $hma;die;
	$insert_his_sql =  "INSERT INTO `tbl_historial` ( `hma_id`, `hme_id`, `his_fecha_inicio`, `his_comentario`, `psi_id`) VALUES ('".$hma."', '".$hme."', CURRENT_TIMESTAMP, '".$nota."', '".$psico."');";
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