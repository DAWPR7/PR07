
<?php
include_once "includes/conexion_bd.php";

extract($_REQUEST);
	// echo " dolar max ".$max;
if ($max=='1') {
	$sentencia='(SELECT MAX(res_data)-1 FROM tbl_resultado)';
	// $res=1;
}elseif ($max=='2') {
	$sentencia='(SELECT MAX(res_data)-2 FROM tbl_resultado)';
}else{
	$sentencia='(SELECT MAX(res_data) FROM tbl_resultado)';
}

$res;
$etapa;

$selectAlumnoFormulario = $databaseConnection->prepare("SELECT res_id, tbl_resultado.alu_id, CONCAT(alu_nombre, ' ',alu_apellidos)AS nombre, SUM(res_verbal+res_fisico+res_social) AS total, res_fisico AS fisico, res_social AS social, res_verbal AS verbal, DATE_FORMAT(res_data,'%d-%m-%Y') AS fecha
FROM tbl_resultado
INNER JOIN tbl_alumno 
WHERE tbl_resultado.alu_id=tbl_alumno.alu_id and res_data =".$sentencia." AND alu_etapa='".$etapa."' AND alu_curso=".$curs."
GROUP BY res_id 
ORDER BY total desc");

              
              $selectAlumnoFormulario->execute();


              $rows=$selectAlumnoFormulario->fetchAll(PDO::FETCH_ASSOC);
            
              echo json_encode($rows);

// SELECT res_id, tbl_resultado.alu_id, CONCAT(alu_nombre, ' ',alu_apellidos)AS nombre, SUM(res_verbal+res_fisico+res_social) AS total, res_fisico AS fisico, res_social AS social, res_verbal AS verbal, MAX(res_data) AS fecha
// FROM tbl_resultado
// INNER JOIN tbl_alumno WHERE tbl_resultado.alu_id=tbl_alumno.alu_id
// GROUP BY res_id 
// ORDER BY total desc


// SELECT * FROM tbl_resultado
// WHERE res_data = (SELECT MAX(res_data) FROM tbl_resultado)


// SELECT res_id, tbl_resultado.alu_id, CONCAT(alu_nombre, ' ',alu_apellidos)AS nombre, SUM(res_verbal+res_fisico+res_social) AS total, res_fisico AS fisico, res_social AS social, res_verbal AS verbal, MAX(res_data) AS fecha
// FROM tbl_resultado
// INNER JOIN tbl_alumno 
// WHERE tbl_resultado.alu_id=tbl_alumno.alu_id and res_data = (SELECT MAX(res_data) FROM tbl_resultado)
// GROUP BY res_id 
// ORDER BY total desc


?>
