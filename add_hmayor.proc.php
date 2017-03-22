<?php 
	extract($_GET);
	require_once("includes/conexion.proc.php");
	//Creamos una consulta para comprobar si existe un Hermano Mayor con esa matricula
		$comprobacion = "SELECT * FROM `tbl_user` WHERE `user_matricula` = ".$hm_mat."; ";
				//Hacemos la petición a la BD
				$result	=	mysqli_query($conexion,$comprobacion);
				//Contamos los resultados que nos devuelve la consulta anterior
				$total  = mysqli_num_rows($result); 
	//Si el SQL nos encuentra un resultado significa que ya existe
	if($total>=1)
	{
		echo "<script type='text/javascript'>alert('¡ERROR! el hermano mayor ".$hm_mat." ya existe');
				location.href='add_hmayor.php';</script>";
	}
	else //Si no dvuelve nada, significa que no existe y se puede insertar
	{
		//SQL de inserción
		$sql = "INSERT INTO `tbl_user` (`user_matricula`, `user_pwd`) VALUES ('".$hm_mat."', '".$pass."');";
		//Insertamos el usuario en la BD
			$resultado = mysqli_query($conexion,$sql);
			if($resultado)
				{
				//cojemos el user_id de la ultima inserción realizada
					$last_id = mysqli_insert_id($conexion);
					//Insertamos las notas con el último usuario insertado 
					$sql_insert2 = "INSERT INTO `tbl_hmayor` (`user_id`, `hma_notas`) VALUES ('".$last_id."', '".$notes."');";
					$resultado2 = mysqli_query($conexion,$sql_insert2);
					if($resultado2)
					{
						echo "<script type='text/javascript'>alert('El hermano mayor ".$hm_mat." ha sido dado de alta con éxito');
						location.href='add_hmayor.php';</script>";
					}
					else
					{
						echo "<script type='text/javascript'>alert('¡Ups! Error inesperado, porfavor, vuelva a intentarlo');
						location.href='add_hmayor.php';</script>";
					}//End else error insert2
				}
			else
			{
				echo "<script type='text/javascript'>alert('¡Ups! Error inesperado, porfavor, vuelva a intentarlo');
				location.href='add_hmayor.php';</script>";
			}//End else error insert
		
	}//End Else existente
?>