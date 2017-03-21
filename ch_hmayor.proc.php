<?php 
extract($_GET);
	require_once("includes/conexion.proc.php");
	//Creamos una consulta para actualizar los datos en la tbl_user
	$user_sql="UPDATE `tbl_user` SET `user_pwd` = '".$pass."' WHERE `tbl_user`.`user_matricula` = ".$hm_mat.";";
	//Lanzamos la consulta a la BD controlando si hay errores
		if(mysqli_query($conexion,$user_sql)){		
		//Hacemos la consulta para coger el id de usuario para la consulta de la tbl_hmayor
			$id_sql="SELECT * FROM `tbl_user` WHERE `tbl_user`.`user_matricula` = ".$hm_mat."";
			if($id_query=mysqli_query($conexion,$id_sql))
			{		
				while($user_id = mysqli_fetch_array($id_query))
				{
					$id=$user_id['user_id'];
				}
				//Hacemos la consulta para actualizar los datos en la tbl_hmayor
				$hmayor_sql="UPDATE `tbl_hmayor` SET `hma_notas` = '".$notes."' WHERE `tbl_hmayor`.`hma_id` = ".$id.";";
				//Lanzamos la consulta a la bd
				if(mysqli_query($conexion,$hmayor_sql))
				{
					//Si hemos llegado a este punto significa que la modificación a sido correcta
					echo "<script type='text/javascript'>alert('Modificación correcta');
					location.href='ch_hmayor.php';</script>";
				}
				else
				{
				echo "<script type='text/javascript'>alert('¡Ups! Error inesperado, porfavor, vuelva a intentarlo');
				location.href='ch_hmayor.php';</script>";
				}//End else
			}//End if
			else 
			{
			echo "<script type='text/javascript'>alert('¡Ups! Error inesperado, porfavor, vuelva a intentarlo');
				location.href='ch_hmayor.php';</script>";
			}//End else
	}//End if
	else
	{
		echo "<script type='text/javascript'>alert('¡Ups! Error inesperado, porfavor, vuelva a intentarlo');
				location.href='ch_hmayor.php';</script>";
	} //End else
 ?>