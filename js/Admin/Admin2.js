$(document).on("ready",inicio);


function inicio() {

  ConsultarultimoUsuario();
  $("#btnmodificar").click(Modificar);
  $("#buscar").keyup(function() {
    buscar = $("#buscar").val();
      Consultar(buscar);
  });
      $("form").submit(function (event){
        event.preventDefault();

        var formData = new FormData($("#form")[0]);

        $.ajax({
          url:$("form").attr("action"),
          type:$("form").attr("method"),
          data:formData,
          cache:false,
          contentType:false,
          processData:false,

          success:function(respuesta) {
            if (respuesta =="Registros Guardados") {
              alertify.success(respuesta);
              Consultar("");
              $("#nombre").val("");
              $("#apellido").val("");
              $("#fotos").val("");
              $("#edad").val("");
              $("#tel").val("");
              $("#ema").val("");
              $("#uss").val("");
              ConsultarultimoUsuario();
              $("#sexo").val(0).change();
            }
            else{
                alertify.error(respuesta);
            }
            Consultar("");
          }
        });
      });
      Consultar("");
    }
      $( "#fotos2" ).change(function() {//cambio de imagen y su valor
        var str = $("#fotos2").val();
      var res = str.split('\\');
      $("#fotoante").empty();
      $("#fotoante").val(res[2]);
      });



    $("body").on("click", "#tbla a", function(event) {
        event.preventDefault();
        id = $(this).attr("href");
        nombre = $(this).parent().parent().children("td:eq(2)").text();
        apellido = $(this).parent().parent().children("td:eq(3)").text();
        foto2 = $(this).parent().parent().children("td:eq(4)").text();
        sexo = $(this).parent().parent().children("td:eq(5)").text();
        edad = $(this).parent().parent().children("td:eq(6)").text();
        numero = $(this).parent().parent().children("td:eq(7)").text();
        email = $(this).parent().parent().children("td:eq(8)").text();
        usuario = $(this).parent().parent().children("td:eq(9)").text();
        $("#id2").val(id);
        $("#nombre2").val(nombre);
        $("#apellido2").val(apellido);
        //$("foto2").txt(foto);
        $("#edad2").val(edad);
        $("#tel2").val(numero);
        $("#ema2").val(email);
        $("#uss2").val(usuario);
        $("#fotoante").val(foto[id]);
        if(sexo == "Masculino"){
          $("#sexo2").val("Masculino");

        }
        else if(sexo =="Femenino"){
          $("#sexo2").val("Femenino");

        }
      });

    function Modificar() {
      $.ajax({
        url:  url+"cAdmin2/modificar",
        type: "POST",
        data:$("#frmmodificar").serialize(),
        success:function (respuesta) {
          if (respuesta =="Registros Actualizado") {
            alertify.success(respuesta);
            Consultar("");
          }
          else{
              alertify.error(respuesta);
          }
        }
      });
    }
    foto = new Array();
    function Consultar(valor) {
        $.ajax({
          url: url+"cAdmin2/consultar",
          type: "POST",
          data:{buscar:valor},
          success:function(respuesta) {
            //alert(respuesta);
            var registros = eval(respuesta);
            html ="<table class='table table-striped ' id='tbla'><thead>";
            html +="<tr><th>#</th><th>N° Registro</th><th>Nombre</th><th>Apellido</th><th>foto</th><th>sexo</th><th>edad</th><th>telefono</th><th>Email</th><th>Usuario</th><th>Acciones</th></tr>";
            html +="</thead>  <tbody>";
            for (var i = 0; i < registros.length; i++) {
              foto[registros[i]["id_admin"]]=registros[i]["foto"];
              html+="<tr><td></td><td>"+registros[i]["id_admin"]+"</td><td>"+registros[i]["nombre"]+"</td><td>"+registros[i]["apellido"]+"</td><td><img id='imgtb' src='http://localhost:80/ControlP/img/admin/"+registros[i]["foto"]+"'/></td><td>"+registros[i]["sexo"]+"</td><td>"+registros[i]["edad"]+"</td>";
              html+="<td>"+registros[i]["numero_tel"]+"</td><td>"+registros[i]["email_admin"]+"</td><td>"+registros[i]["usuario"]+"</td><td><a href='"+registros[i]["id_admin"]+"' class='btn btn-warning' data-toggle='modal' data-target='.bs-example-modal-lg'>E</a>  <button class='btn btn-danger' value='"+registros[i]["id_admin"]+"'>X</button></td></tr>";
            };
            html +="</tbody></table>";
            $("#tabla").html(html);
          }
        });
    }


    function ConsultarultimoUsuario() {
        $.ajax({
          url: url+"cAdmin2/consultaruuss",
          type: "POST",
          success:function(respuesta) {
            var registros = eval(respuesta);
            $('#uss').empty();
            $('#uss').val(registros);

          }
        });
    }
    $("body").on("click", "#tbla button", function(event) {
        event.preventDefault();
        id = $(this).attr("value");
        Eliminar(id);
    });

    function Eliminar(id) {
      $.ajax({
        url:  url+"cAdmin2/eliminar",
        type: "POST",
        data:{idajax:id},
        success:function (respuesta) {
          if (respuesta =="Registro Eliminado") {
            alertify.success(respuesta);
            Consultar("");
            ConsultarultimoUsuario();
          }
          else{
              alertify.error(respuesta);
          }
        }
      });
    }
