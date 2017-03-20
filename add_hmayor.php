<?php 
 ?>
 <form action="add_hmayor.pro.php" method="GET">
 	<table border>
 		<tr>
 			<td>Matrícula</td>
 			<td><input type="text" name="hm_mat" id="hm_mat"></td>
 		</tr>
 		<tr>
 			<td>Campos que puede contribuir</td>
 			<td>
 				<input type="checkbox" name="cont[]" id="cont[]" value="Bulling"  /> Bulling  <br/>
 				<input type="checkbox" name="cont[]" id="cont[]" value="autoestima"/> Autoestima <br/>
				<input type="checkbox" name="cont[]" id="cont[]" value="Matematicas"/> Matematicas <br/>
 			</td>
 		</tr>
 		<tr>
 			<td>Contraseña</td>
 			<td><input type="pass" /></td>
 		<tr>
 		<tr>
 			<td>Repetir Contraseña</td>
 			<td><input type="rpass" /></td>
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