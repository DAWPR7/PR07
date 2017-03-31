<?php
session_start();

$titulo="Hermano Mayor";

if (!isset($_SESSION['usuario'])) {

  header('location:index.php');
}else{
  $hmenor_ini='';
  $hmayor_ini=$_SESSION['hma_id'];
  // $_SESSION['hme_id']='';
  include('chat_select_historial_id.proc.php');
}

if(empty($rows)){
  header('location:espera.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hermano Mayor</title>
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/css/login.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>

  <!-- ENLACES JS -->
    <!-- <script src="jsFunction/function.js"></script> -->

</head>



<body background="img/login.jpg">
  <div class="container">
    <?php
    include "includes/titulo.php";
    ?>
  </div>
  <div class="jumbotron" style="background:transparent !important">

      <!-- <h3>BULLYIN PRIMER CICLE</h3> -->
      <div class="container">
        <div class="row" style="margin-top: 20px;">
        <form method="post" id="formPantallaChat">

          <input type="hidden" name="dia_tipo" value="h_ma">
          <input type="hidden" name="his_id" <?php echo 'value="'.$rows.'"'?> >
          <input type="hidden" name="ultimo_id" id="ultimo_id" value="0">
        </form>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Hermano Mayor</h3>
            </div>
            <div class="panel-body" id="contenido" style="height: 400px; overflow-y: scroll;">
                <div class="col-md-7 col-md-offset-5">
                  <div class="panel panel-default">
                    <div class="panel-heading">H.Menor - fecha
                      <div>TEXTO hola hola hola hola</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="panel panel-info">
                    <div class="panel-heading">H.Menor - fecha
                      <div>TEXTO hola hola hola hola</div>
                    </div>
                  </div>
                </div>
            </div>
          <form method="post" id="formChat">
            <input type="hidden" name="dia_tipo" value="h_ma">
            <input type="hidden" name="his_id" value="1">
            <input type="hidden" name="ultimo_id" id="ultimo_id" value="0">
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-10">
                  <textarea class="form-control" name="dia_mensaje" id="texto" type="text" rows="4"></textarea>
                </div>
                <div class="col-md-2">
                  <button type="button" id="mandar_chat"  class="btn btn-primary btn-lg btn-block">Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>

  </div>

<script type="text/javascript">

$("#mandar_chat").click(function(){
              $.ajax({
                   type: "POST",
                   url: "chat_insert.proc.php",
                   data: $("#formChat").serialize(), // Adjuntar los campos del formulario enviado.
                   success: function(data){

                      $('#texto').val('');


                   }
              });
})

$( document ).ready(function() {

    function getRandValue(){

            $.ajax({
                   type: "POST",
                   url: "chat_select.proc.php",
                   data: $("#formPantallaChat").serialize(),
                   dataType: "json",
                   success: function(data){

                      for(var attr in data){
                        var fecha= data[attr]['dia_fecha'];
                        var mensaje= data[attr]['dia_mensaje'];
                        var tipo= data[attr]['dia_tipo'];
                        var id= data[attr]['dia_id'];

                        $('#ultimo_id').val(id);

                        if(tipo!='h_ma'){

                          var div='<div class="col-md-7 col-md-offset-5"><div class="panel panel-default"><div class="panel-heading">H.Menor -'+fecha+'<div>'+mensaje+'</div></div></div></div>';
                          $('#contenido').prepend(div);
                        }else{
                          var div='<div class="col-md-7"><div class="panel panel-info"><div class="panel-heading">H.Mayor -'+fecha+'<div>'+mensaje+'</div></div></div></div>';
                          $('#contenido').prepend(div);
                        }
                      }


                   }
              });
    }

    setInterval(getRandValue, 1500);
});


// $(document).ready(function() {
//     function getRandValue(){
//         value = $('#value').text();
//         //var dataString = 'value='+value;

//         $.ajax({
//             type: "POST",
//             url: "add.php",
//             //data: dataString,
//             success: function(data) {
//                 $('#value').text(data);
//             }
//         });
//     }

//     setInterval(getRandValue, 3000);
// });









// <div class="panel panel-default">
//                     <div class="panel-heading">H.Menor - fecha
//                       <div>TEXTO hola hola hola hola</div>
//                     </div>
//                   </div>


</script>

<!-- Footer -->
<?php
include("footer.php");
?>
</body>



</html>
