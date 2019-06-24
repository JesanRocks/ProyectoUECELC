<?php 

if (isset($_POST['dat_est'])) {
extract($_POST);

$dependencia=$_SESSION['rep'];

// creamos una bandera
$result_transaccion = true;

// iniciamos transacción 
$conexion->begin_transaction();

$sql="INSERT INTO `personas`(`ci`, `nac_id`, `fec_nac`, `pri_nom`, `seg_nom`, `pri_ape`, `seg_ape`, `pais_id`) VALUES ('$ci','$nac','$fec_na','$prinom','$segnom','$priape','$segape','$pais')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);

$sql="SELECT `id` FROM `personas` WHERE `ci`=$ci";
if( !$ejc=$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);
$_numFila=mysqli_num_rows($ejc);

if ($_numFila==1) {
	while ($personas=mysqli_fetch_array($ejc)) {$id=$personas['id'];}
}

$sql="INSERT INTO `estudiantes`(`lateralidad_id`, `sexo_id`, `peso`, `estatura`, `tall_cam`, `tall_pan`, `tall_zap`, `telefono`, `persona_id`,`representante_id`) VALUES ('$lateralidad','$sex','$peso','$estatura','$TallaC','$TallaP','$TallaZ','$num','$id','$dependencia')";
if( !$ejc=$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);

  $sql="INSERT INTO `vivienda`(`dsc`, `persona_id`) VALUES ('$tipo_v','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);
 
  $sql="INSERT INTO `vivienda`(`dsc`, `persona_id`) VALUES ('$cond','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);
   
  $sql="INSERT INTO `vivienda`(`dsc`, `persona_id`) VALUES ('$techo','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);

  $sql="INSERT INTO `vivienda`(`dsc`, `persona_id`) VALUES ('$pared','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);

  $sql="INSERT INTO `direcciones`(`direccion`, `parroquia_id`, `persona_id`) VALUES ('$dir','$ComboMun','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion);

alerta("El estudiante se registro exitososamente");
if($result_transaccion) {
	// consignamos
	$conexion->commit();
} else {
	// revertimos
	$conexion->rollback();
}
//header("location:listado.php?msj=1");
//exit();

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
	<form class="form" action="" method="post">
	   <div class="form-row">

			<div class="form-group col-md-6">
			  <label for="cedula">C.I. <span class="req">(*)</span></label>
			  <input class="form-control" min="0" type="number" name="ci" id="ci" placeholder="Cédula" required value="<?php echo $cedula;?>">
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
			  <label for="fecha_n">Fecha de nacimiento <span class="req">(*)</span></label>
			  <input class="form-control" type="date" name="fec_na" min="1938-01-01" max="<?php echo date('Y-m-d');?>" required>
			</div>

			<div class="form-group col-md-3">
				<label for="nomap">Primer nombre <span class="req">(*)</span></label>
				<input class="form-control" type="text" name="prinom" required >
			</div>
			<div class="form-group col-md-3">
				<label for="nomap">Segundo nombre</label>
				<input class="form-control" type="text" name="segnom" >
			</div>
			<div class="form-group col-md-3">
				<label for="nomap">Primero apellido <span class="req">(*)</span></label>
				<input class="form-control" type="text" name="priape" required >
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
				  while ($filaP=mysqli_fetch_assoc($ejc)) {
				?>
				  <option value="<?php echo $filaP['id']; ?>"> <?php echo $filaP['dsc']; ?></option>
				<?php
				  }
				?>
			  </select>
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

			<div class="form-group col-md-3"> 
			  <label for="municipio">Municipio <span class="req">(*)</span></label>
			  <select class="form-control" name="ComboMun" id="ComboMun" required></select>
			</div>

			<div class="form-group col-md-2"> 
			  <label for="lateralidad">Lateralidad <span class="req">(*)</span></label><br>
		  
			  <label><input type="radio" name="lateralidad" value="21" required> Izquierdo</label><br>
			  
			  <label><input type="radio" name="lateralidad" value="22" required checked > Derecho</label><br>
			  
			  <label><input type="radio" name="lateralidad" value="23" required> Ambas</label><br>
			</div>

			<div class="form-group col-md-1"> 
			  <label for="genero">Genero <span class="req">(*)</span></label><br>
			
			  <label><input type="radio" name="sex" value="7" required>M</label>
			
			  <label><input type="radio" name="sex" value="8" required>F</label>
			</div>

			<div class="form-group col-md-1"> 
			  <label for="peso">Peso</label>
			  <input class="form-control" type="number" min="0" name="peso" placeholder="Peso">
			</div>

			<div class="form-group col-md-2"> 
			  <label for="estatura">Estatura</label>
			  <input class="form-control" type="text" name="estatura" placeholder="Estatura">
			</div>

			<div class="form-group col-md-2"> 
			  <label for="TallaC">Talla camisa</label>
			  <input class="form-control" type="text" name="TallaC" placeholder="Talla camisa">
			</div>

			<div class="form-group col-md-2"> 
			  <label for="TallaP">Talla pantalón</label>
			  <input class="form-control" type="number" name="TallaP" placeholder="Talla pantalon">
			</div>

			<div class="form-group col-md-2"> 
			  <label for="TallaZ">Talla zapatos</label>
			  <input class="form-control" type="number" name="TallaZ" placeholder="Talla zapato">
			</div>

			<div class="form-group col-md-12"> 
			  <label for="vivienda">Vivienda</label>
			</div>

			<div class="form-group col-md-3"> 
			  <label>Tipo de vivienda <span class="req">(*)</span></label>
			  <select class="form-control" name="tipo_v" id="tipo_v" required>
				<option value="">Seleccionar</option>
				<?php
				   $tipo_v="SELECT * FROM `eav` WHERE tipo_id=26";
				   $tpc=mysqli_query($conexion,$tipo_v);
				  while ($filatv=mysqli_fetch_assoc($tpc)) {
				?>
				  <option value="<?php echo $filatv['id']; ?>"> <?php echo $filatv['dsc']; ?></option>
				<?php
				  }
				?>
			  </select>
			</div>

			<div class="form-group col-md-3"> 
			  <label>Condición de vivienda <span class="req">(*)</span></label>
			  <select class="form-control" name="cond" id="cond" required="">
				<option value="">Seleccionar</option>
				<?php
				   $cond_v="SELECT * FROM `eav` WHERE tipo_id=34";
				   $cvc=mysqli_query($conexion,$cond_v);
				  while ($filacv=mysqli_fetch_assoc($cvc)) {
				?>
				  <option value="<?php echo $filacv['id']; ?>"> <?php echo $filacv['dsc']; ?></option>
				<?php
				  }
				?>
			  </select>
			</div>

			<div class="form-group col-md-3"> 
			  <label>Tipo techo <span class="req">(*)</span></label>          
			  <select class="form-control" name="techo" id="techo" required>
				<option value="">Seleccionar techo</option>
				<?php
				   $it="SELECT * FROM `eav` WHERE tipo_id=40";
				   $itc=mysqli_query($conexion,$it);
				  while ($filait=mysqli_fetch_assoc($itc)) {
				?>
				  <option value="<?php echo $filait['id']; ?>"> <?php echo $filait['dsc']; ?></option>
				<?php
				  }
				?>
			  </select>
			</div>

			<div class="form-group col-md-3"> 
			  <label >Tipo pared <span class="req">(*)</label>
			  <select class="form-control" name="pared" id="pared" required>
				<option value="">Seleccionar pared</option>
				<?php
				   $ip="SELECT * FROM `eav` WHERE tipo_id=49";
				   $ipc=mysqli_query($conexion,$ip);
				  while ($filaip=mysqli_fetch_assoc($ipc)) {
				?>
				  <option value="<?php echo $filaip['id']; ?>"> <?php echo $filaip['dsc']; ?></option>
				<?php
				  }
				?>
			  </select>                
			</div>

			<div class="form-group col-md-6"> 
			  <label>Telefono </label>
			  <input class="form-control" type="number" min="0" placeholder="Numero" maxlength="11" name="num">
			</div>

			<div class="form-group col-md-6"> 
			  <label>Dirección <span class="req">(*)</span></label>
			  <input class="form-control" type="" placeholder="Dirección" name="dir" required>
			</div>

			<button class="btn btn-block btn-info" name="dat_est" value="1">Cargar datos</button>
	  </div>
	</form>
	<br>
	<br>
	<br>
