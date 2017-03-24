<?php

if(isset($_POST['submitmsg'])) {
    $mensaje_menor = $_POST['usermsg'];
    $sql = ("UPDATE `tbl_dialogo`
            SET TEXT = '".$mensaje_menor."'
            WHERE name = 'pseudo_fieldName' LIMIT 1");
    header("Location: hmenor.php");
}

?>
