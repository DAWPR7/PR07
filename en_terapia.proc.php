<?php 
	require_once("includes/conexion.proc.php");
	extract($_GET);
	
	//echo "hmenor id:" . $hmeid;
	//echo "historial id:" . $hisid;
	//Hacemos las consulta de seleccion de las notas de historial
		$his_notas_sql = "SELECT `his_comentario`, `hma_id` FROM `tbl_historial` WHERE `his_id` = ".$hisid;
		$his_hmenor_sql = "SELECT `hme_notas` FROM `tbl_hmenor` WHERE `hme_id` =".$hmeid;
	//Hacemos la query en la base de datos
		$his_notas_query = mysqli_query($conexion,$his_notas_sql);
		$his_hmenor_query = mysqli_query ($conexion,$his_hmenor_sql);
		//Lanzamos la consulta controlando el resultado
		if($his_notas_query){
			//Cogemos el valor del campo y le añadimos la nota escrita por el usuario y cogemos el valor del id del hermano mayor
			while($his_notas = mysqli_fetch_array($his_notas_query))
			{
				$new_nota = $his_notas['his_comentario'] . "<br/>
				Motivo de finalización: " . $note;
				$id_hma = $his_notas['hma_id'];
			}
				//Consulta para liberar al hermano mayor
				$free_hmayor = "UPDATE `tbl_hmayor` SET `hma_estado` = 'libre' WHERE `tbl_hmayor`.`hma_id` =".$id_hma;

					if(mysqli_query($conexion,$free_hmayor))
					{
						//echo $free_hmayor;die;
						//Ahora preparamos la consulta para insertar la nueva nota en la base de datos
						$update_hnote_sql = "UPDATE `tbl_historial` SET `his_comentario` = '".$new_nota."' WHERE `tbl_historial`.`his_id` =".$hisid;
						//Lanzamos la consulta controlando el resultado
			 				if(mysqli_query($conexion,$update_hnote_sql))
			 				{	//lanzamos la consulta para extraer las notas de la BD
			 					//$his_hmenor_query = mysqli_query ($conexion,$his_hmenor_sql);
			 						//Controlamos el resultado
									if($his_hmenor_query)
									{
										//Cogemos el valor del campo y le añadimos la nota escrita por el usuario
										while($hmenor_notas = mysqli_fetch_array($his_hmenor_query))
											{
												$new_nota = $hmenor_notas['hme_notas'] . "<br/>
												Motivo de finalización: " . $note;
											}
										//La insertamos en la BBDD
										$update_hmenor_sql = "UPDATE `tbl_hmenor` SET `hme_notas` = '".$new_nota."', `hme_estado` = 'inactivo' WHERE `tbl_hmenor`.`hme_id` =".$hmeid;
										//Lanzamos la consulta controlando el resultado
										if(mysqli_query($conexion,$update_hmenor_sql))
											{	//En este punto, si la insercion se ha resuelto correctamente, mostramos mensaje
												echo "<script type='text/javascript'>alert('Terapia finalizada con éxito');
												location.href='orientacion.php';</script>";
											}
											else
												{
													echo "<script type='text/javascript'>alert('Error');
													location.href='en_terapia.php';</script>";
												}		
									}
									else
									{
										echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
									}
								
								
			 				}//End nota	historial
			 				else
								{
									echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
								}
			 			}//End hmayor
 					else
						{
							echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
						}
		} //END if notas_query
		else
		{
			echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
		}