<?php 
	require_once("includes/conexion.proc.php");
	extract($_GET);
	//Consultamos en la base de datos el ID del hmenor.
	$hmeid_sql= "SELECT `hme_id` FROM `tbl_historial` WHERE `his_id` =".$id;
	$hmeid_query = mysqli_query($conexion,$hmeid_sql);
		while($hmeid = mysqli_fetch_array($hmeid_query))
		{
			//Asociamos el id del hermano menor a una variable para poder trabajar mejor con ella
			$hme_id = $hmeid['hme_id'];
		}
	//echo $hme_id;
 ?>
 	<form action = "en_terapia.proc.php" method = "GET">
 		<textarea name="note">
 			Inserte nota
 		</textarea>
 		<input type = "radio" name="hmeid" id = "hmeid" value='<?php echo "$hme_id";?>' style="display:none;" checked>
 		<input type = "radio" name="hisid" id = "hisid" value='<?php echo "$id";?>' style="display:none;" checked>
 		<br/>
 		<input type="submit" value="Enviar">
 	</form>