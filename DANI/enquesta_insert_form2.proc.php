
<?php
// include_once "includes/conexion_bd.php";
include "includes/conexion_bd.php";

extract($_REQUEST);

$fecha = date('Y-m-d');
$for2_respuesta="SI";


$fisico=0;
$verbal=0;
$social=0;





// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA RESPUESTAS:
$insertRespuesta = $databaseConnection->prepare("INSERT INTO tbl_for2_resp (alu_id, for2_alu_id, for2_tipo, for2_pregunta, for2_respuesta, for2_fecha) VALUES (:alu_id, :for2_alu_id, :for2_tipo, :for2_pregunta, :for2_respuesta, :for2_fecha)");


              $insertRespuesta->bindParam(':alu_id', $alu_id);
              $insertRespuesta->bindParam(':for2_alu_id', $for2_alu_id);
              $insertRespuesta->bindParam(':for2_tipo', $for2_tipo);
              $insertRespuesta->bindParam(':for2_pregunta', $for2_pregunta);
              $insertRespuesta->bindParam(':for2_respuesta', $for2_respuesta);
              $insertRespuesta->bindParam(':for2_fecha', $fecha);




// ----- SQL PARA VER SI EXISTE EN RESULTADO:
$selectResultado = $databaseConnection->prepare("SELECT res_id FROM tbl_resultado WHERE alu_id=:alu_id AND res_data=:res_data ");
              
// SELECT res_id FROM tbl_resultado WHERE alu_id=1 AND res_data='2017-03-23' 

              $selectResultado->bindParam(':alu_id', $for2_alu_id);
              $selectResultado->bindParam(':res_data', $fecha);



// ----- SQL PARA SELECCIONAR LOS RESULTADOS DEL FORMULARIO:
$selectResultado = $databaseConnection->prepare("SELECT COUNT(for2_respuesta) AS TOTAL, for2_tipo FROM `tbl_for2_resp` WHERE for2_respuesta='SI', for2_fecha=:for2_fecha AND for2_alu_id=:for2_alu_id GROUP BY for2_alu_id, for2_tipo");
               

              $selectResultado->bindParam(':for2_alu_id', $for2_alu_id);
              $selectResultado->bindParam(':for2_fecha', $fecha);
              $selectResultado->bindParam(':for2_tipo', $for2_tipo);


              // SELECT COUNT(for2_respuesta) AS TOTAL, for2_alu_id, for2_tipo FROM `tbl_for2_resp` WHERE for2_respuesta="SI" GROUP BY for2_alu_id, for2_tipo



// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA RESULTADO:
$insertResultado = $databaseConnection->prepare("INSERT INTO tbl_resultado (alu_id, res_verbal, res_fisico, res_relacional, res_data) VALUES (:alu_id, :res_verbal, :res_fisico, :res_relacional, :res_data)");

              $insertResultado->bindParam(':alu_id', $for2_alu_id);
              $insertResultado->bindParam(':res_verbal', $res_verbal);
              $insertResultado->bindParam(':res_fisico', $res_fisico);
              $insertResultado->bindParam(':res_relacional', $res_relacional);
              $insertResultado->bindParam(':res_data', $fecha);



// ----- SQL PARA ACTUALIZAR REGISTROS EN LA TABLA RESULTADO:
$updateResultado = $databaseConnection->prepare("INSERT INTO tbl_resultado (alu_id, res_verbal, res_fisico, res_relacional, res_data) VALUES (:alu_id, :res_verbal, :res_fisico, :res_relacional, :res_data)");

 


// -------------------------------------------------------------------


// --- 1 INSERTAR RESPUESTAS:

  if($pre_1=="on"){
    $for2_tipo="FISICO";
    $for2_pregunta="pre_1";
    $insertRespuesta->execute();
    $fisico++;

  }
  if($pre_2=="on"){
    $for2_tipo="VERBAL";
    $for2_pregunta="pre_2";
    $insertRespuesta->execute();
    $verbal++;
  }
  if($pre_3=="on"){
    $for2_tipo="VERBAL";
    $for2_pregunta="pre_3";
    $insertRespuesta->execute();
    $verbal++;
  }
  if($pre_4=="on"){
    $for2_tipo="SOCIAL";
    $for2_pregunta="pre_4";
    $insertRespuesta->execute();
    $social++;
  }
  if($pre_5=="on"){
    $for2_tipo="FISICO";
    $for2_pregunta="pre_5";
    $insertRespuesta->execute();
    $fisico++;
  }
  if($pre_6=="on"){
    $for2_tipo="VERBAL";
    $for2_pregunta="pre_6";
    $insertRespuesta->execute();
    $verbal++;
  }
  if($pre_7=="on"){
    $for2_tipo="SOCIAL";
    $for2_pregunta="pre_7";
    $insertRespuesta->execute();
    $social++;
  }
  if($pre_8=="on"){
    $for2_tipo="SOCIAL";
    $for2_pregunta="pre_8";
    $insertRespuesta->execute();
    $social++;
  }
  if($pre_9=="on"){
    $for2_tipo="VERBAL";
    $for2_pregunta="pre_9";
    $insertRespuesta->execute();
    $verbal++;
  }
  if($pre_10=="on"){
    $for2_tipo="FISICO";
    $for2_pregunta="pre_10";
    $insertRespuesta->execute();
    $fisico++;
  }
  if($pre_11=="on"){
    $for2_tipo="FISICO";
    $for2_pregunta="pre_11";
    $insertRespuesta->execute();
    $fisico++;
  }
  if($pre_12=="on"){
    $for2_tipo="SOCIAL";
    $for2_pregunta="pre_12";
    $insertRespuesta->execute();
    $social++;
  }


// --- 2 VER SI EXISTE EL REGISTRO:


  $selectResultado->execute();

  $rows=$selectResultado->fetchColumn();

//echo $rows;
  if(empty($rows)){

    $res_verbal=$verbal;
    $res_fisico=$fisico;
    $res_relacional=$social;

    $insertResultado->execute();

  }else{
      $t_fisico=$rows;
      //
      $for2_tipo='VERBAL';
      $selectResultado->execute();
      $rows=$selectResultado->fetchColumn();
      $t_verbal=$rows;
      //
      $for2_tipo='SOCIAL';
      $selectResultado->execute();
      $rows=$selectResultado->fetchColumn();
      $t_social=$rows;

  }
           echo $t_fisico;
           echo $t_verbal;
           echo $t_social;  


?>
