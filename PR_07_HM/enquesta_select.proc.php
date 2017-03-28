
<?php
include_once "includes/conexion_bd.php";

 extract($_REQUEST);

// $alu_etapa=ESO;
// $alu_curso=1;

if(isset($alu_etapa) and isset($alu_curso)){

	// echo "dentro";
	$selectAlumnoFormulario = $databaseConnection->prepare("SELECT * FROM tbl_alumno WHERE alu_etapa=:alu_etapa AND alu_curso=:alu_curso");

				$selectAlumnoFormulario->bindParam(':alu_etapa', $alu_etapa);
              	$selectAlumnoFormulario->bindParam(':alu_curso', $alu_curso);

              	$selectAlumnoFormulario->execute();

              	$rows=$selectAlumnoFormulario->fetchAll(PDO::FETCH_ASSOC);
            
              	echo json_encode($rows);



}
// echo "fuera";


?>
