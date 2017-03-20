<?php 
	extract($_GET);
	require_once("conexion.proc.php");
	//SQL de inserción
	$sql = "INSERT INTO `tbl_user` (`user_matricula`, `user_pwd`) VALUES ('".$hm_mat."', '".$pass."');";
	//Insertamos el usuario en la BD
		mysqli_query($conexion,$sql);
	//cojemos el user_id de la ultima inserción realizada
		$last_id = mysqli_insert_id($conexion);

	//Insertamos las notas con el último usuario insertado 
		$sql_insert2 = "INSERT INTO `tbl_hmayor` (`user_id`, `hma_notas`) VALUES ('".$last_id."', '".$notes."');";
		mysqli_query($conexion,$sql_insert2);
	echo "<script type='text/javascript'>alert('El hermano mayor ".$hm_mat." ha sido dado de alta con éxito');
			location.href='../add_hmayor.php';</script>";
?>