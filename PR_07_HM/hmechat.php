<?php
session_start();
if (!isset($_SESSION['usuario'])) {

  header('location:index.php');
}else{
  $_SESSION['hma_id']='';
  include('chat_select_historial_id.proc.php');
}

$titulo="Hermano Menor";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hermano Menor</title>
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>	
  <link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>

  <!-- ENLACES JS -->
    <!-- <script src="jsFunction/function.js"></script> -->

</head>
<?php
  include('includes/titulo.php');
?>
<!-- 

  <div class="page-header" style="margin-top: 0px;">
    <a href='index.php'><i class='fa fa-arrow-circle-left fa-3x' aria-hidden='true' title='Atrás'></i></a></div>
  
    <div class="container">
      <h1>HERMANO MENOR</h1>  
    </div>    
  </div> -->

<body background="IMG/login.jpg">
  <div class="jumbotron" style="background:transparent !important">

      <!-- <h3>BULLYIN PRIMER CICLE</h3> -->
      <div class="container">
        <div class="row" style="margin-top: 20px;">
        <form method="post" id="formPantallaChat">

          <input type="hidden" name="dia_tipo" value="h_me">
          <input type="hidden" name="his_id" <?php echo 'value="'.$rows.'"'?>>
          <input type="hidden" name="ultimo_id" id="ultimo_id" value="0">
        </form>
          <div class="panel panel-primary"> 
            <div class="panel-heading"> 
              <h3 class="panel-title">Hermano Menor</h3> 
            </div> 
            <div class="panel-body" id="contenido" style="height: 400px; overflow-y: scroll;">
                <!-- <div class="col-md-7 col-md-offset-5">
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
                </div>  -->
            </div>
          <form method="post" id="formChat"> 
            <input type="hidden" name="dia_tipo" value="h_me">
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

                        if(tipo!='h_me'){

                          var div='<div class="col-md-7 col-md-offset-5"><div class="panel panel-default"><div class="panel-heading">H.Mayor -'+fecha+'<div>'+mensaje+'</div></div></div></div>';
                          $('#contenido').prepend(div);
                        }else{
                          var div='<div class="col-md-7"><div class="panel panel-info"><div class="panel-heading">H.Menor -'+fecha+'<div>'+mensaje+'</div></div></div></div>';
                          $('#contenido').prepend(div);
                        }
                        $('#contenido').scrollTop($('#contenido')[0].scrollHeight - $('#contenido')[0].clientHeight);
                      }

                      
                   }
              });
    }

    setInterval(getRandValue, 1500);
});



</script>


</body>
<!-- Footer -->
<?php
include("footer.php");
?>


</html>