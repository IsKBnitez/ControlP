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
                    <h3>Gestion de usuarios</h3>
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
                          <div class="col-lg-3">
                          </div>
                          <div class="col-lg-6">
                            <form class="" action="<?php echo base_url();?>cUsuarios/guardar" method="post">
                              <table class="table-responsive">
                                <div class="form-group">

                                    <input class="form-control" name="id" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input class="form-control" id="usuario" placeholder="Usuario" name="usuario">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" id="contra" placeholder="Contraseña" name="contra">
                                </div>
                                <div class="form-group">
                                    <label>Tipo de usuario</label>
                                    <select class="form-control cent" name="tp" id="tp">
                                      <option value="0">:::Elija una opcion:::</option>
                                    </select>
                                    <input type="hidden" name="idcb" id="idcb" value="">
                                </div>
                                <div class="form-group cent">
                                    <button type="submit" class="btn btn-primary" name="button">Guardar</button>
                                </div>
                              </table>
                            </form>
                          </div>
                          <div class="col-lg-3">
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
                                      <div class="table-responsive" id="tabla">

                                      <!-- /.table-responsive -->
                                  </div>
                                  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form id="frmmodificar" class="" action="<?php echo base_url();?>cUsuarios/modificar" method="post">
                                            <table class="table-responsive">
                                              <div class="form-group">

                                                  <input class="form-control" name="id2" id="id2" type="hidden">
                                              </div>
                                              <div class="form-group">
                                                  <label>Usuario</label>
                                                  <input class="form-control" id="usuario2" placeholder="Usuario" name="usuario2">
                                              </div>
                                              <div class="form-group">
                                                  <label>Contraseña</label>
                                                  <input class="form-control" id="contra2" placeholder="Contraseña" name="contra2">
                                              </div>
                                              <div class="form-group">
                                                  <label>Tipo de usuario</label>
                                                  <select class="form-control cent" name="tp2" id="tp2">
                                                    <option value="">:::Elija una opcion:::</option>
                                                  </select>
                                                  <input type="hidden" name="idcb2" id="idcb2" value="">
                                              </div>
                                              <div class="form-group cent">
                                                  <button type="button" class="btn btn-primary btn-block" id="btnmodificar"  name="button"data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>Actualizar</button>
                                              </div>
                                            </table>
                                          </form>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- /.panel-body -->
                              </div>
                              <!-- /.panel -->
                          </div>
                        </div>

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
