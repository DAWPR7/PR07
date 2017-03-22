$(function(){

  //--- FUNCIÓN PARA MANDAR ENCUESTA:
          $("#btn_enviar").click(function(){
            var url = "enquesta_insert.proc.php"; // El script a dónde se realizará la petición.
            $.ajax({
                   type: "POST",
                   url: url,
                   data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
                   success: function(data)
                   {
                       //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                   }
                 });

            return false; // Evitar ejecutar el submit del formulario.
          });
});

  //--- FUNCIÓN PARA RELLENAR LOS SELECT:

$(function(){
          $.ajax({
                   type: "POST",
                   url: "enquesta_select.proc.php",
                   dataType: "json",
                   success: function(data){

                      for(var i in data) {

                        $('select').append($('<option>', { 
                            value: data[i].alu_id,
                            text : data[i].alu_nombre+" "+data[i].alu_apellidos 
                        }));


                          // console.log(data[i]);  // (o el campo que necesites)
                          // var option="<option value='"+data[i].alu_id+"'>"+data[i].alu_nombre+" "+data[i].alu_apellidos+"</option>";
                          // alert(option);
                      }
                   }
          });

            return false; // Evitar ejecutar el submit del formulario.

});