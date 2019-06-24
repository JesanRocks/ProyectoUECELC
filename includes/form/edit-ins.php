<!--Formularios-->
<hr>
<h3 align="center">Actualización de inscripción</h3>      
	<form class="form" action="" method="POST">
	  <div class="form-row">

		<div class="form-group col-md-4"> 
			<label>Año</label>
			<select  class="form-control" name="grado" required >
				<option value="">Seleccionar</option>
				<option value="1er">1er</option>
				<option value="2do">2do</option>
				<option value="3er">3er</option>
				<option value="4to">4to</option>
				<option value="5to">5to</option>
			</select>
		</div>

	  <div class='form-group col-md-4'>
			<label>Sección</label>
			<select  class="form-control" name="seccion" required >
				<option value="">Seleccionar</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
				<option value="F">F</option>
				<option value="G">G</option>
			</select>		
	  </div>

	  <div class='form-group col-md-4'>
			<label>Periodo</label>
<input class="form-control" type="hidden" name="id" value="<?php if(isset($_GET["editar"])){ echo $_GET["editar"]; }?> " readonly required >
<input class="form-control" type="number" name="periodo" value="<?php echo date("Y"); ?>" required >
	  </div>

		<div class="form-group col-md-4 offset-md-4">
		<button class="btn btn-block btn-info" name="act_ins" value="1">Actualizar inscripción</button>
		</div>

	  </div>
	</form>
	 
<?php  

if (isset($_POST['act_ins'])) {
 extract($_POST);
  $_id_edit=$_GET["editar"];
  $ql="UPDATE `inscripciones` SET `grado`='$grado',`seccion`='$seccion',`periodo`='$periodo'  WHERE id='$_id_edit'";
  $ejc=mysqli_query($conexion,$ql);  
  
  if ($ejc) {
	  echo "<script>alert('Inscripcion actualizada')</script> 
	  <script>top.location.href='listados_inscritos.php';</script>";
  }

}

?>
<br>
<br>
<br>
	 