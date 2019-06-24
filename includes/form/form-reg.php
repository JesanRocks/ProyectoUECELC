<?php 
date('Y-d-m');

date('Y-d-m');

date('Y-d-m');

if (isset($_POST['dat_tut'])) {

// vp();

extract($_POST);
// creamos una bandera

if ($rela_est=="padre") { $parentesco=17; }
if ($rela_est=="madre") { $parentesco=16; }
if ($rela_est=="rep") { $parentesco=18; }

$result_transaccion = true;

// iniciamos transacción 
$conexion->begin_transaction();

 $sql="INSERT INTO `personas`(`ci`, `nac_id`, `fec_nac`, `pri_nom`, `seg_nom`, `pri_ape`, `seg_ape`, `pais_id`) VALUES ('$ci','$nac','$fec_na','$prinom','$segnom','$priape','$segape','$pais')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } 


$sql="SELECT `id` FROM `personas` WHERE `ci`=$ci";
if( !$ejc=$conexion->query("$sql") ) { $result_transaccion = false; } 
$_numFila=mysqli_num_rows($ejc);

  if ($_numFila==1) {
// alerta("Registro encontrado!");
while ($personas=mysqli_fetch_array($ejc)) {$id=$personas['id'];}
  }

$sql="INSERT INTO `direcciones`(`direccion`, `parroquia_id`, `persona_id`) VALUES ('$dir','$ComboMun','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } 

// if ($padre=="Si" && $madre=="No") {$parentesco=17;}
// if ($padre=="No" && $madre=="Si") {$parentesco=16;}
// if ($padre=="No" && $madre=="No") {$parentesco=18;}

$sql="INSERT INTO `representantes`(`edocivil_id`, `lug_nac`, `profesion`, `empresa`, `lug_trab`, `telf_emp`, `telf_cel`, `telf_hab`, `correo`, `parentesco_id`, `legal`, `persona_id`) VALUES ('$edoc','$lugN','$puo','$emp','$ldt','$n_emp','$n_cel','$n_hab','$correo','$parentesco','$legal','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } 



$sql="SELECT `id` FROM `representantes` WHERE `persona_id`=$id";
if( !$ejc=$conexion->query("$sql") ) { $result_transaccion = false; } 
$_numFila=mysqli_num_rows($ejc);

  if ($_numFila==1) {
// alerta("Registro encontrado!");
while ($representante=mysqli_fetch_array($ejc)) {$_SESSION['rep']=$representante['id'];}
  }


if ($rela_est=="padre") { 
	
echo "<br><a class='btn btn-info btn-block' href='madre.php'>Registrar datos de la madre</a>"; 
	 }

if ($rela_est=="madre") { 
echo "<br><a class='btn btn-info btn-block' href='padre.php'>Registrar datos del padre</a>"; 
	 }

if ($rela_est=="rep") { 
 echo "<br><a class='btn btn-info btn-block' href='madre_1.php'>Registrar datos de la madre</a>";
	}

  // if ($padre=="No" && $madre=="Si" && $legal=="Si") {
  //  echo "<br><a class='btn btn-info btn-block' href='padre.php'>Registrar datos del padre</a>"; 
  // }

  // if ($padre=="Si" && $madre=="No" && $legal=="Si") {
  //  echo "<br><a class='btn btn-info btn-block' href='madre.php'>Registrar datos de la madre</a>"; 
  // }

  // if ($padre=="No" && $madre=="No" && $legal=="Si") {
  //  echo "<br><a class='btn btn-info btn-block' href='madre_1.php'>Registrar datos de la madre</a>"; 
  // }

// $result_transaccion = false;

if($result_transaccion) {
	// consignamos
	$conexion->commit();
} else {
	// revertimos
	$conexion->rollback();
}

// $conexion->close();?>
</section>
<br>
<?php require_once 'includes/footer.php'; 
exit();
}
?>


<!--Combobox-->
  <script type="text/javascript">
	  $(document).ready(function(){
		$("#ComboEdo").change(function () {
		  
		  $("#ComboEdo option:selected").each(function () {
			id = $(this).val();

			$.post("includes/cb/getMunicipio.php", { id: id }, function(data){
			  $("#ComboMun").html(data);
			});            
		  });
		})
	  });
  </script>
<!--Formularios-->      
	<form class="form" action="" method="POST">
	  <div class="form-row">

		<div class="form-group col-md-6"> 
		  <label for="cedula">C.I. <span class="req">(*)</span></label>
		  <input class="form-control" min="0" type="number" required name="ci" placeholder="Cédula" value="<?php echo $cedula; ?>">
		</div>

		<div class="form-group col-md-3"> 
		  <label>Nacionalidad <span class="req">(*)</span></label>
			  <select class="form-control" name="nac" id="nac" required>
		  <option value="">Seleccionar</option>
			<?php
			   $Nacionalidad="SELECT * FROM `eav` WHERE tipo_id=3";
			   $NC=mysqli_query($conexion,$Nacionalidad);
			  while ($filan=mysqli_fetch_assoc($NC)) {
			?>
			  <option value="<?php echo $filan['id']; ?>"> <?php echo $filan['dsc']; ?></option>
			<?php
			  }
			?>
		  </select>
		</div>

		<div class="form-group col-md-3">
		  <label for="edad">Fecha de nacimiento <span class="req">(*)</span></label>
		  <input class="form-control" type="date" name="fec_na" min="1938-01-01" max="<?php echo date('Y-m-d');?>" required>
		</div>

		<div class="form-group col-md-3">
			<label for="nomap">Primer nombre <span class="req">(*)</span></label>
			<input class="form-control" type="text" name="prinom" required>
		</div>

		<div class="form-group col-md-3">
			<label for="nomap">Segundo nombre</label>
			<input class="form-control" type="text" name="segnom" >
		</div>

		<div class="form-group col-md-3">
			<label for="nomap">Primero apellido <span class="req">(*)</span></label>
			<input class="form-control" type="text" name="priape" required>
		</div>

		<div class="form-group col-md-3">
			<label for="nomap">Segundo apellido</label>
			<input class="form-control" type="text" name="segape" >
		</div>

			<div class="form-group col-md-3"> 
			  <label for="pais_n">País de nacimiento <span class="req">(*)</span></label>
			  <select class="form-control" name="pais" id="pais" required>
				<option value="">Seleccionar</option>
				<?php
				 $sql="SELECT * FROM paises ORDER BY dsc ASC";
				 $ejc=mysqli_query($conexion,$sql);
				  while ($filaP1=mysqli_fetch_assoc($ejc)) {
				?>
				  <option value="<?php echo $filaP1['id']; ?>"> <?php echo $filaP1['dsc']; ?></option>
				<?php
				  }
				?>
			  </select>
			</div>

		<div class="form-group col-md-3"> 
		  <label for="pais_n">Lugar de nacimiento</label>
		  <input class="form-control" type="text"  name="lugN" placeholder="Lugar de nacimiento">
		</div>

		<div class="form-group col-md-3">
		  <label for="estado">Estado <span class="req">(*)</span></label>
		  <select class="form-control" name="ComboEdo" id="ComboEdo" required>
			<option value="">Seleccionar</option>
			<?php
			  $edo="SELECT * FROM estados ORDER BY dsc ASC";
			  $edoc=mysqli_query($conexion,$edo); 

			  while ($fila=mysqli_fetch_assoc($edoc)) {
			?>
			<option value="<?php echo $fila['id']; ?>"> <?php echo $fila['dsc']; ?></option>
			<?php
			  }
			?>
		  </select>
		</div>

		<div class='form-group col-md-3'> 
		  <label for="municipio">Municipio <span class="req">(*)</span></label>
		  <select class="form-control" name="ComboMun" id="ComboMun" required></select>
		</div>

		<div class="form-group col-md-3"> 
		  <label>Estado civil <span class="req">(*)</span></label>
			  <select class="form-control" name="edoc" id="edoc" required>
		  <option value="">Seleccionar</option>
			<?php
			   $edoc="SELECT * FROM `eav` WHERE tipo_id=9";
			   $ecc=mysqli_query($conexion,$edoc);
			  while ($filaec=mysqli_fetch_assoc($ecc)) {
			?>
			  <option value="<?php echo $filaec['id']; ?>"> <?php echo $filaec['dsc']; ?></option>
			<?php
			  }
			?>
		  </select>
		</div>

		<div class="form-group col-md-3"> 
		  <label>Profesión u oficio <span class="req">(*)</span></label>
		  <input class="form-control" type="text" placeholder="Profesion u oficio" name="puo" required >
		</div>

		<div class="form-group col-md-3"> 
		  <label>Empresa</label>
		  <input class="form-control" type="text" placeholder="Empresa" name="emp">
		</div>

		<div class="form-group col-md-3"> 
		  <label>Lugar de trabajo</label>
		  <input class="form-control" type="text" placeholder="Lugar de trabajo" name="ldt">
		</div>

		<div class="form-group col-md-4">
		  <label>Teléfono de la empresa</label>
		  <input class="form-control" type="number" min="0" maxlength="11" placeholder="Numero" name="n_emp">
		</div>
			

		<div class="form-group col-md-4">
		  <label>Teléfono de habitación</label>
		  <input class="form-control" type="number" min="0" maxlength="11" placeholder="Numero" name="n_hab">
		</div>

		<div class="form-group col-md-4">
		  <label>Teléfono celular</label>
		  <input class="form-control" type="number" min="0" maxlength="11" placeholder="Numero" name="n_cel">
		</div>

		<div class="form-group col-md-6"> 
		  <label>Dirección <span class="req">(*)</span></label>
		  <input class="form-control" type="text" placeholder="Dirección" name="dir" required>
		</div>
		
		<div class="form-group col-md-6"> 
		  <label>Correo</label>
		  <input class="form-control" type="email" placeholder="Correo" name="correo">
		</div>

		<div class='form-group col-md-12'> 
<h3>
¿Qué relacion tiene con el estudiante?
</h3>
			  
		</div>

		<div class='form-group col-md-4'> 
		  <label for="padre" ></label>
		  <label><input type=radio name="rela_est" value="padre" required> Padre </label>
		</div>
		
		<div class='form-group col-md-4'> 
		  <label for="madre"></label>
		  <label><input type=radio name="rela_est" value="madre" > Madre </label>
		</div>

		<div class='form-group col-md-4'> 
		  <label for="madre"></label>
		  <label><input type=radio name="rela_est" value="rep" > Otros </label>
		</div>

		<div class='form-group col-md-12' style="display: none;"> 
		  <label for="legal">¿Es el representante legal?</label><br>                
		  <label><input type=radio name="legal" value="Si" required checked > Si </label>
			  
		  <label><input type=radio name="legal" value="No" > No </label>
		</div>
		<div class='form-group col-md-4 offset-4'> 
		<button class="btn btn-block btn-info" name="dat_tut" value="1">Cargar datos</button>
		</div>
		
	  </div>
	</form>
<br>
<br> 
<br>