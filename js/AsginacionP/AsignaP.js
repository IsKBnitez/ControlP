$(document).on("ready",inicio);

function inicio() {


ConsultarMateria("");
ConsultarMateriaPre("");
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

$("body").on("click", "#tablamateria a", function(event) {
  event.preventDefault();
  id = $(this).parent().parent().children("td:eq(1)").text();
  //consultas datos de la materia---
  ConsultarMateriaparacuadro(id);

  //comsultar prerequisitos
  
});

$("body").on("click", "#tablaprerequisitos a", function(event) {
  event.preventDefault();
  id = $(this).parent().parent().children("td:eq(1)").text();

  //consultas datos de la materia---
  ConsultarPrereparacuadro(id);

  //comsultar prerequisitos
  
});

/*
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
*/

    function limpiar() {
      $("#materia").val("");
      $("#pre").val("");
    }


   /* function ConsultarMateriaparacuadro(valor) {
      $.ajax({
        url: url+"cAsignP/consultarMac",
        type: "POST",
        data:{buscar:valor},
        success:function(respuesta) {
          //alert(respuesta);
          var registros = eval(respuesta);
         
          for (var i = 0; i < registros.length; i++) {
            //html+="<tr><td></td><td>"+registros[i]["id_materia"]+"</td><td>"+registros[i]["nombre"]+"</td><td><a id='enviom' class='btn btn-info glyphicon glyphicon-check'></a></td></tr>";
            html ="<div class='codigo'>"+registros[i]["codigo"]+"</div>";
            html +="<div class='id'>"+registros[i]["id_materia"]+"</div>";
            html +="<div id='nombrec' class='nombre'>"+registros[i]["nombre"]+"</div>";
            html +="<div class='pre'>sdfsdfsd</div>";
            html +="<div class='uv'>"+registros[i]["uv"]+"</div>";
          };
          html +="</tbody></table>";
          $("#tablamateria").html(html); 
        }
      });
  }*/


  // este sirve para consultar el nombre de la materia y el id
    function ConsultarMateria(valor) {
      $.ajax({
        url: url+"cAsignP/consultarMa",
        type: "POST",
        data:{buscar:valor},
        success:function(respuesta) {
          //alert(respuesta);
          var registros = eval(respuesta);
          html ="<table class='table table-striped ' id='resultados'><thead>";
          html +="<tr><th>#</th><th>N° Registro</th><th>Nombre materia</th><th>Operacion</th></tr>";
          html +="</thead>  <tbody>";
          for (var i = 0; i < registros.length; i++) {
            html+="<tr><td></td><td>"+registros[i]["id_materia"]+"</td><td>"+registros[i]["nombre"]+"</td><td><a id='enviom' class='btn btn-info glyphicon glyphicon-check'></a></td></tr>";
          };
          html +="</tbody></table>";
          $("#tablamateria").html(html); 
        }   
      });
  }

  function ConsultarMateriaparacuadro(valor) {
    $.ajax({
      url: url+"cAsignP/consultarMac",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);
        for (var i = 0; i < registros.length; i++) {
        $('#idm').text(registros[i]["id_materia"]);
        $('#nmm').text(registros[i]["nombre"]);
        $('#codigom').text(registros[i]["codigo"]);
        $('#uvm').text(registros[i]["uv"]);
        
       }
      }
    });
}

function ConsultarPrereparacuadro(valor) {
  $.ajax({
    url: url+"cAsignP/consultarPrec",
    type: "POST",
    data:{buscar:valor},
    success:function(respuesta) {
      //alert(respuesta);
      var registros = eval(respuesta);
      for (var i = 0; i < registros.length; i++) {
      $('#prerem').text(registros[i]["nombre"]);     
     }
    }
  });
}

  function ConsultarMateriaPre(valor) {
    $.ajax({
      url: url+"cAsignP/consultarpre",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);
        html ="<table class='table table-striped ' id='resultados'><thead>";
        html +="<tr><th>#</th><th>N° Registro</th><th>Nombre materia</th><th>Operacion</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {
          html+="<tr><td></td><td>"+registros[i]["id_pre"]+"</td><td>"+registros[i]["nombre"]+"</td><td><a class='btn btn-info glyphicon glyphicon-check'></a></td></tr>";
        };
        html +="</tbody></table>";
        $("#tablaprerequisitos").html(html); 
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
