 <?php
	//Página que muestra las fechas del último mensaje del hermano menor y del hermano mayor
	require_once("includes/conexion.proc.php");
	extract($_REQUEST);
	//SELECT * from `tbl_historial` WHERE `hme_id` = 1 order by `his_id` DESC limit 0,1
	//Consulta para coger el último registro mediante el id del hermano menor
		$select_his_sql = "SELECT * from `tbl_historial` WHERE `hme_id` = ".$hmenor." order by `his_id` DESC limit 0,1";
		//hacemos la Query
		$select_his_query = mysqli_query($conexion, $select_his_sql);
		if($select_his_query) {
			//Cogemos el id del historial
			while($select_his = mysqli_fetch_array($select_his_query)) {
				$his_id = $select_his['his_id'];
			}
			//SELECT * FROM `tbl_dialogo` where `his_id`=11 and `dia_tipo` = "h_me" order by `his_id` DESC limit 0,1
			//Seleccionamos la fecha del último mensaje enviado por el hermano menor
			$last_msg_hmenor = "SELECT * FROM `tbl_dialogo` where `his_id`=".$his_id." and `dia_tipo` = 'h_me' order by `his_id` DESC limit 0,1";
			$last_msg_hmayor = "SELECT * FROM `tbl_dialogo` where `his_id`=".$his_id." and `dia_tipo` = 'h_ma' order by `his_id` DESC limit 0,1";
			$notes_hist = "SELECT * FROM `tbl_historial` WHERE `his_id` =".$his_id;

			//Lanzamos las QUERYS
			$last_msg_hmenor_query = mysqli_query($conexion,$last_msg_hmenor);
			$last_msg_hmayor_query = mysqli_query($conexion,$last_msg_hmayor);
			$notes_hist_query = mysqli_query($conexion,$notes_hist);

			$msg_h = array();
				if($last_msg_hmenor_query) {
					while($last_msg_hmenor = mysqli_fetch_array($last_msg_hmenor_query)) {
						$msg_h[0]=array('hmenor'=>$last_msg_hmenor['dia_fecha']);
					}
					//echo $date_last_hme;
				}//end last_msg_hmenor
				if($notes_hist_query){
					while($n_hist = mysqli_fetch_array($notes_hist_query)){
						$msg_h[1] = array('notes' =>$n_hist['his_comentario']);
					}
				}
				if($last_msg_hmayor_query) {
					while ($last_msg_hmayor = mysqli_fetch_array($last_msg_hmayor_query)) {
						$msg_h[2]=array('hmayor'=>$last_msg_hmayor['dia_fecha']);
					}
					echo json_encode($msg_h);
				} else {
					echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
				}
		} else {
			echo "<script type='text/javascript'>alert('Error');
											location.href='en_terapia.php';</script>";
		}
 ?>
