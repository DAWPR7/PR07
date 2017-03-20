<?php 
 ?>
		 <form action="proc/add_hmayor.proc.php" method="GET">
		 	<table border>
		 		<tr>
		 			<td>Matrícula</td>
		 			<td><input type="text" name="hm_mat" id="hm_mat"></td>
		 		</tr>
		 		
		 		<tr>
		 			<td>Contraseña</td>
		 			<td><input type="password" name="pass" id="pass"/></td>
		 		<tr>
		 		<tr>
		 			<td>Repetir Contraseña</td>
		 			<td><input type="password" name="pass" id="pass"/></td>
		 		<tr>
		 		<tr>
		 			<td>Notas</td>
		 			<td><textarea rows="4" name="notes" id="notes" >Anotaciones sobre el hermano mayor</textarea></td>
		 		</tr>

		 		<tr>
		 			<td colspan="2"><input type="submit" value="Enviar"></td>
		 		</tr>
		 	</table>
		 </form>
 	<?php 
		require_once("footer.php"); 
	?>