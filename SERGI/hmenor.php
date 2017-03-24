<?
session_start();

if(isset($_GET['logout'])){

	//Simple exit message
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'><i>". $_SESSION['name'] ." se ha desconectado.</i><br></div>");
	fclose($fp);

	session_destroy();
	header("Location: hmenor.php"); //Redirect the user
}

function loginForm(){
	echo'
	<div id="loginform">
	<form action="hmenor.php" method="post">
		<p>Introduce tu usuario para continuar:</p>
		<label for="name">Usuario:</label>
		<input type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Enviar" />
	</form>
	</div>
	';
}

if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Escribe tu usuario</span>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- LINKS -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="cmenor-style.css" />
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<!-- TITLE -->
	<title>Hermano Menor</title>

</head>

<body background="assets/img/login.jpg">
  <!-- BARRA MENÚ -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="hmenor.php">Hermano Mayor</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Inicio</a></li>
          <li><a href="#about">Sugerencias</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav><br><br>
	<!-- DIV CONTENIDO -->
	<div class="container">

		<div class="contenedor-chat">

		<?php
		if(!isset($_SESSION['name'])){
			loginForm();
			// header("Location: index.php");
		 ?>
		</div>
		<?php
		}else{
		?>

    <div class="contenedor-chat">

			<div id="wrapper">
				<div id="menu">
					<p class="welcome">Hola, <b><?php echo $_SESSION['name']; ?></b></p>
					<p class="logout"><a id="exit" href="#">Desconectarse</a></p>
					<div style="clear:both"></div>
				</div>
				<div id="chatbox"><?php
				if(file_exists("cmenor-log.html") && filesize("cmenor-log.html") > 0){
					$handle = fopen("cmenor-log.html", "r");
					$contents = fread($handle, filesize("cmenor-log.html"));
					fclose($handle);

					echo $contents;
				}
				?></div>

				<!-- HAY QUE INDICAR EL INSERT A LA BBDD -->
				<form name="message" action="">
					<input name="usermsg" type="text" id="usermsg" size="63" />
					<input name="submitmsg" type="submit"  id="submitmsg" value="Enviar" />
				</form>
			</div>
			<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
			<script type="text/javascript">
			// jQuery Document
			$(document).ready(function(){
				//If user submits the form
				$("#submitmsg").click(function(){
					var clientmsg = $("#usermsg").val();
					$.post("cmenor-post.php", {text: clientmsg});
					$("#usermsg").attr("value", "");
					return false;
				});

				//Load the file containing the chat log
				function loadLog(){
					var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
					$.ajax({
						url: "cmenor-log.html",
						cache: false,
						success: function(html){
							$("#chatbox").html(html); //Insert chat log into the #chatbox div
							var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
							if(newscrollHeight > oldscrollHeight){
								$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
							}
					  	},
					});
				}
				setInterval (loadLog, 2500);	//Reload file every 2.5 seconds

				//If user wants to end session
				$("#exit").click(function(){
					var exit = confirm("Seguro que quieres desconectarte?");
					if(exit==true){window.location = 'hmenor.php?logout=true';}
				});
			});
			</script>

    </div>

		<?php
		}
		?>

  </div>
<!-- INCUDE FOOTER -->
<?php
include("footer.php");
?>
<!-- SCRIPTS -->
<script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
