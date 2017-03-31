<?php
session_start();

$titulo = "Hermano Mayor / Menor";

if (!isset($_SESSION['usuario'])) {

  header('location:index.php');
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Hermano Mayor</title>
	<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/login.css" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">

	<!-- BOOTSTRAP -->


    <!-- CSS -->
    <script src="http://code.jquery.com/jquery.js"></script>



</head>
<body background="img/login.jpg">
<div class="container">
  <?php
  include "includes/titulo.php";
  ?>
<div class="container" style="margin-top: 100px;">
	<a href="hmechat.php"><div class="col-lg-4 col-lg-offset-1" style="border: 4px solid;
    border-radius: 25px; background-color: #eeece0; text-align: center">
			<img style="border-radius: 25px;" src="IMG/menor.png"  title="Hermano Menor"/>
	</div></a>
	<a href="hmachat.php"><div class="col-lg-4 col-lg-offset-2" style="border: 4px solid;
    border-radius: 25px; background-color: #eeece0; text-align: center">
			<img style="border-radius: 25px;" src="IMG/mayor.png"  title="Hermano Mayor"/>
	</div></a>
</div>


</div>

<!-- Footer -->
<div style="margin-top: 120px">
	<?php
include("footer.php");
?>
</div>

<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
