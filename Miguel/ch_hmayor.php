 <?php 
 	require_once("includes/conexion.proc.php");
 	$sql="SELECT * FROM `tbl_user` WHERE `user_matricula` = 7874 ";
 	$sel_hmayor=mysqli_query($conexion,$sql);
 	while($hmayor=mysqli_fetch_array($sel_hmayor))
 	{
 		$hmayor_id = $hmayor["user_id"];
 		$hmayor_mat = $hmayor["user_matricula"];
 	}
 	$sql2 = "SELECT * FROM `tbl_hmayor` WHERE `user_id` = ".$hmayor_id." ";
 	$sel_hmayor2=mysqli_query($conexion,$sql2);
 	while($hmayor2=mysqli_fetch_array($sel_hmayor2))
 	{
 		$notas = $hmayor2['hma_notas'];
 	}
  ?>
  <script type="text/javascript">
			function val_chmayor()
			{
				var error="";
				if(document.getElementById('pass').value=="")
				{
					error+="La contraseña del alumno no puede estar vacia \n";
					document.getElementById('pass').style.borderColor="red";
				}
				if(document.getElementById('pass').value!=document.getElementById('rpass').value)
				{
					error+="Las contraseñas no coinciden \n";
					document.getElementById('rpass').style.borderColor="red";
					document.getElementById('pass').style.borderColor="red";
				}
				if(error!=""){
					alert(error);
					return false;
				}
				else{
					return true;
				}
			}
	</script>
 <form action="ch_hmayor.proc.php" method="GET">
		 	<table border>
		 		<tr>
		 			<td>Matrícula</td>
		 			<td><input type="text" name="hm_mat" id="hm_mat" value="<?php echo $hmayor_mat;?>" readonly></td>
		 		</tr>
		 		
		 		<tr>
		 			<td>Contraseña</td>
		 			<td><input type="password" name="pass" id="pass"/></td>
		 		<tr>
		 		<tr>
		 			<td>Repetir Contraseña</td>
		 			<td><input type="password" name="rpass" id="rpass"/></td>
		 		<tr>
		 		<tr>
		 			<td>Notas</td>
		 			<td><textarea rows="4" name="notes" id="notes"><?php echo $notas;?></textarea></td>
		 		</tr>

		 		<tr>
		 			<td colspan="2"><input type="submit" value="Enviar" onclick="return val_chmayor();"></td>
		 		</tr>
		 	</table>
		 </form>
 	<?php 
		require_once("footer.php"); 
	?>