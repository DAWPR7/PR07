

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
        <link href="assets/css/main.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>

  <!-- ENLACES JS -->
        <script src="jsFunction/function.js"></script>

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



<body background="IMG/login.jpg">
  <div class="jumbotron" style="background:transparent !important">
    <div class="container" style="background-color: white;">

      
      <div role="tabpanel" class="row">
                    <table id="tbl_resultado" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>

      </div>
    
    </div>
  </div>



</body>
        <script type="text/javascript" src="tablasJs/tbl_resultado.js"></script>
<!-- Footer -->
<?php
include("footer.php");
?>


</html>