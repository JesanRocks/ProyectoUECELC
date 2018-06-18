<?php include 'includes/header.php'; ?>
    <section class="container-fluid row text-justify">  
<?php include 'includes/menu.php'; ?>

<div class="col-md-9">
	<table class="table table-bordered table-hover table-info">
		<tr class="table-active">
			<th>ID</th>
			<th>Nombres y Apellidos</th>
			<th>Cedula</th>
			<th>Usuario</th>
			<th>Fecha de ingreso</th>
			<th>Desempeño</th>
			<th>Condicion laboral</th>
			<th>Horas asignadas</th>
		</tr>

		<?php 
			$Consulta="SELECT * FROM `Usuario`";
			$Ejecutar=mysqli_query($conexion,$Consulta);

			$i=0;

			while ($fila=mysqli_fetch_array($Ejecutar)) {
				 
				$User=$fila['nom_u']; 
				$Nombres=$fila['nom_ap']; 
				$Cedula=$fila['cedula'];
				$Fecha_ing=$fila['f_ingreso']; 
				$Desemp=$fila['desemp'];
				$conlab=$fila['cond_lab']; 
				$Horas=$fila['horas'];

				$i++;
		?>
		<tr align="center">
			<td><?php echo "$i"; ?></td>
			<td><?php echo "$Nombres"; ?></td>
			<td><?php echo "$Cedula"; ?></td>
			<td><?php echo "$User"; ?></td>
			<td><?php echo "$Fecha_ing"; ?></td>
			<td><?php echo "$Desemp"; ?></td>
			<td><?php echo "$conlab"; ?></td>
			<td><?php echo "$Horas"; ?></td>
		</tr>

		<?php } ?>

	</table>

</div>
    
    </section>
    <br>
<?php include 'includes/footer.php'; ?>