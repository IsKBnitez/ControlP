<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control Pensum</title>

		<!-- Bootstrap Core CSS -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.js"></script>
		<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>css/alertify.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="<?php echo base_url(); ?>css/plugins/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style media="screen">
	.caja{
		margin-top: 15%;
	}
    .cente{ text-align: right;}
</style>
</head>

<body>

    <div class="container">
        <div class="row caja" >
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingrese porfavor</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="form" method="post" action="<?php echo base_url(); ?>cLogin/Ingresar">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="uss" type="user" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="contra" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordarme
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-lg btn-success btn-block">Iniciar</button>
                                <br>
                                <a class="cente" href="<?php echo base_url(); ?>cRecuperar">
                                        recuperar contraseña
                                </a>
                                <script src="<?php echo base_url(); ?>js/alertify.js"></script>
                                <?php
                                if($this->uri->segment(2)=='Ingresar'){
                                  if($men=="Verifique sus datos"){
                                    echo "<script>
                                                  alertify.error('$men');
                                    </script>";
                                  }
                              }

                                ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>js/metisMenu.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>js/sb-admin-2.js"></script>

</body>

</html>
