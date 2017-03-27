
<?php
// include_once "includes/conexion_bd.php";
include "includes/conexion_bd.php";

extract($_REQUEST);



// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA DIÁLOGO:

// INSERT INTO tbl_dialogo (dia_mensaje, his_id, dia_tipo) VALUES (:dia_mensaje, :his_id, :dia_tipo);



$insertRespuesta = $databaseConnection->prepare("INSERT INTO tbl_dialogo (dia_mensaje, his_id, dia_tipo) VALUES (:dia_mensaje, :his_id, :dia_tipo)");

              $insertRespuesta->bindParam(':dia_mensaje', $dia_mensaje);
              $insertRespuesta->bindParam(':his_id', $his_id);
              $insertRespuesta->bindParam(':dia_tipo', $dia_tipo);
              $insertRespuesta->execute();

              echo "ok";



?>
