var id;
$.post(url+"cUsuarios/tipousuario",
          {

          },
          function(data) {//imprimir combobox
            var tipo = JSON.parse(data);
            $.each(tipo,function(i,item) {
                $('#tp').append('<option value="' +item.id_tpus + '">'+item.tipo+'</option>')
            });
          });
          $("#tp").change(function() {
            $("#tp option:selected").each(function() {
               id = $("#tp").val();
               $("#idcb").val(id);
            });
          });
$.post(url+"cUsuarios/tipousuario",
          {

          },
          function(data) {//imprimir combobox
            var tipo = JSON.parse(data);
            $.each(tipo,function(i,item) {
                $('#tp2').append('<option value="' +item.id_tpus + '">'+item.tipo+'</option>')
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
  $("#usuario").val("");
  $("#contra").val("");
  $("#tp").val(0).change();
}

function Consultar(valor) {
    $.ajax({
      url: url+"cUsuarios/consultar",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);
        html ="<table class='table table-striped ' id='tbla'><thead>";
        html +="<tr><th>#</th><th>N° Registro</th><th>Usuario</th><th>Contraseña</th><th>Tipo de Usuario</th><th>Acciones</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {
          html+="<tr><td></td><td>"+registros[i]["id_us"]+"</td><td>"+registros[i]["usuario"]+"</td><td>"+registros[i]["contra"]+"</td><td>"+registros[i]["tipo"]+"</td><td><a href='"+registros[i]["id_us"]+"' class='btn btn-warning' data-toggle='' data-target=''>E</a>  <button class='btn btn-danger' value='"+registros[i]["id_us"]+"'>X</button></td></tr>";
        };
        html +="</tbody></table>";
        $("#tabla").html(html);
      }
    });
}
$("body").on("click", "#tbla a", function(event) {
    event.preventDefault();
    id = $(this).attr("href");
    nombre = $(this).parent().parent().children("td:eq(2)").text();
    contra = $(this).parent().parent().children("td:eq(3)").text();
    usuario = $(this).parent().parent().children("td:eq(4)").text();
    $("#id2").val(id);
    $("#usuario2").val(nombre);
    $("#contra2").val(contra);
    if(usuario == "Administrador"){
      $("#tp2").val(1);
      $("#idcb2").val(1);
    }
    else if(usuario =="Usuario"){
      $("#tp2").val(2);
      $("#idcb2").val(2);
    }
    else if(usuario =="Alumno"){
      $("#tp2").val(3);
      $("#idcb2").val(3);
    }

});
$("body").on("click", "#tbla button", function(event) {
    event.preventDefault();
    id = $(this).attr("value");
    Eliminar(id);
});

function Modificar() {
  $.ajax({
    url:  url+"cUsuarios/modificar",
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
    url:  url+"cUsuarios/eliminar",
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
