<?php 
	extract($_GET);
	echo $hm_mat; //tbl_user
	echo $pass; //tbl_user
	//SQL de inserción
	$sql = "INSERT INTO `tbl_user` (`user_matricula`, `user_pwd`) VALUES ('".$hm_mat."', '".$pass."');";
	//Insertamos el usuario en la BD
		mysqli_query($conexion,$sql);
	//cojemos el user_id de la ultima inserción realizada
		$last_id = mysqli_insert_id($conexion);
	echo $last_id;die;
	echo $notes; //tbl_hma
?>