<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Usuarios</title>
    <style media="screen">
      .cent{
        text-align: center;
      }
      h3{
        text-align: center;
      }
      h5{
        text-align: center;
      }
      .tamaño{
        float: right;
        width: 15%;
      }
      #tablacentro{
        
        margin: 0 auto;
        margin-top: 20%;
        text-align:center;
      }

    </style>
  </head>
  <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Gestion de Asignacion de Pre-requisito</h3>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Ingresos</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Busquedas</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                          
                                  <div class="col-lg-4" id="tabla4">
                                    <div class="table-responsive" id="tablamateria">

                                      <!-- /.table-responsive -->
                                    </div>
                                  </div>
                                  
                                  <div class="col-lg-4" id="tablacentro">
                                  <div class="col-lg-2" id="tablacentro"></div>
                                  <div class="col-lg-1" id="tablacentro"></div>
                                   <div class="col-lg-4">
                                   <div class="row " >

                                    <div class="espacio">
                                    <div id="codigom" class="codigo"></div>
                                    <div id="idm" class="id"></div>
                                    <div id="nmm" class="nombre"></div>
                                    <div id="prerem" class="pre"></div>
                                    <div id="uvm" class="uv"></div>
                                    <div class="col-lg-2" id="tablacentro"></div>
                                    <div class="col-lg-2" id="tablacentro"></div>

                                    <button class="btn btn-success">Guardar</button>
                                    </div>
                                
                                    </div>
                                   </div>
                                  </div>
                                  <div class="col-lg-4" id="tabla4">
                                    <div class="table-responsive" id="tablaprerequisitos">

                                      <!-- /.table-responsive -->
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane fade in active" id="profile">
                                </div>
                                <!-- /.table-responsive -->
                                </div>
                              </div>
                              <div class="modal-footer">

                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.panel-body -->

                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        </div>
        <!-- /.col-lg-6 -->
  </body>


</html>
