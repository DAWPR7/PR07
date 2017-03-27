<?php 
	require_once("includes/conexion.proc.php");
	//Página de selección de hermanos menores  para seguir los casos
		//Consulta de selección del hermano menor
		$hmenor_sql="SELECT * FROM `tbl_hmenor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmenor`.`user_id` WHERE `hme_estado` = 'ocupado'";
		//Petición a la BBDD
		$hmenor_query = mysqli_query($conexion,$hmenor_sql);

 ?>
 <form action="s_caso_hmenor.php" method="POST">
		<table border>
			<tr>
				<td>Seleccione al hermano menor:</td>
				<td>
					<select name="hmenor" id = "hmenor">
						<option value="0" selected>Seleccione a hermano menor </option>
					<?php 
						//Rellenamos el SELECT
						if(mysqli_num_rows($hmenor_query)>=1)
						{
							while($hmenor = mysqli_fetch_array($hmenor_query))
							{
								echo "<option value=".$hmenor['hme_id'].">".$hmenor['user_matricula']."</option>";
							} 
						}
						else
						{
							echo "<option value='1'>No hay casos activos </option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Enviar">
				</td>
			</tr>
		</table>