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
                    <h3>Actualizacion de Materias</h3>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Ingresos</a>
                        </li>
                     
                    </ul>
                    <!-- Tab panes -->
                
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                          <div class="col-lg-3">
                          </div>
                          <div class="col-lg-6">
                            <form class="" id="form" action="<?php echo base_url();?>cnMateria/actualizar" method="post">
                              <table class="table-responsive">
                              <?php if($this->session->flashdata("Done")): ?>
                                <div class="alert alert-success" id="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                 <strong>Exito!</strong> Actualizaron los datos correctamente
                                </div>

                                <?php endif; ?>
                                <?php if($this->session->flashdata("Error")):?>
                                
                                    <div class="alert alert-danger" id="alerte">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Error!</strong> Error al actualizar los datos.
                                    </div>
                                <?php endif;?>
                                
                                <div class="form-group">

                                    <input class="form-control" value="<?php echo $materia->id_materia; ?>" name="id2" type="hidden">
                                </div>
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input class="form-control" id="codigo" value="<?php echo $materia->codigo; ?>" required="require" placeholder="Codigo" name="codigo2">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" id="nombre" value="<?php echo $materia->nombre; ?>" required="require" placeholder="Nombre" name="nombre2">
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
                                        <?php if(!empty($facultad)): ?>
                                        <?php foreach($facultad as $facu): ?>
                                        <option name="facultad" value="<?php echo $facu->id_facultad;?>"><?php echo $facu->nombre_f; ?></option>
                                        <?php endforeach; ?>
                                        <?php endif;?>
                                    </select>
                                    
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
</body>
</html>