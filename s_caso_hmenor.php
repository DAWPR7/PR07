 <?php 
	//Página que muestra las fechas del último mensaje del hermano menor y del hermano mayor
	require_once("includes/conexion.proc.php");
	extract($_POST);
	//SELECT * from `tbl_historial` WHERE `hme_id` = 1 order by `his_id` DESC limit 0,1 
	//Consulta para coger el último registro mediante el id del hermano menor
		$select_his_sql = "SELECT * from `tbl_historial` WHERE `hme_id` = ".$hmenor." order by `his_id` DESC limit 0,1";
		//hacemos la Query
		$select_his_query = mysqli_query($conexion, $select_his_sql);
		if($select_his_query)
		{
			//Cogemos el id del historial
			while($select_his = mysqli_fetch_array($select_his_query))
			{
				$his_id = $select_his['his_id'];
			}
			//SELECT * FROM `tbl_dialogo` where `his_id`=11 and `dia_tipo` = "h_me" order by `his_id` DESC limit 0,1
			//Seleccionamos la fecha del último mensaje enviado por el hermano menor
			$last_msg_hmenor = "SELECT * FROM `tbl_dialogo` where `his_id`=".$his_id." and `dia_tipo` = 'h_me' order by `his_id` DESC limit 0,1";
			$last_msg_hmayor = "SELECT * FROM `tbl_dialogo` where `his_id`=".$his_id." and `dia_tipo` = 'h_ma' order by `his_id` DESC limit 0,1";
			
			//Lanzamos las QUERYS
			$last_msg_hmenor_query = mysqli_query($conexion,$last_msg_hmenor);
			$last_msg_hmayor_query = mysqli_query($conexion,$last_msg_hmayor);

				if($last_msg_hmenor_query)
				{
					while($last_msg_hmenor = mysqli_fetch_array($last_msg_hmenor_query))
					{
						$msg_h[0]= "hmenor:".$last_msg_hmenor['dia_fecha'];
					}
					//echo $date_last_hme;
				}//end last_msg_hmenor
				if($last_msg_hmayor_query)
				{
					while ($last_msg_hmayor = mysqli_fetch_array($last_msg_hmayor_query))
					{
						$msg_h[1] = "hmayor:".$last_msg_hmayor['dia_fecha'];
					}
					echo json_encode($msg_h,MYSQL_ASSOC);
				}
				else 
				{
					echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
				}
		}//End if select his
		else
		{
			echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
		}
 ?>
 	<!--<table borde>
 		<tr>
 			<td>
 				Fecha del último mensaje del hermano menor:
 			</td>
 			<td>
 				<?php echo $date_last_hme;?>
 			</td>
 		</tr>
 		<tr>
 			<td>
 				Fecha del último mensaje del hermano mayor:
 			</td>
 			<td>
 				<?php echo $date_last_hma;?>
 			</td>
 		</tr>
 	</table>-->