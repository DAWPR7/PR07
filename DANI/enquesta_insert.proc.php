
<?php
include_once "includes/conexion_bd.php";

extract($_REQUEST);


$insertFormulario = $databaseConnection->prepare("INSERT INTO tbl_formulario (pre_1, pre_2, pre_3, pre_4, pre_5, pre_6, pre_7, pre_8, pre_9) VALUES (:pre_1, :pre_2, :pre_3, :pre_4, :pre_5, :pre_6, :pre_7, :pre_8, :pre_9);");

                  $insertFormulario->bindParam(':pre_1', $pre_1);
                  $insertFormulario->bindParam(':pre_2', $pre_2); 
                  $insertFormulario->bindParam(':pre_3', $pre_3);
                  $insertFormulario->bindParam(':pre_4', $pre_4);
                  $insertFormulario->bindParam(':pre_5', $pre_5);
                  $insertFormulario->bindParam(':pre_6', $pre_6);
                  $insertFormulario->bindParam(':pre_7', $pre_7);
                    $insertFormulario->bindParam(':pre_7_1', $pre_7_1);
                    $insertFormulario->bindParam(':pre_7_2', $pre_7_2);
                    $insertFormulario->bindParam(':pre_7_3', $pre_7_3);
                    $insertFormulario->bindParam(':pre_7_4', $pre_7_4);
                    $insertFormulario->bindParam(':pre_7_5', $pre_7_5);
                    $insertFormulario->bindParam(':pre_7_6', $pre_7_6);
                    $insertFormulario->bindParam(':pre_7_7', $pre_7_7);
                    $insertFormulario->bindParam(':pre_7_8', $pre_7_8);
                    $insertFormulario->bindParam(':pre_7_9', $pre_7_9);
                    $insertFormulario->bindParam(':pre_7_10', $pre_7_10);
                    $insertFormulario->bindParam(':pre_7_11', $pre_7_11);
                  $insertFormulario->bindParam(':pre_8', $pre_8);
                    $insertFormulario->bindParam(':categoria', $pre_8_1);
                    $insertFormulario->bindParam(':categoria', $pre_8_2);
                    $insertFormulario->bindParam(':categoria', $pre_8_3);
                    $insertFormulario->bindParam(':categoria', $pre_8_4);
                    $insertFormulario->bindParam(':categoria', $pre_8_5);
                    $insertFormulario->bindParam(':categoria', $pre_8_6);
                    $insertFormulario->bindParam(':categoria', $pre_8_7);
                    $insertFormulario->bindParam(':categoria', $pre_8_8);
                    $insertFormulario->bindParam(':categoria', $pre_8_9);
                    $insertFormulario->bindParam(':categoria', $pre_8_10);
                    $insertFormulario->bindParam(':categoria', $pre_8_11);
                  $insertFormulario->bindParam(':categoria', $pre_9);
                    $insertFormulario->bindParam(':categoria', $pre_9_1);
                    $insertFormulario->bindParam(':categoria', $pre_9_2);
                    $insertFormulario->bindParam(':categoria', $pre_9_3);
                    $insertFormulario->bindParam(':categoria', $pre_9_4);
                    $insertFormulario->bindParam(':categoria', $pre_9_5);
                    $insertFormulario->bindParam(':categoria', $pre_9_6);
                    $insertFormulario->bindParam(':categoria', $pre_9_7);
                    $insertFormulario->bindParam(':categoria', $pre_9_8);
                    $insertFormulario->bindParam(':categoria', $pre_9_9);
                    $insertFormulario->bindParam(':categoria', $pre_9_10);
                    $insertFormulario->bindParam(':categoria', $pre_9_11);
                  
                  //$insertPregunta->execute();





echo " || pre_1: ".$pre_1;
echo " || pre_2: ".$pre_2;
echo " || pre_3: ".$pre_3;
echo " || pre_4: ".$pre_4;
echo " || pre_5: ".$pre_5;
echo " || pre_6: ".$pre_6;
echo " || pre_7: ".$pre_7;

echo " || pre_7_1: ".$pre_7_1;
echo " || pre_7_2: ".$pre_7_2;
echo " || pre_7_3: ".$pre_7_3;
echo " || pre_7_4: ".$pre_7_4;
echo " || pre_7_5: ".$pre_7_5;
echo " || pre_7_6: ".$pre_7_6;
echo " || pre_7_7: ".$pre_7_7;
echo " || pre_7_8: ".$pre_7_8;
echo " || pre_7_9: ".$pre_7_9;
echo " || pre_7_10: ".$pre_7_10;
echo " || pre_7_11: ".$pre_7_11;

echo " || pre_8: ".$pre_8;

echo " || pre_8_1: ".$pre_8_1;
echo " || pre_8_2: ".$pre_8_2;
echo " || pre_8_3: ".$pre_8_3;
echo " || pre_8_4: ".$pre_8_4;
echo " || pre_8_5: ".$pre_8_5;
echo " || pre_8_6: ".$pre_8_6;
echo " || pre_8_7: ".$pre_8_7;
echo " || pre_8_8: ".$pre_8_8;
echo " || pre_8_9: ".$pre_8_9;
echo " || pre_8_10: ".$pre_8_10;
echo " || pre_8_11: ".$pre_8_11;

echo " || pre_9: ".$pre_9;

echo " || pre_9_1: ".$pre_9_1;
echo " || pre_9_2: ".$pre_9_2;
echo " || pre_9_3: ".$pre_9_3;
echo " || pre_9_4: ".$pre_9_4;
echo " || pre_9_5: ".$pre_9_5;
echo " || pre_9_6: ".$pre_9_6;
echo " || pre_9_7: ".$pre_9_7;
echo " || pre_9_8: ".$pre_9_8;
echo " || pre_9_9: ".$pre_9_9;
echo " || pre_9_10: ".$pre_9_10;
echo " || pre_9_11: ".$pre_9_11;



?>
