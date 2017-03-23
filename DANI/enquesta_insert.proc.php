
<?php
// include_once "includes/conexion_bd.php";
include "includes/conexion_bd.php";

ECHO " EXTRACT: ";
extract($_REQUEST);




// ----- SQL PARA INSERTAR REGISTROS EN LA TABLA RESPUESTAS:

$insertRespuesta = $databaseConnection->prepare("INSERT INTO tbl_respuesta (alu_id, res_pregunta, res_tipo, res_respuesta) VALUES (:alu_id, :res_pregunta, :res_tipo, :res_respuesta)");

              $insertRespuesta->bindParam(':alu_id', $alu_id);
              $insertRespuesta->bindParam(':res_pregunta', $res_pregunta);
              $insertRespuesta->bindParam(':res_tipo', $res_tipo);
              $insertRespuesta->bindParam(':res_respuesta', $res_respuesta);
              //$insertRespuesta->execute();


// ----- SQL PARA SELECCIONAR TODOS LOS ALUMNOS:

$selectAlumnos = $databaseConnection->prepare("SELECT * FROM tbl_alumno");

              $selectAlumnos->execute();

              $rows=$selectAlumnoFormulario->fetchAll(PDO::FETCH_ASSOC);



if(!empty($pre_1)){
  echo " dentro de PR1: ";
  $res_pregunta="pre_1";
  $res_tipo="tipo1";
  $res_respuesta=$pre_1;
  $insertRespuesta->execute();
}

if(!empty($pre_2)){
  $res_pregunta="pre_2";
  $res_respuesta=$pre_2;
  $res_tipo="tipo2";
  $insertRespuesta->execute();
}
if(!empty($pre_3)){
  $res_pregunta="pre_3";
  $res_respuesta=$pre_3;
  $res_tipo="tipo3";
  $insertRespuesta->execute();
}
if(!empty($pre_4)){
  $res_pregunta="pre_4";
  $res_respuesta=$pre_4;
  $res_tipo="tipo4";
  $insertRespuesta->execute();
}
if(!empty($pre_5)){
  $res_pregunta="pre_5";
  $res_respuesta=$pre_5;
  $res_tipo="tipo5";
  $insertRespuesta->execute();
}
if(!empty($pre_6)){
  $res_pregunta="pre_6";
  $res_respuesta=$pre_6;
  $res_tipo="tipo6";
  $insertRespuesta->execute();
}
if(!empty($pre_7)){
  $res_respuesta=$pre_7;
  if($pre_7_1=="on"){
    $res_tipo="MALTRATO 1";
    $res_pregunta="pre_7_1";
    $insertRespuesta->execute();
  }
  if($pre_7_2=="on"){
    $res_tipo="MALTRATO 1";
    $res_pregunta="pre_7_2";
    $insertRespuesta->execute();
  }
  if($pre_7_3=="on"){
    $res_tipo="MALTRATO 2";
    $res_pregunta="pre_7_3";
    $insertRespuesta->execute();
  }
  if($pre_7_4=="on"){
    $res_tipo="MALTRATO 2";
    $res_pregunta="pre_7_4";
    $insertRespuesta->execute();
  }
  if($pre_7_5=="on"){
    $res_tipo="MALTRATO 3";
    $res_pregunta="pre_7_5";
    $insertRespuesta->execute();
  }
  if($pre_7_6=="on"){
    $res_tipo="MALTRATO 3";
    $res_pregunta="pre_7_6";
    $insertRespuesta->execute();
  }
  if($pre_7_7=="on"){
    $res_tipo="MALTRATO 4";
    $res_pregunta="pre_7_7";
    $insertRespuesta->execute();
  }
  if($pre_7_8=="on"){
    $res_tipo="MALTRATO 4";
    $res_pregunta="pre_7_8";
    $insertRespuesta->execute();
  }
  if($pre_7_9=="on"){
    $res_tipo="MALTRATO 5";
    $res_pregunta="pre_7_9";
    $insertRespuesta->execute();
  }
  if($pre_7_10=="on"){
    $res_tipo="MALTRATO 5";
    $res_pregunta="pre_7_10";
    $insertRespuesta->execute();
  }
  if($pre_7_11=="on"){
    $res_tipo="MALTRATO 6";
    $res_pregunta="pre_7_11";
    $insertRespuesta->execute();
  }
}

if(!empty($pre_8)){
  $res_respuesta=$pre_8;
  if($pre_8_1=="on"){
    $res_tipo="MALTRATO 1";
    $res_pregunta="pre_8_1";
    $insertRespuesta->execute();
  }
  if($pre_8_2=="on"){
    $res_tipo="MALTRATO 1";
    $res_pregunta="pre_8_2";
    $insertRespuesta->execute();
  }
  if($pre_8_3=="on"){
    $res_tipo="MALTRATO 2";
    $res_pregunta="pre_8_3";
    $insertRespuesta->execute();
  }
  if($pre_8_4=="on"){
    $res_tipo="MALTRATO 2";
    $res_pregunta="pre_8_4";
    $insertRespuesta->execute();
  }
  if($pre_8_5=="on"){
    $res_tipo="MALTRATO 3";
    $res_pregunta="pre_8_5";
    $insertRespuesta->execute();
  }
  if($pre_8_6=="on"){
    $res_tipo="MALTRATO 3";
    $res_pregunta="pre_8_6";
    $insertRespuesta->execute();
  }
  if($pre_8_7=="on"){
    $res_tipo="MALTRATO 4";
    $res_pregunta="pre_8_7";
    $insertRespuesta->execute();
  }
  if($pre_8_8=="on"){
    $res_tipo="MALTRATO 4";
    $res_pregunta="pre_8_8";
    $insertRespuesta->execute();
  }
  if($pre_8_9=="on"){
    $res_tipo="MALTRATO 5";
    $res_pregunta="pre_8_9";
    $insertRespuesta->execute();
  }
  if($pre_8_10=="on"){
    $res_tipo="MALTRATO 5";
    $res_pregunta="pre_8_10";
    $insertRespuesta->execute();
  }
  if($pre_8_11=="on"){
    $res_tipo="MALTRATO 6";
    $res_pregunta="pre_8_11";
    $insertRespuesta->execute();
  }
}


if(!empty($pre_9)){
  $res_respuesta=$pre_9;
  if($pre_9_1=="on"){
    $res_tipo="MALTRATO 1";
    $res_pregunta="pre_9_1";
    $insertRespuesta->execute();
  }
  if($pre_9_2=="on"){
    $res_tipo="MALTRATO 1";
    $res_pregunta="pre_9_2";
    $insertRespuesta->execute();
  }
  if($pre_9_3=="on"){
    $res_tipo="MALTRATO 2";
    $res_pregunta="pre_9_3";
    $insertRespuesta->execute();
  }
  if($pre_9_4=="on"){
    $res_tipo="MALTRATO 2";
    $res_pregunta="pre_9_4";
    $insertRespuesta->execute();
  }
  if($pre_9_5=="on"){
    $res_tipo="MALTRATO 3";
    $res_pregunta="pre_9_5";
    $insertRespuesta->execute();
  }
  if($pre_9_6=="on"){
    $res_tipo="MALTRATO 3";
    $res_pregunta="pre_9_6";
    $insertRespuesta->execute();
  }
  if($pre_9_7=="on"){
    $res_tipo="MALTRATO 4";
    $res_pregunta="pre_9_7";
    $insertRespuesta->execute();
  }
  if($pre_9_8=="on"){
    $res_tipo="MALTRATO 4";
    $res_pregunta="pre_9_8";
    $insertRespuesta->execute();
  }
  if($pre_9_9=="on"){
    $res_tipo="MALTRATO 5";
    $res_pregunta="pre_9_9";
    $insertRespuesta->execute();
  }
  if($pre_9_10=="on"){
    $res_tipo="MALTRATO 5";
    $res_pregunta="pre_9_10";
    $insertRespuesta->execute();
  }
  if($pre_9_11=="on"){
    $res_tipo="MALTRATO 6";
    $res_pregunta="pre_9_11";
    $insertRespuesta->execute();
  }
}




if(!empty($pre_3)){
  $res_pregunta="pre_3";
  $res_respuesta=$pre_3;
  $res_tipo="tipo1";
}


// echo " || pre_1: ".$pre_1;
// echo " || pre_2: ".$pre_2;
// echo " || pre_3: ".$pre_3;
// echo " || pre_4: ".$pre_4;
// echo " || pre_5: ".$pre_5;
// echo " || pre_6: ".$pre_6;
// echo " || pre_7: ".$pre_7;

// echo " || pre_7_1: ".$pre_7_1;
// echo " || pre_7_2: ".$pre_7_2;
// echo " || pre_7_3: ".$pre_7_3;
// echo " || pre_7_4: ".$pre_7_4;
// echo " || pre_7_5: ".$pre_7_5;
// echo " || pre_7_6: ".$pre_7_6;
// echo " || pre_7_7: ".$pre_7_7;
// echo " || pre_7_8: ".$pre_7_8;
// echo " || pre_7_9: ".$pre_7_9;
// echo " || pre_7_10: ".$pre_7_10;
// echo " || pre_7_11: ".$pre_7_11;

// echo " || pre_8: ".$pre_8;

// echo " || pre_8_1: ".$pre_8_1;
// echo " || pre_8_2: ".$pre_8_2;
// echo " || pre_8_3: ".$pre_8_3;
// echo " || pre_8_4: ".$pre_8_4;
// echo " || pre_8_5: ".$pre_8_5;
// echo " || pre_8_6: ".$pre_8_6;
// echo " || pre_8_7: ".$pre_8_7;
// echo " || pre_8_8: ".$pre_8_8;
// echo " || pre_8_9: ".$pre_8_9;
// echo " || pre_8_10: ".$pre_8_10;
// echo " || pre_8_11: ".$pre_8_11;

// echo " || pre_9: ".$pre_9;

// echo " || pre_9_1: ".$pre_9_1;
// echo " || pre_9_2: ".$pre_9_2;
// echo " || pre_9_3: ".$pre_9_3;
// echo " || pre_9_4: ".$pre_9_4;
// echo " || pre_9_5: ".$pre_9_5;
// echo " || pre_9_6: ".$pre_9_6;
// echo " || pre_9_7: ".$pre_9_7;
// echo " || pre_9_8: ".$pre_9_8;
// echo " || pre_9_9: ".$pre_9_9;
// echo " || pre_9_10: ".$pre_9_10;
// echo " || pre_9_11: ".$pre_9_11;



?>
