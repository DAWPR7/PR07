<?php 
	require_once("includes/conexion.proc.php");
	extract($_GET);
	$hmayor_sql="SELECT * 
				FROM `tbl_hmayor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmayor`.`user_id` 
				WHERE `hma_estado` = 'libre' AND `hma_id`!=".$id;
	$hmayor_query = mysqli_query($conexion,$hmayor_sql);
	
	
	/*echo "Seleccione al hermano mayor: <br/>";
	while($hmayor = mysqli_fetch_array($hmayor_query))
							{
								echo "<option value=".$hmayor['user_id'].">".$hmayor['user_matricula']."</option>";
							} */
 ?>
 	<form action="ch_hmayor.proc.php">
 			Seleccione al hermano mayor:
				<br/>
		<select name="hmayor" id = "hmayor">
			<option value="0" selected>Seleccione a hermano mayor </option>
				<?php 
					if(mysqli_num_rows($hmayor_query)>=1)
					{
						while($hmayor = mysqli_fetch_array($hmayor_query))
						{
							echo "<option value=".$hmayor['hma_id'].">".$hmayor['user_matricula']."</option>";
						} 
					}
					else
					{
						echo "<option value='1'>No hay hermanos mayores disponibles </option>";
					}
					?>
		</select>
		<input type='radio' id='id' name='id' value=<?php echo "'$hid'"; ?> checked />
		<input type='radio' id='old_hmaid' name='old_hmaid' value=<?php echo "'$id'"; ?> checked />
		<br/>
		<input type="submit" value="Enviar">
	</form>