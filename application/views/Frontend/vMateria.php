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
                    <h3>Gestion de Materias</h3>
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
                            <form class="" id="form" action="<?php echo base_url();?>cMateria/guardar" method="post">
                              <table class="table-responsive">
                                <div class="form-group">

                                    <input class="form-control" name="id" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input class="form-control" id="codigo" required="require" placeholder="Codigo" name="codigo">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" id="nombre" required="require" placeholder="Nombre" name="nombre">
                                </div>

                                <div class="form-group">
                                    <label>UV</label>
                                    <select name="uv" id="uv" class="form-control cent">
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Facultad</label>
                                    <select class="form-control cent" name="tp" id="tp">
                                      <option value="0">:::Elija una opcion:::</option>
                                    </select>
                                    <input type="hidden" name="idcb" id="idcb" value="">
                                </div>


                                <div class="form-group cent">
                                    <button type="submit" class="btn btn-primary" id="guardar" name="button">Guardar</button>
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
                                          <form id="frmmodificar" class="" action="<?php echo base_url();?>cMateria/modificar" method="post">
                                            <table class="table-responsive">
                                              <div class="form-group">

                                                  <input class="form-control" id="id2" name="id2" type="hidden">
                                              </div>
                                              <div class="form-group">
                                                  <label>Codigo</label>
                                                  <input class="form-control" id="codigo2" placeholder="Codigo" name="codigo2">
                                              </div>
                                              <div class="form-group">
                                                  <label>Nombre</label>
                                                  <input class="form-control" id="nombre2" placeholder="Nombre" name="nombre2">
                                              </div>
                                              <div class="form-group">
                                              <label>UV</label>
                                              <select name="uv" id="uv" class="form-control cent">
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              </select>
                                          </div>
                                              <div class="form-group">
                                                  <label>Facultad</label>
                                                  <select class="form-control cent" name="tp2" id="tp2">
                                                    <option value="0">:::Elija una opcion:::</option>
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
