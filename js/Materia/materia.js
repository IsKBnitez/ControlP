var id;
$.post(url+"cMateria/carrera",
          {

          },
          function(data) {//imprimir combobox
            var tipo = JSON.parse(data);
            $.each(tipo,function(i,item) {
                $('#tp').append('<option value="' +item.id_facultad + '">'+item.nombre_f+'</option>')
            });
          });
          $("#tp").change(function() {
            $("#tp option:selected").each(function() {
               id = $("#tp").val();
               $("#idcb").val(id);
            });
          });
$.post(url+"cMateria/carrera",
          {

          },
          function(data) {//imprimir combobox
            var tipo = JSON.parse(data);
            $.each(tipo,function(i,item) {
                  $('#tp2').append('<option value="' +item.id_facultad + '">'+item.nombre_f+'</option>')
              });
            });
            $("#tp2").change(function() {
              $("#tp2 option:selected").each(function() {
                id = $("#tp2").val();
                $("#idcb2").val(id);
              });
            });
$(document).on("ready",inicio);


function inicio() {

    $("#btnmodificar").click(Modificar);
    $("#buscar").keyup(function() {
      buscar = $("#buscar").val();
        Consultar(buscar);
    });
      $("form").submit(function (event){
        event.preventDefault();

        $.ajax({
          url:$("form").attr("action"),
          type:$("form").attr("method"),
          data:$("form").serialize(),
          success:function(respuesta) {
            if (respuesta =="Registros Guardados") {
              alertify.success(respuesta);
              Consultar("");//para que vuelva a consultar la tabla
              limpiar();
            }
            else{
                alertify.error(respuesta);
            }
          }
        });
      });
      Consultar("");
    }

function limpiar(){
  $("#id").val("");
  $("#codigo").val("");
  $("#nombre").val("");
  $("#uv").val("");
  $("#tp").val(0).change();
}

function Consultar(valor) {
    $.ajax({
      url: url+"cMateria/consultar",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);
        html ="<table class='table table-striped ' id='resultados'><thead>";
        html +="<tr><th>#</th><th>N° Registro</th><th>Codigo</th><th>Nombre</th><th>U.V</th><th>Carrera</th><th>Acciones</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {
          html+="<tr><td></td><td>"+registros[i]["id_materia"]+"</td><td>"+registros[i]["codigo"]+"</td><td>"+registros[i]["nombre"]+"</td><td>"+registros[i]["uv"]+"</td><td>"+registros[i]["nombre_f"]+"</td><td><a href='"+registros[i]["id_materia"]+"' class='btn btn-warning' data-toggle='modal' data-target='.bs-example-modal-sm'>E</a>  <button class='btn btn-danger' value='"+registros[i]["id_materia"]+"'>X</button></td></tr>";
        };
        html +="</tbody></table>";
        $("#tabla").html(html);
        

      }
    });
}
$("body").on("click", "#tbla a", function(event) {
    event.preventDefault();
    carrera = $(this).parent().parent().children("td:eq(5)").text();
    ConsultarId(carrera);
    id = $(this).attr("href");
    codigo = $(this).parent().parent().children("td:eq(2)").text();
    nombre = $(this).parent().parent().children("td:eq(3)").text();
    uv = $(this).parent().parent().children("td:eq(4)").text();

    $("#id2").val(id);
    $("#codigo2").val(codigo);
    $("#nombre2").val(nombre);
    $("#uv2").val(uv);
    $("#tp2").val(Id2);
    $("#idcb2").val(Id2);

});
  Id2="1"
    function ConsultarId(id) {
      $.ajax({
        url:  url+"cMateria/consultarIdCb",
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


$("body").on("click", "#tbla button", function(event) {
    event.preventDefault();
    id = $(this).attr("value");
    Eliminar(id);
});

function Modificar() {
  $.ajax({
    url:  url+"cMateria/modificar",
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

function Eliminar(id) {
  $.ajax({
    url:  url+"cMateria/eliminar",
    type: "POST",
    data:{idajax:id},
    success:function (respuesta) {
      if (respuesta =="Registro Eliminado") {
        alertify.success(respuesta);
        Consultar("");
      }
      else{
          alertify.error(respuesta);
      }
    }
  });
}
