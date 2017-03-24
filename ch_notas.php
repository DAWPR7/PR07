	<form action="ch_note.proc.php">
		
	
	<?php 
		require_once("includes/conexion.proc.php");
		extract($_GET);
		$sql="SELECT * FROM `tbl_historial` WHERE `his_id`=".$id;
		//echo $sql;die;
		$terapia = mysqli_query($conexion,$sql);
		while($sterapia = mysqli_fetch_array($terapia))
		{
			echo"<textarea name='comentario' id='comentario'>".$sterapia['his_comentario']."</textarea>";
			echo "<input type='radio' id='id' name='id' value='".$id."' checked style='display:none'/>";
			echo "<br/><input type='submit' value='Modificar nota' />";
		}
	 ?>
	 </form>