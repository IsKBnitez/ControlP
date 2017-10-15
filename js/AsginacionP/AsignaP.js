$(document).on("ready",inicio);

function inicio() {

Consultar1("");
Consultar2("");
Consultar("");
$("form").submit(function (event){
  event.preventDefault();

  $.ajax({
    url:$("form").attr("action"),
    type:$("form").attr("method"),
    data:$("form").serialize(),
    success:function(respuesta) {
      if (respuesta =="Registros Guardados") {
          alertify.success(respuesta);
        Consultar1("");
        Consultar2("");

           limpiar();
      }
      else{
            alertify.error(respuesta);
      }
    }
  });
});
}

$("body").on("click", "#tbla1 a", function(event) {
    event.preventDefault();
    nombre = $(this).parent().parent().children("td:eq(1)").text();
    $("#materia").val(nombre);
  });

  $("body").on("click", "#tbla2 a", function(event) {
      event.preventDefault();
      nombre = $(this).parent().parent().children("td:eq(1)").text();
      $("#pre").val(nombre);
    });

    $("body").on("click", "#tbla3 a", function(event) {
        event.preventDefault();
        nombre1 = $(this).parent().parent().children("td:eq(2)").text();
        nombre2 = $(this).parent().parent().children("td:eq(3)").text();
        $("#materia2").val(nombre1);
        $("#pre2").val(nombre2);
      });


    function limpiar() {
      $("#materia").val("");
      $("#pre").val("");
    }

    function Consultar(valor) {
        $.ajax({
          url: url+"cAsignP/consultar3",
          type: "POST",
          data:{buscar:valor},
          success:function(respuesta) {
            //alert(respuesta);
            var registros = eval(respuesta);
            html ="<table class='table table-striped ' id='tbla3'><thead>";
            html +="<tr><th>#</th><th>N° Registro</th><th>Materia</th><th>Pre-requisito</th><th>Acciones</th></tr>";
            html +="</thead>  <tbody>";
            for (var i = 0; i < registros.length; i++) {
              html+="<tr><td></td><td>"+registros[i]["id"]+"</td><td>"+registros[i]["n1"]+"</td><td>"+registros[i]["n2"]+"</td><td><button class='btn btn-danger' value='"+registros[i]["id"]+"'>X</button></td></tr>";
            };
            html +="</tbody></table>";
            $("#tabla3").html(html);
          }
        });
    }
function Consultar1(valor) {
    $.ajax({
      url: url+"cAsignP/consultar1",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);
        html ="<form>"
        html +="<table class='table table-striped ' id='tbla1'><thead>";
        html +="<tr><th>Acciones</th><th>Nombre Materia</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {

          html+="<tr><td><a id='"+registros[i]["id_materia"]+"' class='btn btn-warning'>M</a></td><td>"+registros[i]["nombre"]+"</td></tr>";
        };
        html +="</tbody></table></form>";
        $("#tabla").html(html);
      }
    });
}

function Consultar2(valor) {
    $.ajax({
      url: url+"cAsignP/consultar2",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);
        html ="<table class='table table-striped ' id='tbla2'><thead>";
        html +="<tr><th>Acciones</th><th>Nombre Pre-requisito</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {

          html+="<tr><td><a id='"+registros[i]["id_pre"]+"' class='btn btn-warning'>P</a></td><td>"+registros[i]["nombre"]+"</td></tr>";
        };
        html +="</tbody></table>";
        $("#tabla2").html(html);
        $("#tabla4").html(html);
      }
    });
}
$("body").on("click", "#tbla3 button", function(event) {
    event.preventDefault();
    id = $(this).attr("value");
    Eliminar(id);

});
function Eliminar(id) {
  $.ajax({
    url:  url+"cAsignP/eliminar",
    type: "POST",
    data:{idajax:id},
    success:function (respuesta) {
      if (respuesta =="Registro Eliminado") {
        alertify.success(respuesta);
        Consultar("");
        Consultar1("");
        Consultar2("");
      }
      else{
          alertify.error(respuesta);
      }
    }
  });
}
