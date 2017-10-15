<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Control Pensum</title>
    <style media="screen">

      h4{
        text-align: center;
      }

    </style>
  </head>
  <body>
    &nbsp;
      &nbsp;
        &nbsp;
      <div class="container">
        <div class="col-lg-3 col-md-6">
          <a href="#">
          <div class="panel panel-primary" data-toggle="modal" data-target="#usuario">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-group fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge"id="resultadoUsuario"></div>

                      </div>
                  </div>
              </div>

                  <div class="panel-footer" >
                      <span class="pull-left" >Usuarios Registrados mas info.</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                      <div class="clearfix"></div>
                  </div>
          </div>
          </a>
        </div>
            <div class="modal fade bs-example-modal-lg" id="usuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">Usuarios Registrados</h4>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive table-bordered " id="tabla">

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
          <div class="panel panel-primary" data-toggle="modal" data-target="#bitacora">
              <div class="panel-heading">
                  <div class="row">
                      <div class="col-xs-3">
                          <i class="fa fa-group fa-5x"></i>
                      </div>
                      <div class="col-xs-9 text-right">
                          <div class="huge"id="resultadoBitacora"></div>

                      </div>
                  </div>
              </div>

                  <div class="panel-footer" >
                      <span class="pull-left" >Ingresos al sistema mas info.</span>
                      <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                      <div class="clearfix"></div>
                  </div>
          </div>
          </a>
          <div class="modal fade bs-example-modal-lg" id="bitacora" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Usuarios Registrados</h4>
                </div>
                <div class="modal-body">
                  <div class="table-responsive table-bordered " id="tablaB">

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
        </div>
        <div class="col-lg-3 col-md-6">
        </div>
      </div>

  </body>
</html>
