
<?php
// include_once "includes/conexion_bd.php";
include "includes/conexion_bd.php";

extract($_REQUEST);



// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA DIÁLOGO:


$selectRespuesta = $databaseConnection->prepare("SELECT dia_id, dia_mensaje, his_id, dia_tipo, DATE_FORMAT(dia_fecha,'%d-%m-%Y %k:%m:%s') AS dia_fecha FROM tbl_dialogo WHERE his_id=:his_id AND dia_id>:dia_id");

              $selectRespuesta->bindParam(':his_id', $his_id);
              $selectRespuesta->bindParam(':dia_id', $ultimo_id);
              $selectRespuesta->execute();

              // echo $his_id;
              // echo $ultimo_id;

              $rows=$selectRespuesta->fetchAll(PDO::FETCH_ASSOC);
            
              echo json_encode($rows);




?>
