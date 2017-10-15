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
      #imgtb{
        width: 90px;
        height: 75px;
      }

    </style>
  </head>
  <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Gestion de Alumnos</h3>
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


                            <form class="" action="<?php echo base_url(); ?>cAdmin/guardar" method="post" name="form" id="form">
                              <table class="table-responsive">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" name="id" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" id="nombre" placeholder="Nombre" name="nombre" required="require">
                                </div>
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input class="form-control" id="apellido" placeholder="Apellido" name="apellido" required="require">
                                </div>
                                <div class="form-group">
                                    <label>Seleccione una imagen</label>
                                    <input type="file" class="" id="fotos" placeholder="Apellido" name="fotos" >
                                </div>

                              </div>
                              <div class="col-lg-6">
                                &nbsp;
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="form-control cent" name="sexo" id="sexo" required="true">
                                      <option value="0">:::Seleccione su genero:::</option>
                                      <option value="Masculino">Masculino</option>
                                      <option value="Femenino">Femenino</option>

                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Edad</label>
                                    <input class="form-control" id="edad" placeholder="Edad" name="edad" type="number" min="0" max="90" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Numero Telefonico</label>
                                    <input class="form-control" id="tel" placeholder="Telefono" name="tel" required="true">
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" id="ema" placeholder="E-mail" name="ema" type="email" required="true">
                                </div>
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <style media="screen">
                                      #uss{
                                        text-align: center;
                                      }
                                      #uss2{
                                        text-align: center;
                                      }
                                    </style>
                                    <input class="form-control" id="uss" placeholder="Usuario" readonly="readonly"  name="uss"  required="true">
                                </div>
                              </div>
                              </table>
                              <div class="col-lg-12">  <div class="form-group cent">
                                    <button type="submit" class="btn btn-primary" name="button">Guardar</button>
                                </div></div>
                            </form>


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
                                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form id="frmmodificar" class="" action="<?php echo base_url();?>cAdmin/modificar" method="post">
                                            <table class="table-responsive">
                                              <div class="col-lg-6">
                                              <div class="form-group">
                                                  <input class="form-control" id="id2" name="id2" type="hidden">
                                              </div>
                                              <div class="form-group">
                                                  <label>Nombre</label>
                                                  <input class="form-control" id="nombre2" placeholder="Nombre" name="nombre2" required="require">
                                              </div>
                                              <div class="form-group">
                                                  <label>Apellido</label>
                                                  <input class="form-control" id="apellido2" placeholder="Apellido" name="apellido2" required="require">
                                              </div>
                                              <div class="form-group">
                                                  <label>Seleccione una imagen</label>
                                                  <input type="file" class="" id="fotos2" placeholder="Apellido" name="fotos2" required="require">
                                                  <input type="hidden"  id="fotoante" name="fotoante" value="">
                                              </div>

                                            </div>
                                            <div class="col-lg-6">
                                              &nbsp;
                                              <div class="form-group">
                                                  <label>Sexo</label>
                                                  <select class="form-control cent" name="sexo2" id="sexo2" required="true">
                                                    <option value="">:::Seleccione su genero:::</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>

                                                  </select>

                                              </div>
                                              <div class="form-group">
                                                  <label>Edad</label>
                                                  <input class="form-control" id="edad2" placeholder="Edad" name="edad2" type="number" min="0" max="90" required="true">
                                              </div>
                                              <div class="form-group">
                                                  <label>Numero Telefonico</label>
                                                  <input class="form-control" id="tel2" placeholder="Telefono" name="tel2" required="true">
                                              </div>
                                              <div class="form-group">
                                                  <label>E-mail</label>
                                                  <input class="form-control" id="ema2" placeholder="E-mail" name="ema2" type="email" required="true">
                                              </div>
                                              <div class="form-group">
                                                  <label>Usuario</label>
                                                  <input class="form-control" id="uss2" placeholder="Usuario"  readonly="readonly" name="uss2"  required="true">
                                              </div>
                                            </div>
                                            </table>
                                            <div class="form-group cent ">
                                                <button type="button" class="btn btn-primary btn-block" id="btnmodificar"  name="button"data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>Actualizar</button>
                                            </div>
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
