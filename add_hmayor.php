

		<script type="text/javascript">
			function val_addhmayor()
			{
				var error="";
				if(document.getElementById('hm_mat').value=="")
				{
					error+="La matrícula del alumno no puede estar vacio \n";

					document.getElementById('hm_mat').style.borderColor="red";
				}
				else if(isnum(document.getElementById('hm_mat').value))
						{
							error+="error, la matricula debe ser un número";
						}
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
				if(document.getElementById('notes').value=="Anotaciones sobre el hermano mayor")
				{
					error+="Debe introducir alguna nota sobre el hermano mayor";
					document.getElementById('notes').style.borderColor="red";
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
	
<?php 
 ?>
		 <form action="add_hmayor.proc.php" method="GET">
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
		 			<td><input type="password" name="rpass" id="rpass"/></td>
		 		<tr>
		 		<tr>
		 			<td>Notas</td>
		 			<td><textarea rows="4" name="notes" id="notes">Anotaciones sobre el hermano mayor</textarea></td>
		 		</tr>

		 		<tr>
		 			<td colspan="2"><input type="submit" value="Enviar" onclick="return val_addhmayor();"></td>
		 		</tr>
		 	</table>
		 </form>
 	<?php 
		require_once("footer.php"); 
	?>