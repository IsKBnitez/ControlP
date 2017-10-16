$(document).on("ready",function() {
  Consultar();
  ConsultarB();
  ConsultarTablasM("");
  ConsultarTablasB("");
  setInterval('Consultar()',1000);
  setInterval('ConsultarB()',1000);
  setInterval('ConsultarTablasM("")',1000);
  setInterval('ConsultarTablasB("")',1000);
});

/*$.post(url+"cUsuarios/consultarnusuarios",
            {

            },
            function(data) {//imprimir combobox
              $('#resultadoUsuario').append(data);
});*/ //sin metodo
function Consultar() {
    $.ajax({
      url: url+"cUsuarios/consultarnusuarios",
      type: "POST",
      success:function(respuesta) {
        //alert(respuesta);
      $('#resultadoUsuario').empty();
      $('#resultadoUsuario').append(respuesta);

      }
    });
}
function ConsultarB() {
    $.ajax({
      url: url+"cUsuarios/consultarningresos",
      type: "POST",
      success:function(respuesta2) {
        //alert(respuesta);
      $('#resultadoBitacora').empty();
      $('#resultadoBitacora').append(respuesta2);

      }
    });
}
function ConsultarTablasM(valor) { //tabla modal usuarios
    $.ajax({
      url: url+"cUsuarios/consultar",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);

        html ="<table id='resultados' class='table table-responsive'><thead>";
        html +="<tr><th>#</th><th>N° Registro</th><th>Usuario</th><th>Tipo de Usuario</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {
          html+="<tr><td></td><td>"+registros[i]["id_us"]+"</td><td>"+registros[i]["usuario"]+"</td><td>"+registros[i]["tipo"]+"</td></tr>";
        };
        html +="</tbody></table>";
        $("#tabla").html(html);
      }
    });
}

function ConsultarTablasB(valor) { //tabla modal usuarios
    $.ajax({
      url: url+"cUsuarios/consultarB",
      type: "POST",
      data:{buscar:valor},
      success:function(respuesta) {
        //alert(respuesta);
        var registros = eval(respuesta);

        html ="<table class='table table-responsive'><thead>";
        html +="<tr><th>#</th><th>N° Registro</th><th>Usuario</th></tr>";
        html +="</thead>  <tbody>";
        for (var i = 0; i < registros.length; i++) {
          html+="<tr><td></td><td>"+registros[i]["id_bit"]+"</td><td>"+registros[i]["usuario"]+"</td></tr>";
        };
        html +="</tbody></table>";
        $("#tablaB").html(html);
      }
    });
}
