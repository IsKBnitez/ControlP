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
                          <form class="" action="<?php echo base_url();?>cAsignP/guardar" method="post" role="form">
                              <div class="form-group">
                                  <label>Materia</label>
                                  <input class="form-control" id="materia" required="require" placeholder="Materia" name="materia">
                              </div>
                              <div class="form-group">
                                  <label>Pre-Rquisito</label>
                                  <input class="form-control" id="pre" required="require" placeholder="Pre-Requisito" name="pre">
                              </div>
                              <div class="form-group cent">
                                  <button type="submit" class="btn btn-primary" name="button">Guardar</button>
                              </div>

                            </form>

                            <div class="table-responsive col-lg-6" id="tabla">

                            <!-- /.table-responsive -->
                            </div>
                            <div class="table-responsive col-lg-6" id="tabla2">

                            <!-- /.table-responsive -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                          <div class="col-lg-12">
                                  <!-- /.panel-heading -->

                                  <div class="panel-body">
                                  <div class="col-lg-12">
                                    <div class="col-lg-12 tamaño">
                                    <div class="form-group ">
                                      <input class="form-control" placeholder="Buscar" id="buscar" name="buscar">
                                    </div>
                                  </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="table-responsive" id="tabla3">

                                      <!-- /.table-responsive -->
                                      </div>

                              </div>
                              <!-- /.panel -->
                              </div>
                        </div>
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                              </div>
                              <div class="modal-body">

                                <div class="table-responsive">
                                  <div class="col-lg-6">
                                  <form id="frmmodificar" class="" action="<?php echo base_url();?>cAsignP/modificar" method="post">
                                    <div class="form-group">
                                        <label>Materia</label>
                                        <input class="form-control" id="materia2" required="require" placeholder="Materia" name="materia2">
                                    </div>
                                    <div class="form-group">
                                        <label>Pre-Rquisito</label>
                                        <input class="form-control" id="pre2" required="require" placeholder="Pre-Requisito" name="pre2">
                                    </div>
                                    <div class="form-group cent">
                                          <button type="button" class="btn btn-primary btn-block" id="btnmodificar"  name="button"data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>Actualizar</button>
                                    </div>

                                  </form>
                                  </div>
                                  <div class="col-lg-6" id="tabla4">

                                  </div>
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
