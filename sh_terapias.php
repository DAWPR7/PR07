	<script type="text/javascript">
		function add_note()
		{
			document.getElementById("ch_note").style.display="block";
		}
	</script>
	
		<?php 
			require_once("includes/conexion.proc.php");
			$sh_terapias_sql = "
				SELECT *
					FROM `tbl_historial` RIGHT JOIN `tbl_hmenor`
						ON `tbl_historial`.`hme_id` = `tbl_hmenor`.`hme_id`
					WHERE `tbl_hmenor`.`hme_estado` = 'ocupado'";
			$sh_terapias = mysqli_query($conexion, $sh_terapias_sql);
			/*while($terapia = mysqli_fetch_array($sh_terapias))
			{
				echo "<table border>";
				echo "<tr>
 					<td>
 						Hermano menor:
 					</td>";
 						//Consulta para coger al user id de la BD
 							$id_hme_sql = "SELECT `user_id`from `tbl_hmenor` WHERE `hme_id` = ".$terapia['hme_id'];
 							//echo $id_hme_sql;die;
 								$id_hme_query = mysqli_query($conexion,$id_hme_sql);

 								while($id_hme = mysqli_fetch_array($id_hme_query))
 								{
 									$sql_mat_hme="SELECT `user_matricula` FROM `tbl_user` WHERE `user_id` = ".$id_hme['user_id'];
 									$mat_hme = mysqli_query($conexion,$sql_mat_hme);
 									while($matricula_hme = mysqli_fetch_array($mat_hme))
 									{
										echo"<td>".$matricula_hme['user_matricula']."</td>";
 									}
 								}
 							
					//Consulta para coger la matricula del hermno mayor
 							//$sql_mat_hma = "SELECT `user_matricula` FROM `tbl_user` WHERE `hma_id` = ".$terapia['hma_id'];
 							//echo $sql_mat_hma;die;
				echo "<td>
						Hermano mayor:
					  </td>";
					  //Consulta para coger al user id de la BD
 							$id_hma_sql = "SELECT `user_id`from `tbl_hmayor` WHERE `hma_id` = ".$terapia['hma_id'];
 							//echo $id_hma_sql;die;
 								$id_hma_query = mysqli_query($conexion,$id_hma_sql);
 								
 								while($id_hma = mysqli_fetch_array($id_hma_query))
 								{
 									$sql_mat_hma="SELECT `user_matricula` FROM `tbl_user` WHERE `user_id` = ".$id_hma['user_id'];
 									$mat_hma = mysqli_query($conexion,$sql_mat_hma);
 									while($matricula_hma = mysqli_fetch_array($mat_hma))
 									{
										echo"<td>".$matricula_hma['user_matricula']."</td>";
 									}
 								}
 							
				echo "<tr>
 					<td colspan='2'>
 						Inicio de terapia
 					</td>";
 					
 					echo "<td colspan='2'>".$terapia['his_fecha_inicio']. "</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td colspan='4'><textarea readonly>".$terapia['his_comentario']."</textarea></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td><a href='ch_notas.php?id=".$terapia['his_id']."'><button>Modificar terapia</button></a></td>";
					echo "<td><a href='ch_hmayor.php?id=".$terapia['hma_id']."&hid=".$terapia['his_id']."'><button>Cambiar hermano mayor</button></a></td>";
					echo "<td><a href='en_terapia.php?id=".$terapia['his_id']."'><button>Finalizar terapia</button></a></td>";
				echo "</tr>";
				echo "</table>";

			}*/
			while($terapia = mysqli_fetch_array($sh_terapias,MYSQL_ASSOC))
			{
				$te_array[]=$terapia;
			}
			echo json_encode($te_array);
		 ?>
	</table>