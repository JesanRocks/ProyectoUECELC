<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';
?> 
    <section class="container">
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Representantes</a>
  </li>
</ul>
<br>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <?php
        $SQL="SELECT * FROM representantes INNER JOIN personas ON representantes.persona_id=personas.id WHERE legal='Si'";
        $Ejec=mysqli_query($conexion,$SQL);
    ?>        
    <table id="table_id" class="display table">
        <thead>
            <tr>
                <th>ID</th>
                <th>C.I</th>
                <th>Representante</th>
                <th>Opciones</th>
            </tr>
        </thead>
   
        <tbody>
        <?php 
          $ii=0;

          while ($fila=mysqli_fetch_assoc($Ejec)) {
            extract($fila); 
            $ii++;
          ?> 
            <tr>
                <td><?php echo "$ii"; ?></td>
                <td><?php echo "$ci"; ?></td>
                <td><?php echo "$pri_nom $seg_nom $pri_ape $seg_ape"; ?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="listados_representantes.php?editar=<?php echo $id; ?>">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                    <a class="btn btn-danger btn-sm" href="listados_representantes.php?borrar=<?php echo $id; ?>">
                        <i class="fas fa-trash-alt"></i> Borrar
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php
    if (isset($_GET['editar'])) { $editar_id=$_GET['editar']; require_once 'includes/form/edit-rep.php';
    }

?>

  </div>
</div>        


<script>
    $(document).ready( function () {
        $('.table').DataTable( {
        language: {
            "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
        }
    } );
    } );
</script>

    </section>
<?php require_once 'includes/footer.php'; ?> 