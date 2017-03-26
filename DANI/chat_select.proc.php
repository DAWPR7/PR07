
<?php
// include_once "includes/conexion_bd.php";
include "includes/conexion_bd.php";

extract($_REQUEST);



// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA DIÁLOGO:


$selectRespuesta = $databaseConnection->prepare("SELECT * FROM tbl_dialogo WHERE his_id=:his_id AND dia_id>:dia_id");

              $selectRespuesta->bindParam(':his_id', $his_id);
              $selectRespuesta->bindParam(':dia_id', $ultimo_id);
              $selectRespuesta->execute();

              $rows=$selectRespuesta->fetchAll(PDO::FETCH_ASSOC);
            
              echo json_encode($rows);




?>
