<?php
	session_start();
echo $email=$_POST['email'];
echo $password=$_POST['password'];

include("conexion.proc.php");

$proceso= $conexion->query("SELECT user_id FROM tbl_user WHERE user_matricula='$email' AND user_pwd = '$password'");
	
	

	if(mysqli_num_rows($proceso)>0){
		$resultado = mysqli_fetch_array($proceso);
		$user_id = $resultado['user_id'];
		if (!empty($user_id)){
			$proceso1= $conexion->query("SELECT hma_id FROM tbl_hmayor WHERE user_id='$user_id'");

			$proceso2= $conexion->query("SELECT hme_id FROM tbl_hmenor WHERE user_id='$user_id'");
			$resultado1 = mysqli_fetch_array($proceso1);

			if (!empty($resultado1)){
				$hma_id=$resultado1['hma_id'];
				
			}
			$resultado2 = mysqli_fetch_array($proceso2);

			if (!empty($resultado2)){
				$hme_id=$resultado2['hme_id'];
			}
			if (isset($hma_id) AND isset($hme_id)){

				header("location: menormayor.php");

			}elseif(isset($hma_id)){

				header("location: penemayor.php");


			}elseif(isset($hme_id)){
				header("location: penemenor.php");
			}
			$proceso3= $conexion->query("SELECT psi_id FROM tbl_psico WHERE user_id='$user_id'");
			$resultado3 = mysqli_fetch_array($proceso3);
			if (!empty($resultado3)){
				$psi_id=$resultado3['psi_id'];
				header("location: penepsicologo.php");
			}



			$proceso4= $conexion->query("SELECT adm_id FROM tbl_admin WHERE user_id='$user_id'");
			$resultado4 = mysqli_fetch_array($proceso4);
			if (!empty($resultado4)){
				$adm_id=$resultado4['adm_id'];
				header("location: peneadmin.php");
			}
		}
	}
		

?>