$(function(){

  //--- FUNCIÓN PARA MANDAR ENCUESTA:
          $("#btn_enviar").click(function(){

          var a = $.get("id");
          //alert(a);
            //var url = "enquesta_insert_form1.proc.php?alu_id="+a; // El script a dónde se realizará la petición.
            $.ajax({
                   type: "POST",
                   url: "enquesta_insert_form1.proc.php?alu_id="+a,
                   data: $("#form1").serialize(), // Adjuntar los campos del formulario enviado.
                   success: function(data)
                   {
                       //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                   }
                 });

            $.ajax({
                   type: "POST",
                   url: "enquesta_insert_form2.proc.php?alu_id="+a,
                   data: $("#form2").serialize(), // Adjuntar los campos del formulario enviado.
                   success: function(data)
                   {
                       //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                   }
                 });
            $.ajax({
                   type: "POST",
                   url: "enquesta_insert_form2.proc.php?alu_id="+a,
                   data: $("#form3").serialize(), // Adjuntar los campos del formulario enviado.
                   success: function(data)
                   {
                       //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                   }
                 });
            $.ajax({
                   type: "POST",
                   url: "enquesta_insert_form2.proc.php?alu_id="+a,
                   data: $("#form4").serialize(), // Adjuntar los campos del formulario enviado.
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

          var alu_etapa = $.get("alu_etapa");
          var alu_curso = $.get("alu_curso");
          $('#titulo_etapa').append(alu_etapa);
          $('#titulo_curso').append(alu_curso);

          //alert('alu_etapa'+alu_etapa);

          $.ajax({
                   type: "POST",
                   data: {"alu_etapa" : alu_etapa, "alu_curso" : alu_curso},
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



(function($) {  
    $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  
})(jQuery);  