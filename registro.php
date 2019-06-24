<?php
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>	
<section class="container">

  <div class="m-5">
	<form action="" method="get">
	  <div class="form-row">      
		<div class="form-group col-md-4 offset-md-4"> 
			<label>
<h5>Cédula del representante</h5>
			</label>
		  <input class="form-control" type="number" name="cedula" placeholder="Cédula" required>
		</div>
		 
		<div class="form-group col-md-4 offset-md-4">      
		  <button class="btn btn-primary btn-block" name="buscar" value="1">Buscar</button>
		</div>
	 
	  </div>
	</form>
  </div>
<?php 

if (isset($_GET['buscar'])) {

	$cedula=$_GET['cedula'];
	$sql="SELECT * FROM personas 
 INNER JOIN direcciones ON personas.id=direcciones.persona_id
 INNER JOIN municipios ON municipios.id=direcciones.parroquia_id 
 INNER JOIN estados ON estados.id=municipios.estado_id  
 INNER JOIN representantes ON personas.id=representantes.persona_id 
 WHERE ci=$cedula"; 
 	$ejc=mysqli_query($conexion,$sql);
	$_numFila=mysqli_num_rows($ejc);

	if ($_numFila==1) {
alerta("Registro encontrado!");
		while ($row=mysqli_fetch_array($ejc)) {extract($row);}
		$_SESSION['rep']=$id;
		require_once 'includes/form/edit-reg.php';
	}else{
if (!isset($_POST['dat_tut'])) { alerta("Se creara un registro NUEVO"); }
if (isset($_POST['dat_tut'])) { alerta("Registro exitoso"); }
		require_once 'includes/form/form-reg.php';
	}
 
} 
?>

</section>
<br>
<?php require_once 'includes/footer.php'; ?>
