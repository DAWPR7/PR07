
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
$selectFormulario = $databaseConnection->prepare("SELECT COUNT(for2_respuesta) AS TOTAL, for2_alu_id, for2_tipo, for2_fecha FROM tbl_for2_resp WHERE for2_respuesta='SI' and for2_alu_id=:for2_alu_id AND for2_fecha=:for2_fecha GROUP BY for2_alu_id, for2_tipo");
               

              $selectFormulario->bindParam(':for2_alu_id', $for2_alu_id);
              $selectFormulario->bindParam(':for2_fecha', $fecha);


// ----- SQL PARA ACTUALIZAR LA TABLA RESULTADOS:
$updateResultado = $databaseConnection->prepare("UPDATE tbl_resultado SET res_verbal = :res_verbal, res_fisico = :res_fisico, res_social = :res_social WHERE res_data = :for2_fecha AND alu_id=:alu_id ");

              $updateResultado->bindParam(':res_verbal', $res_verbal);
              $updateResultado->bindParam(':res_fisico', $res_fisico);
              $updateResultado->bindParam(':res_social', $res_social);
              $updateResultado->bindParam(':alu_id', $for2_alu_id);
              $updateResultado->bindParam(':for2_fecha', $fecha);





// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA RESULTADO:
$insertResultado = $databaseConnection->prepare("INSERT INTO tbl_resultado (alu_id, res_verbal, res_fisico, res_social, res_data) VALUES (:alu_id, :res_verbal, :res_fisico, :res_social, :res_data)");

              $insertResultado->bindParam(':alu_id', $for2_alu_id);
              $insertResultado->bindParam(':res_verbal', $res_verbal);
              $insertResultado->bindParam(':res_fisico', $res_fisico);
              $insertResultado->bindParam(':res_social', $res_social);
              $insertResultado->bindParam(':res_data', $fecha);




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
    $res_social=$social;

    // echo $for2_alu_id." || ";
    // echo $res_verbal." || ";
    // echo $res_fisico." || ";
    // echo $res_social." || ";
    // echo $fecha." || ";
    // var_dump($insertResultado);
    $insertResultado->execute();

  }else{

      $selectFormulario->execute();
      $rows=$selectFormulario->fetchAll(PDO::FETCH_ASSOC);

      foreach ($rows as $valor){
        //print_r($valor);
        if($valor['for2_tipo']=='FISICO'){
          $res_fisico= $valor['TOTAL'];
        }
        if($valor['for2_tipo']=='VERBAL'){
          $res_verbal= $valor['TOTAL'];
        }
        if($valor['for2_tipo']=='SOCIAL'){
          $res_social= $valor['TOTAL'];
        }

      }

      $updateResultado->execute();

  }
       


?>
