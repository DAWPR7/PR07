
<?php
include_once "includes/conexion_bd.php";

// extract($_REQUEST);


$selectAlumnoFormulario = $databaseConnection->prepare("SELECT * FROM tbl_alumno");

              $selectAlumnoFormulario->execute();


              $rows=$selectAlumnoFormulario->fetchAll(PDO::FETCH_ASSOC);
            
              echo json_encode($rows);
?>
