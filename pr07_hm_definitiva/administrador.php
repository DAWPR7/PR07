<?php

$titulo = "Administrador";

session_start();
include("includes/conexion.proc.php");

if (!isset($_SESSION['admin'])) {
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hermano Mayor</title>

  <!-- META -->
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSS -->
  <script src="http://code.jquery.com/jquery.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <!-- BOOTSTRAP -->
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

</head>
<body background="img/login.jpg">

    <div class="container">
          <?php
          include "includes/titulo.php";
          ?>
        <div class="row">

            <div class="col-md-12" style="background-color: white;">

              <table class="table table-striped">
                <thead>
                  <tr>
                      <th></th>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Password</th>
                      <th></th>
                      <th>
                         <a href="new.psi.php"><i class="fa fa-user-plus fa-2x" aria-hidden="true" title="Nuevo Psicólogo"></i></a>
                   </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query="SELECT * FROM tbl_user";
                    $resultado=$conexion->query($query);
                    while($row=$resultado-> fetch_assoc()){
                  ?>

                  <tr>

                    <th scope="row"></th>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['user_matricula']; ?></td>
                    <td>@<?php echo $row['user_pwd']; ?></td>
                    <?php $user_id=$row['user_id']; ?>
                      <td><a href="modificar.psi.php?user_id=<?php echo $row['user_id']; ?>"><i class="fa fa-pencil fa-2x" aria-hidden="true" title="Modificar"></i></a></td>
                  <td><a href="eliminar.psi.php?user_id=<?php echo $row['user_id']; ?>"><i class="fa fa-trash fa-2x" aria-hidden="true" title="Eliminar"></i></a></td>
                  </tr>
                    <?php
                    }
                    ?>
                </tbody>
              </table>

            </div>

  	    </div>
    </div>

<?php
    require_once("footer.php");
?>
</body>
</html>
