	
		<?php 
			require_once("includes/conexion.proc.php");
			$sh_terapias_sql = "
				SELECT *
					FROM `tbl_historial` RIGHT JOIN `tbl_hmenor`
						ON `tbl_historial`.`hme_id` = `tbl_hmenor`.`hme_id`
                        RIGHT JOIN `tbl_user` ON `tbl_hmenor`.`user_id` = `tbl_user`.`user_id`
					WHERE `tbl_hmenor`.`hme_estado` = 'ocupado'";
			$sh_terapias = mysqli_query($conexion, $sh_terapias_sql);

			while($terapia = mysqli_fetch_array($sh_terapias,MYSQL_ASSOC))
			{
				$te_array[]=$terapia;
			}
			echo json_encode($te_array);
		 ?>
