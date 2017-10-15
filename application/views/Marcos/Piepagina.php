</div>
</div>
</div>
</div>

<link href="<?php echo base_url(); ?>css/demo.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/common.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/modernizr.custom.79639.js"></script>
<script src="<?php echo base_url(); ?>js/doSearch.js"></script>
<script src="<?php echo base_url(); ?>js/paging.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>js/plugins/morris/raphael.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="<?php echo base_url(); ?>js/alertify.js"></script>

    <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ link para js $$$$$$$$$$$$$$$$$$$$$$$$$$$-->
    <script type="text/javascript">
      var url = "<?php echo base_url(); ?>";
    </script>
    <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Usuario $$$$$$$$$$$$$$$$$$$$$$$$$$$-->
    <?php if($this->uri->segment(1)=='cUsuarios'){?>
        <script src="<?php echo base_url(); ?>js/Usuario/usuario.js"></script>
    <?php }?>
      <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Mismo JS $$$$$$$$$$$$$$$$$$$$$$$$$$$-->
    <?php if($this->uri->segment(1)==''){?>
        <script src="<?php echo base_url(); ?>js/Inicio/inicio.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cIndex'){?>
        <script src="<?php echo base_url(); ?>js/Inicio/inicio.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cLogin'){?>
        <script src="<?php echo base_url(); ?>js/Inicio/inicio.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cAdmin'){?>
        <script src="<?php echo base_url(); ?>js/Admin/Admin.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cAdmin1'){?>
        <script src="<?php echo base_url(); ?>js/Admin/Admin1.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cAdmin2'){?>
        <script src="<?php echo base_url(); ?>js/Admin/Admin2.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cMateria'){?>

      <script src="<?php echo base_url(); ?>js/materia/materia.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cPrere'){?>
        <script src="<?php echo base_url(); ?>js/Prerequisito/prere.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cAsignP'){?>
        <script src="<?php echo base_url(); ?>js/AsginacionP/AsignaP.js"></script>
    <?php }?>
    <?php if($this->uri->segment(1)=='cInscriA'){?>
        <script src="<?php echo base_url(); ?>js/Asignacion/asignacion.js"></script>
    <?php }?>
      <!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& -->

</body>
</html>
