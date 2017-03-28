<?php
	//Consulta para ver a los hermanores menores que estan en penedientes de confirmación 
	require_once("includes/conexion.proc.php");
	$sh_ph_sql = "SELECT * FROM `tbl_hmenor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmenor`.`user_id` WHERE `hme_estado` = 'pendiente'";
	$sh_ph_query = mysqli_query($conexion,$sh_ph_sql);
	if($sh_ph_query)
	{
		if(mysqli_num_rows($sh_ph_query)>=1)
		{
			while ($sh_ph = mysqli_fetch_array($sh_ph_query))
			{
				echo "<table border>";
					echo "<tr><td>Matricula del alumno:</td>
						<td>". $sh_ph['user_matricula']."</td>";
					echo "<td>Motivo:</td><td>".$sh_ph['hme_notas']."</td></tr>";
					echo "<tr><td colspan='4'><a href='ap_solicitud.proc.php?id=".$sh_ph['hme_id']."'><button>Aprobar</button></a>";
				echo "</table>";
			}
		}
		else
		{
			echo "<table><tr><td>¡Ves a por un café! no hay solicitudes</td></tr></table>";
		}
	}//End if sh_ph
	
 ?>