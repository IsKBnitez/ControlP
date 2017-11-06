<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Materias</title>
    <style>

    body{
        font-family: sans-serif;
    }
    
    .titulo{
        
        text-align:center;
        color: #33333;
    }

    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    </style>

</head>

<body>


<script type="text/php">
  if (isset($pdf))
    {
      $font = Font_Metrics::get_font("Arial", "bold");
      $pdf->page_text(765, 550, "Pagina {PAGE_NUM} de {PAGE_COUNT}", $font, 9, array(0, 0, 0));
    }
</script>

    <!--header para cada pagina-->
    <h3 class="titulo">Materias</h3>
    <!--footer para cada pagina-->
    <div id="footer">
        <!--aqui se muestra el numero de la pagina en numeros romanos-->
        <p class="page"></p>
    </div>
                    <h2 class="titulo">Reporte de materias</h2>
  
                    
                    
                    
                    <table class="table table-bordered" id="example1">
                        <thead>
                        <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Codigo</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">U.V</th>
                        <th class="text-center">Facultad</th>
                        <th class="text-center">Estado</th>
                        
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($materia)):  ?>
                        <?php foreach ($materia as $matef):?>
                        <tr>
                        <td class="text-center"><?php echo $matef->id_materia; ?></td>
                        <td class="text-center"><?php echo $matef->codigo;?></td>
                        <td class="text-center"><?php echo $matef->nombre;?></td>
                        <td class="text-center"><?php echo $matef->uv;?></td>
                        <td class="text-center"><?php echo $matef->nombre_f;?></td>
                        <td class="text-center"><?php echo $matef->estado;?></td>
                        <td class="text-center">
                        
                        
                        </td>
                        </tr>
                        
                        

                        <?php endforeach;?>
                        <?php endif; ?>                        
                        </tbody>
                        
                        </table>
                        
</body>

</html>