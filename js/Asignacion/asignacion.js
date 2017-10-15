var id;
$.post(url+"cInscriA/carrera",
          {

          },
          function(data) {//imprimir combobox
            var tipo = JSON.parse(data);
            $.each(tipo,function(i,item) {
                $('#tp').append('<option value="' +item.id_ca + '">'+item.nombre+'</option>')
            });
          });
          $("#tp").change(function() {
            $("#tp option:selected").each(function() {
               id = $("#tp").val();
               $("#idcb").val(id);
            });
          });

          Id2="1"
            function ConsultarId(id) {
              $.ajax({
                url:  url+"cInscriA/consultarIdCb",
                type: "POST",
                data:{idajax:id},
                success:function (respuesta) {
                  var tipo = JSON.parse(respuesta);
                  $.each(tipo,function(i,item) {
                      Id2= item.id_ca ;
                  });

                }
              });
            }

          function ConsultarultimoUsuario() {
              $.ajax({
                url: url+"cInscriA/consultarA",
                type: "POST",
                success:function(respuesta) {
                  var registros = eval(respuesta);
                  $('#alumno').empty();
                  $('#alumno').val(registros);

                }
              });
          }
          $(document).on("ready",inicio);

          function inicio() {
              ConsultarultimoUsuario();

              $("form").submit(function (event){
                event.preventDefault();

                $.ajax({
                  url:$("form").attr("action"),
                  type:$("form").attr("method"),
                  data:$("form").serialize(),
                  success:function(respuesta) {
                    if (respuesta =="Registros Guardados") {
                      alertify.success(respuesta);
                      ConsultarultimoUsuario();
                    }
                    else{
                        alertify.error(respuesta);
                    }
                  }
                });
              });
          }
