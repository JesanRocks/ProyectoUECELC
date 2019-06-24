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
			<h5>
		  Cédula del estudiante
			</h5>
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
 INNER JOIN estudiantes ON personas.id=estudiantes.persona_id 
 WHERE ci=$cedula";

 $ejc=mysqli_query($conexion,$sql);
 while ($row=mysqli_fetch_array($ejc)) {extract($row);}

 if (isset($ci)) {
 	alerta("Estudiante ya se encuetra registrado");
 }else{
   require_once 'includes/form/form-est.php';
 }
 
} 
?>

</section>
<?php require_once 'includes/footer.php'; ?> 