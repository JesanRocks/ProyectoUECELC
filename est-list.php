<?php include 'includes/header.php'; ?>
    <section class="container-fluid row text-justify">  
<?php include 'includes/menu.php'; ?>

<div class="col-md-9">
	<table class="table table-bordered table-hover table-info">
		<tr class="table-active">
			<th>ID</th>
			<th>Nombres y Apellidos</th>
			<th>Cedula</th>
			<th>Dirección</th>
			<th>Año</th>
			<th>Sección</th>
			<th>Turno</th>
		</tr>

		<?php 
			$Consulta="SELECT * FROM `Estudiantes`";
			$Ejecutar=mysqli_query($conexion,$Consulta);

			$i=0;

			while ($fila=mysqli_fetch_array($Ejecutar)) {
				 
				$ID=$fila['id_estudiantes'];
				$Nombres=$fila['nom_ap'];
				$Cedula=$fila['cedula'];
				$Direccion=$fila['direccion'];

				$i++;
		?>
		<tr align="center">
			<td><?php echo "$ID"; ?></td>
			<td><?php echo "$Nombres"; ?></td>
			<td><?php echo "$Cedula"; ?></td>
			<td><?php echo "$Direccion"; ?></td>
			<!--td><a href="formulario.php?editar=<?php #echo "$id"; ?>">Editar</a></td>
			<td><a href="formulario.php?borrar=<?php #echo "$id"; ?>">Borrar</a></td-->
		</tr>

		<?php } ?>

	</table>

</div>
    
    </section>
    <br>
<?php include 'includes/footer.php'; ?>