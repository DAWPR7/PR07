<?php
session_start();

include("includes/conexion.proc.php");

if (!isset($_SESSION['psico'])) {

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
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css" />
  <link rel="stylesheet" href="orientacion-style.css" />
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <!-- CSS -->
      <script src="http://code.jquery.com/jquery.js"></script>
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
<body background="img/login.jpg">

  <div class="container">
      <div class="page-header">
          <h1>Panel de administración del psicólogo.  <span class="pull-right"><a href="cerrar_sesion.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></span></h1><span class="pull-right"><a style="text-decoration:none;color:red;" href="result_enquesta.php">RESULTADOS ENCUESTA</a></span><br/>
      </div>
      <div class="row">

          <div class="col-md-12">

            <div class="panel with-nav-tabs panel-success">

                <!-- MENU -->
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1success" data-toggle="tab">Solicitudes Menor</a></li>
                            <li><a href="#tab2success" data-toggle="tab">Añadir Mayor</a></li>
                            <li><a href="#tab3success" data-toggle="tab">Nueva terapia</a></li>
                            <li><a href="#tab4success" data-toggle="tab">Terapias en curso</a></li>
                            <li><a href="#tab5success" data-toggle="tab">Seguimiento de casos</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Extras <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab6success" data-toggle="tab">Extra 1</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>

                <!-- CONTENEDOR PESTAÑAS -->
                <div class="panel-body">
                    <div class="tab-content">
                        <!-- PESTAÑA SOLICITUD HERMANO MENOR -->
                        <div class="tab-pane fade in active" id="tab1success">
                          <?php
                            $sh_ph_sql = "SELECT * FROM `tbl_hmenor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmenor`.`user_id` WHERE `hme_estado` = 'pendiente'";
                          	$sh_ph_query = mysqli_query($conexion,$sh_ph_sql);

                            if($sh_ph_query) {
                              if(mysqli_num_rows($sh_ph_query)>=1){
                            		while ($sh_ph = mysqli_fetch_array($sh_ph_query)) {

                                  echo "<table class='table'>";
                                  echo "<thead>
                                              <tr class=''>
                                                  <th class='col-md-3'>Matrícula</th>
                                                  <th class='col-md-3'> Motivo</th>
                                                  <th class='col-md-3'>¿Aprobar?</th>
                                                  <th class='col-md-3'>¿Eliminar?</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>". $sh_ph['user_matricula']."</td>
                                                  <td>".$sh_ph['hme_notas']."</td>
                                                  <td><a class='btn mini blue-stripe' href='ap_solicitud.proc.php?id=".$sh_ph['hme_id']."'>Aprobar</a></td>
                                                  <td><a class='btn mini blue-stripe' role='button' href='#'>Eliminar</a></td>
                                              </tr>
                                          </tbody>
                                      </table>";
                                }
                              }else{
                                  echo "No hay solicitudes, te puedes ir a desayunar.";
                              }
                      	   }
                          ?>

                        </div>


                        <!-- PESTAÑA AÑADIR HERMANO MAYOR -->
                        <div class="tab-pane fade" id="tab2success">
                            <form action="add_hmayor.proc.php" method="GET">
                                <div class="form-group col-md-6">

                                        <label for="hm_mat">Usuario</label>
                                        <input type="text" class="form-control" name="hm_mat" id="hm_mat" placeholder="Introduce la matrícula del alumno"><br/>

                                        <label for="pass">Contraseña</label>
                                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Introduce una contraseña"><br/>

                                        <label for="rpass">Repetir contraseña</label>
                                        <input type="password" class="form-control" name="rpass" id="rpass" placeholder="Repite la contraseña">
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="notes">Notas</label>
                                        <textarea class="form-control" name="notes" id="notes" rows="6">Anotaciones sobre el hermano mayor</textarea><br/>
                                        <button type="submit" class="btn btn-primary" onclick="return val_addhmayor();">Añadir</button>
                                </div>
                            </form>
                        </div>



                        <!-- PESTAÑA NUEVA TERAPIA -->
                        <div class="tab-pane fade" id="tab3success">
                          <!-- Consultas a la BD para poder escoger hm, HM y psicólogo -->
                          <?php
                            //Creamos la consulta para la busqueda del hermano menor que tenga estado disponible:
                            $hmenor_sql="SELECT * FROM `tbl_hmenor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmenor`.`user_id` WHERE `hme_estado` = 'libre'";
                            $hmayor_sql="SELECT * FROM `tbl_hmayor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmayor`.`user_id` WHERE `hma_estado` = 'libre'";
                            $psi_sql = "SELECT * FROM `tbl_psico`";
                            $hmenor_query = mysqli_query($conexion,$hmenor_sql);
                            $hmayor_query = mysqli_query($conexion,$hmayor_sql);
                            $psi_query = mysqli_query($conexion,$psi_sql);
                          ?>

                          <!-- FORMULARIO AÑADIR NUEVA TERAPIA -->
                          <form action="add_terapia.proc.php" method="POST">

                            <!-- ESCOGER HERMANO MENOR -->
                            <div class="form-group col-md-6">
                              <label for="hmenor">Hermano menor</label>
                                <select class="form-control" name="hmenor" id="hmenor">
                                    <option value="0" selected>Seleccione al hermano menor</option>
                                    <?php
                                      if(mysqli_num_rows($hmenor_query)>=1) {
                                        while($hmenor = mysqli_fetch_array($hmenor_query)) {
                                          echo "<option value=".$hmenor['user_id'].">".$hmenor['user_matricula']."</option>";
                                        }
                                      } else {
                                        echo "<option value='1'>No hay hermanos menores disponibles </option>";
                                      }
                                    ?>
                                </select><br/>

                            <!-- ESCOGER HERMANO MAYOR -->
                              <label for="hmayor">Hermano mayor</label>
                                  <select class="form-control" name="hmayor" id="hmayor">
                                    <option value="0" selected>Seleccione al hermano mayor</option>
                                  <?php
                                    if(mysqli_num_rows($hmayor_query)>=1) {
                                      while($hmayor = mysqli_fetch_array($hmayor_query)) {
                                        echo "<option value=".$hmayor['user_id'].">".$hmayor['user_matricula']."</option>";
                                      }
                                    } else {
                                      echo "<option value='1'>No hay hermanos mayores disponibles </option>";
                                    }
                                  ?>
                                </select><br/>

                            <!-- ESCOGER PSICÓLOGO -->
                              <label for="psico">Psicólogo</label>
                              <select class="form-control" name="psico" id="psico">
                                <option value="0" selected>Seleccione un psicólogo</option>
                              <?php
                                if(mysqli_num_rows($psi_query)>=1)   {
                                  while($psi = mysqli_fetch_array($psi_query)) {
                                    echo "<option value=".$psi['user_id'].">".$psi['user_id']."</option>";
                                  }
                                } else {
                                  echo "<option value='a'>No hay psicologos disponibles </option>";
                                }
                              ?>
                            </select>
                            </div>

                            <!-- NOTAS DE LA TERAPIA -->
                            <div class="form-group col-md-6">
                              <label for="psico">Notas de la terapia</label>
                              <textarea class="form-control" id="nota" name="nota" rows="6">Notas sobre la terapia</textarea><br/>
                              <button type="submit" class="btn btn-primary" onclick="return val_addhmayor();">Añadir</button>
                            </div>
                        	</form>
                        </div>


                        <!-- PESTAÑA TERAPIAS EN CURSO -->
                        <div class="tab-pane fade" id="tab4success">
                          <table id="tbl_terapias" data-group-by-field="proy_id" data-height="610" data-cookie="true" data-cookie-id-table="uno"  data-toolbar="#toolbar2"></table>
                        </div>


                        <!-- PESTAÑA SEGUIMIENTO HERMANO MENOR -->
                        <div class="tab-pane fade" id="tab5success">
                          <form action="" method="GET" id="formulario_seguimiento">
                            <div class="form-group col-md-4">
                              <label for="hmenor">Hermano menor</label>
                                <select class="form-control" name="hmenor" id="select_hmenor">
                                    <option value="0" selected>Seleccione al hermano menor</option>
                                    <?php
                                    $hmenor_sql="SELECT * FROM `tbl_hmenor` LEFT JOIN `tbl_user` ON `tbl_user`.`user_id`=`tbl_hmenor`.`user_id` WHERE `hme_estado` = 'ocupado'";
                                		//Petición a la BBDD
                                		$hmenor_query = mysqli_query($conexion,$hmenor_sql);
                          						if(mysqli_num_rows($hmenor_query)>=1) {
                          							while($hmenor = mysqli_fetch_array($hmenor_query)) {
                          								echo "<option value=".$hmenor['hme_id'].">".$hmenor['user_matricula']."</option>";
                          							}
                          						} else {
                          							echo "<option value='1'>No hay casos activos</option>";
                          						}
                          					?>
                                </select><br/>
                                <!-- <button type="submit" class="btn btn-primary" id="mostrar_seguimiento">Seleccionar</button> -->
                              </div>
                              </form>
                              <form action="upd_notes.proc.php" method="POST">
                              <input type="hidden" id="hmeid" name="hmeid" />
                              <div class="form-group col-md-8">
                                <label for="hmenor">Notas:</label>
                                <textarea class="form-control" id="notas" rows="5"></textarea>
                                <br/>
                                <input type="submit" class="btn btn-secondary" value="añadir nota" />
                              </div>
                                  <div class="form-group col-md-12">
                                      
                                      <!-- <input type="text" id="notas" name="notas"/> -->
                                      
                                      
                                  </div>
                               </form>
                              <div class="form-group col-md-12" id="div_oculto">

                            </div>

                          </form>

                        </div>
                        <div class="tab-pane fade" id="tab6success">Extra 1</div>
                    </div>
                </div>
            </div>
        </div>

  	</div>
  </div>

  <?php
    // require_once("footer.php");
  ?>
<!-- VENTANA MODAL COMENTARIO -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <form action="ch_note_hmenor.proc.php" method="GET" id="formModal">
          <input type="hidden" id="forHmid" name="forHmid" />

          <div class="form-group col-md-12">
              <label for="hmenor">Notas Hermano Menor</label>
              <textarea class="form-control" id="textareaModal" name="textareaModal" rows="15"></textarea>
          </div>
          <div class="form-group col-md-12">
              <button type="submit" class="btn btn-primary">Añadir</button>
          </div>
          </form>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





  <!-- BOTON ABRIR MODAL -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Seleccionar</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- SCRIPT VENTANA MODAL SEGUIMIENTO HERMANO MENOR -->
<!-- <script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
  })
</script> -->


<!-- <script src="assets/js/jquery-3.2.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/login.js"></script> -->

<script type="text/javascript">

$('#tbl_terapias').on('dbl-click-row.bs.table', function (event, row, $element) {

  $('#myModal').modal('show');
  $('#myModal').on('shown.bs.modal', function (event) {
      
      $('#textareaModal').val(row.his_comentario);
      $('#forHmid').val(row.hme_id);


  })
});













$("#select_hmenor").change(function(){
              hme_id = $("#select_hmenor").val();
              $.ajax({
                   type: "POST",
                   url: "s_caso_hmenor.php?hme_id="+hme_id,
                   data: $("#formulario_seguimiento").serialize(), // Adjuntar los campos del formulario enviado.
                   dataType: "json",
                   success: function(data){

                     var tabla = "<table class='table'><thead><tr><th>Último msj. mayor</th><th>Último msj. menor</th></tr></thead><tbody><tr><td id='tdmayor'>"+fecha_hmayor+"</td><td id='tdmenor'>"+fecha_hmenor+"</td></tr></tbody></table>";

                     $('#div_oculto').html(tabla);

                     for(var attr in data){
                       var fecha_hmenor= data[attr]['hmenor'];
                       var fecha_hmayor= data[attr]['hmayor'];
                       var notas = data[attr]['notes'];
                       
                       if (fecha_hmenor != null){
                         $('#tdmenor').html(fecha_hmenor);
                       } else {
                         $('#tdmayor').html(fecha_hmayor);
                       }
                        if(notas!=null){
                        $('#notas').val(notas);
                         $('#hmeid').val(hme_id);
                      }
                     }
                    
                   }
              });
})
</script>

<!-- VALIDACIONES AÑADIR HERMANO MAYOR -->
<script type="text/javascript">

  function val_addhmayor() {
    var error="";
    if(document.getElementById('hm_mat').value=="") {
      error+="La matrícula del alumno no puede estar vacía \n";

      document.getElementById('hm_mat').style.borderColor="red";
    } else if(isnum(document.getElementById('hm_mat').value)) {
          error+="error, la matrícula debe ser un número";
        }
    if(document.getElementById('pass').value=="") {
      error+="La contraseña del alumno no puede estar vacía \n";
      document.getElementById('pass').style.borderColor="red";
    }
    if(document.getElementById('pass').value!=document.getElementById('rpass').value) {
      error+="Las contraseñas no coinciden \n";
      document.getElementById('rpass').style.borderColor="red";
      document.getElementById('pass').style.borderColor="red";
    }
    if(document.getElementById('notes').value=="Anotaciones sobre el hermano mayor") {
      error+="Debe introducir alguna nota sobre el hermano mayor";
      document.getElementById('notes').style.borderColor="red";
    }
    if(error!="") {
      alert(error);
      return false;
    } else {
      return true;
    }
  }
</script>

<!-- VALIDACIONES VER TERAPIAS -->
<script type="text/javascript">
  function add_note() {
    document.getElementById("ch_note").style.display="block";
  }
</script>
</body>
<script type="text/javascript" src="tablasJs/tbl_terapias.js"></script>
</html>
