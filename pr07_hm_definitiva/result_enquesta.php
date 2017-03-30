

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
        <script src="http://code.jquery.com/jquery.js"></script>

  <!-- ENLACES JS -->
        <!-- <script src="jsFunction/function.js"></script> -->

<!-- BOOTSTRAP -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

  <!-- BOOTSTRAP TABLE -->
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap-table.css">
        <script type="text/javascript" src="assets/js/bootstrap-table.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-table-ca-ES.js"></script>

  <!-- BOOTSTRAP TABLE COOKIE -->
        <script type="text/javascript" src="assets/js/bootstrap-table-cookie.js"></script>

  <!-- BOOTSTRAP TABLE EXPORT -->
        <script type="text/javascript" src="assets/js/bootstrap-table-export.js"></script>
        <script type="text/javascript" src="assets/js/tableExport.min.js"></script>
        <script src="//oss.maxcdn.com/bootbox/4.2.0/bootbox.min.js"></script>

</head>

<div class="container">
  <div class="page-header">
    <h1>RESULT ENQUESTAS BULLYIN</h1>
  </div>
</div>



<body >
  <div class="container" style="background-color: lightgrey;">
      <form class="navbar-form navbar-left" role="search">
        <label>Seleccionar l'etapa:</label>
        <select class="form-control" name="etapa" id="etapa">
              <option selected disabled>ETAPA</option>
              <option >PRIMARIA</option>
              <option >ESO</option>
              <option >CFGM</option>
              <option >CFGS</option>
        </select>
        <label> Cicle formatiu:</label>
        <select class="form-control" name="cicle" id="cicle"  disabled>
              <option selected disabled>CICLE FORMATIU</option>
              <option >ASIX</option>
              <option >DAW</option>
              <option >OTROS</option>
              <option >CFGS</option>
        </select>
        <label> Curs:</label>
        <select class="form-control" name="curs" id="curs"  disabled>
              <option selected disabled>CURS</option>
              <!-- <option value='1'>1</option>
              <option value='2'>2</option>
              <option value='3'>3</option>
              <option value='4'>4</option>
              <option value='5'>4</option>
              <option value='6'>4</option> -->
        </select>

      </form>

  </div>
  <div class="jumbotron" style="background:transparent !important">

    <form id="formSelect">
      <div class="row">
        <div class="col-md-4">
            <h3 id="h0">Resultats data:</h3>
            <table id="tbl_resultado" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
        </div>
        <div class="col-md-4">
            <h3 id="h1">Resultats data:</h3>
            <table id="tbl_resultado1" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
        </div>
        <div class="col-md-4">
            <h3 id="h2">Resultats data:</h3>
            <table id="tbl_resultado2" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
        </div>
    </div>


    </form>

  </div>



</body>
<!-- ENLACE A LAS TABLAS -->
        <script type="text/javascript" src="tablasJs/tbl_resultado.js"></script>
        <script type="text/javascript" src="tablasJs/tbl_resultado1.js"></script>
        <script type="text/javascript" src="tablasJs/tbl_resultado2.js"></script>

<!-- SCRIPT PARA EL SELECT -->
<script type="text/javascript">

    $('#etapa').change(function() {


      var primaria  ="<option selected disabled>CURS</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option>";
      var eso       ="<option selected disabled>CURS</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option>";
      var cicle     ="<option selected disabled>CURS</option><option value='1'>1</option><option value='2'>2</option>";

      var valor = $('#etapa').val();
      $('#curs').html('');

      if(valor=='PRIMARIA'){
        $('#curs').append(primaria);
        $('#curs').prop('disabled', false);
        $('#cicle').prop('disabled', true);
      }else if(valor=='ESO'){
        $('#curs').append(eso);
        $('#curs').prop('disabled', false);
        $('#cicle').prop('disabled', true);
      }else{
        $('#curs').append(cicle);
        $('#curs').prop('disabled', true);
        $('#cicle').prop('disabled', false);
      }
      // if((valor !='CFGM')&&(valor!='CFGS')){
      //   $('#curs').prop('disabled', false);
      //   alert('No es igual a ninguno');
      // }else{
      //   $('#curs').prop('disabled', true);
      //   $('#cicle').prop('disabled', false);
      // }
    })
    $('#cicle').change(function() {
      var valor = $('#cicle').val();
      $('#curs').prop('disabled', false);
    })



</script>



<!-- Footer -->
<?php
include("footer.php");
?>


</html>
