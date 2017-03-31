	<form action="ch_note_hmenor.proc.php">
		
	
	<?php 
		require_once("includes/conexion.proc.php");
		extract($_GET);
		$sql="SELECT * FROM `tbl_hmenor` WHERE `hme_id`=".$id;
		//echo $sql;die;
		$hmenor = mysqli_query($conexion,$sql);
		while($note_hmenor = mysqli_fetch_array($hmenor))
		{
			echo"<textarea name='comentario' id='comentario'>".$note_hmenor['hme_notas']."</textarea>";
			echo "<input type='radio' id='id' name='id' value='".$id."' checked style='display:none'/>";
			echo "<br/><input type='submit' value='Modificar nota' />";
		}
	 ?>
	 </form>