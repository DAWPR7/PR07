
<?php
include_once "includes/conexion_bd.php";

// extract($_REQUEST);


$selectAlumnoFormulario = $databaseConnection->prepare("SELECT *, SUM(res_verbal+res_fisico+res_social) AS total FROM tbl_resultado GROUP BY res_id ORDER BY total desc");

              $selectAlumnoFormulario->execute();


              $rows=$selectAlumnoFormulario->fetchAll(PDO::FETCH_ASSOC);
            
              echo json_encode($rows);
?>
