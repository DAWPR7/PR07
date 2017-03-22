<?php
	require_once("includes/conexion.proc.php");
	//Creamos la consulta para la busqueda del hermano menor que tenga estado disponible:
	$hmenor_sql="SELECT * FROM `tbl_hmenor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmenor`.`user_id` WHERE `hme_estado` = 'libre'";
	$hmayor_sql="SELECT * FROM `tbl_hmayor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmayor`.`user_id` WHERE `hma_estado` = 'libre'";
	$psi_sql = "SELECT * FROM `tbl_psico`";
	$hmenor_query = mysqli_query($conexion,$hmenor_sql);
	$hmayor_query = mysqli_query($conexion,$hmayor_sql);
	$psi_query = mysqli_query($conexion,$psi_sql);
?>
	<form action="add_terapia.proc.php" method="POST">
		<table border>
			<tr>
				<td>Seleccione al hermano menor:</td>
				<td>
					<select name="hmenor" id = "hmenor">
						<option value="0" selected>Seleccione a hermano menor </option>
					<?php 
						if(mysqli_num_rows($hmenor_query)>=1)
						{
							while($hmenor = mysqli_fetch_array($hmenor_query))
							{
								echo "<option value=".$hmenor['user_id'].">".$hmenor['user_matricula']."</option>";
							} 
						}
						else
						{
							echo "<option value='1'>No hay hermanos menores disponibles </option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Seleccione al hermano mayor:</td>
				<td>
					<select name="hmayor" id = "hmayor">
						<option value="0" selected>Seleccione a hermano mayor </option>
					<?php 
						if(mysqli_num_rows($hmayor_query)>=1)
						{
							while($hmayor = mysqli_fetch_array($hmayor_query))
							{
								echo "<option value=".$hmayor['user_id'].">".$hmayor['user_matricula']."</option>";
							} 
						}
						else
						{
							echo "<option value='1'>No hay hermanos mayores disponibles </option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Seleccione al psicologo:</td>
				<td>
					<select name="psico" id = "psico">
						<option value="0" selected>Seleccione un psicologo </option>
					<?php 
						if(mysqli_num_rows($psi_query)>=1)
						{
							while($psi = mysqli_fetch_array($psi_query))
							{
								echo "<option value=".$psi['user_id'].">".$psi['user_id']."</option>";
							} 
						}
						else
						{
							echo "<option value='a'>No hay psicologos disponibles </option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Notas del proyecto
				</td>

				<td>
					<textarea name="nota" id="nota">Inserte nota</textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" value="Enviar"></center></td>
			</tr>
		</table>
	</form>