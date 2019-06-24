<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';
?> 
	<section class="container">
<br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><h3>Inscritos</h3></a>
  </li>
</ul>
<br>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	<?php
		$SQL="SELECT * FROM personas 
 inner join direcciones on personas.id=direcciones.persona_id
 inner join estudiantes on personas.id=estudiantes.persona_id 
 inner join inscripciones on estudiantes.id=inscripciones.estudiante_id
 inner join representantes on estudiantes.representante_id=representantes.id

 ";
		$Ejec=mysqli_query($conexion,$SQL);
	?>        
	<table id="table_id" class="display table">
		<thead>
			<tr>
				<th>ID</th>
				<th>C.I</th>
				<th>Alumno</th>
				<th>Año</th>
				<th>Sección</th>
				<th>Periodo</th>
				<th>Representante</th>
				<th>Opciones</th>
			</tr>
		</thead>
   
		<tbody>
		<?php 
		  $ii=0;

		  while ($fila=mysqli_fetch_assoc($Ejec)) {
		  	//echo "<pre>";print_r($fila);echo "</pre>";
			extract($fila); 
			$ii++;

			$sql="SELECT * FROM `personas`,`representantes` WHERE representantes.persona_id=personas.id AND representantes.id='$representante_id'";
			$ejC=mysqli_query($conexion,$sql);
			 while ($filaa=mysqli_fetch_assoc($ejC)) { extract($filaa, EXTR_PREFIX_ALL, "");}

			$sql="SELECT * FROM `inscripciones` WHERE estudiante_id='$estudiante_id'";
			$ejC=mysqli_query($conexion,$sql);
			 while ($filb=mysqli_fetch_assoc($ejC)) { extract($filb, EXTR_PREFIX_ALL, "_ins_");}

		  ?> 
			<tr>
				<td title="<?php echo "$_ins__id"; ?>"><?php echo "$ii"; ?></td>
				<td><?php echo "$ci"; ?></td>
				<td><?php echo "$pri_nom $seg_nom $pri_ape $seg_ape"; ?></td>
				<td><?php echo "$grado"; ?></td>
				<td><?php echo "$seccion"; ?></td>
				<td><?php echo "$periodo"; ?></td>
				<td><?php echo "$_pri_nom $_pri_ape - $_ci"; ?></td>
				<td>
					<a class="btn btn-info btn-sm" href="listados_inscritos.php?editar=<?php echo $_ins__id; ?>">
						<i class="fas fa-edit"></i> Editar
					</a>
					<a class="btn btn-danger btn-sm" href="listados_inscritos.php?borrar=<?php echo $_ins__id; ?>">
						<i class="fas fa-trash-alt"></i> Borrar
					</a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<?php
	if (isset($_GET['editar'])) { $editar_id=$_GET['editar']; require_once 'includes/form/edit-ins.php'; }
	if (isset($_GET['borrar'])) { $borrar_id=$_GET['borrar']; echo $borrar_id; }

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