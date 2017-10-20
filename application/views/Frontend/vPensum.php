<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Bootstrap Core CSS -->
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.js"></script>
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
</head>
<body>

<?php if(!empty($materiasf)):?>
<?php foreach($materiasf as $pensum):?>
<div class="row ">

<div class="espacio">
<div class="codigo"><?php echo $pensum->codigo;?></div>
<div class="id"><?php echo $pensum->id_materia;?></div>
<div class="nombre"><?php echo $pensum->nombre;?></div>
<div class="pre">.</div>
<div class="uv"><?php echo $pensum->uv;?></div>
<div><?php echo count($materiasf);?></div>
</div>

</div>

<?php endforeach;?>
<?php endif;?>

<?php if(count($materiasf)>5): ?>



<?php endif;?>




</body>
</html>




