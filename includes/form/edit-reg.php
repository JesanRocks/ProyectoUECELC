<?php 
$a=date('Y-m-d');

if (isset($_POST['dat_tut'])) {
  extract($_POST);


  
  $ql="UPDATE `personas` SET `ci`='$cedula',`nac_id`='$nac',`fec_nac`='$fn',`pri_nom`='$pn',`seg_nom`='$sn',`pri_ape`='$pa',`seg_ape`='$sa',`pais_id`='$pais' WHERE ci='$ci'";
  $ejc=mysqli_query($conexion,$ql);

  $ql="UPDATE `direcciones` SET `direccion`='$direcc',`parroquia_id`='$ComboMun' WHERE persona_id='$persona_id'";
  $ejc=mysqli_query($conexion,$ql);

if ($pad=="Si" && $mad=="No") {$parentesco=16;}
if ($pad=="No" && $mad=="Si") {$parentesco=17;}
if ($pad=="No" && $mad=="No") {$parentesco=18;}

  $ql="UPDATE `representantes` SET `edocivil_id`='$edoc',`lug_nac`='$ln',`profesion`='$puo',`empresa`='$empresa',`lug_trab`='$ldt',`telf_emp`='$tlf1',`telf_cel`='$tlf3',`telf_hab`='$tlf2',`correo`='$mail',`parentesco_id`='$parentesco',`legal`='$leg' WHERE persona_id='$persona_id'";
  $ejc=mysqli_query($conexion,$ql);

  $ql="UPDATE `representantes` SET `edocivil_id`='$edoc',`lug_nac`='$ln',`profesion`='$puo',`empresa`='$empresa',`lug_trab`='$ldt',`telf_emp`='$tlf1',`telf_cel`='$tlf3',`telf_hab`='$tlf2',`correo`='$mail',`parentesco_id`='$parentesco',`legal`='$leg' WHERE persona_id='$persona_id'";
  $ejc=mysqli_query($conexion,$ql);  

/*
	if ($parentesco_id==16 && $legal=="Si") {
	 echo "<br> <a class='btn btn-info btn-block' href='padre.php'>Registrar datos del padre</a>"; 
	}

	if ($parentesco_id==17 && $legal=="Si") {
	 echo "<br> <a class='btn btn-info btn-block' href='madre.php'>Registrar datos de la madre</a>"; 
	}

	  if ($parentesco_id==18  && $legal=="Si") {
	 echo "<br> <a class='btn btn-info btn-block' href='madre_1.php'>Registrar datos de la madre</a>"; 
	}

  if ($ejec) {
	echo "<script>alert('Datos actualizados')</script> 
	<script>window.open('registro.php?cedula=$ci&buscar=1','_self')</script>";
  }*/
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
<?php 
#Consulta de representante
  echo "
  <form method='POST' action=''>
	<div class='form-row'>

	  <div class='form-group col-md-6'>
		<label>C.I.</label>
		<input class='form-control' min='0' type='number' name='cedula'  value='$ci'>
	  </div>"
	  ?>
	  <div class='form-group col-md-3'>
		<label>Nacionalidad</label>
		  <select class="form-control" name="nac">
		  <?php
			$sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=$nac_id"; 
			$ejec=mysqli_query($conexion,$sql);
			while ($filaEAV=mysqli_fetch_assoc($ejec)) {
			  $op=$filaEAV['id']; $des=$filaEAV['dsc'];
			  echo "<option value='$op'>*$des</option>";
			}
			$edoc="SELECT * FROM `eav` WHERE tipo_id=3";
			$ecc=mysqli_query($conexion,$edoc);
			while ($filaec=mysqli_fetch_assoc($ecc)) {
		  ?>
			<option value="<?php echo $filaec['id']; ?>"> <?php echo $filaec['dsc']; ?></option>
		  <?php
			}
		  ?>
		</select>
	  </div>

	  <?php
	  echo "<div class='form-group col-md-3'>
		<label>Fecha de nacimiento</label>
		<input class='form-control' type='date' name='fn' min='1938-01-01' max='$a'; value='$fec_nac'>
	  </div>

	  <div class='form-group col-md-3'>
		<label>Primer nombre</label>
		<input class='form-control' type='' name='pn'  value='$pri_nom'>
	  </div>

	  <div class='form-group col-md-3'>
		<label>Segundo nombre</label>
		<input class='form-control' type='' name='sn'  value='$seg_nom'>
	  </div>

	  <div class='form-group col-md-3'>
		<label>Primer apellido</label>
		<input class='form-control' type='' name='pa'  value='$pri_ape'>
	  </div>

	  <div class='form-group col-md-3'>
		<label>Segundo apellido</label>
		<input class='form-control' type='' name='sa'  value='$seg_ape'>
	  </div>
	  "
	  ?>

		<div class='form-group col-md-3'> 
		  <label>País de nacimiento</label>
		  <select class='form-control' name='pais' id='pais' required>
		  <?php
			$sql="SELECT * FROM `paises` WHERE id=$pais_id";
			$ejec=mysqli_query($conexion,$sql);
			while ($p=mysqli_fetch_assoc($ejec)) {extract($p);
			  echo "<option value='$id'>*$dsc</option>";
			}
			  
			$sql='SELECT * FROM paises ORDER BY dsc ASC';
			$ejc=mysqli_query($conexion,$sql);
			while ($filaP1=mysqli_fetch_assoc($ejc)) {
		  ?>
			<option value='<?php echo $filaP1['id']; ?>'> <?php echo $filaP1['dsc']; ?></option>
		  <?php
			}
		  ?>
		  </select>
		</div>            


	  <div class='form-group col-md-3'>
		<label>Lugar de nacimiento</label>
		<input class='form-control' type='' name='ln'  value='<?php echo $lug_nac; ?>'>
	  </div>

	  <div class="form-group col-md-3">
		<label for="estado">Estado</label>
		<select class="form-control" name="ComboEdo" id="ComboEdo">
		  <?php
			$sql="SELECT * FROM `estados` WHERE id=$estado_id";
			$ejec=mysqli_query($conexion,$sql);
			while ($dir=mysqli_fetch_assoc($ejec)) {
			  extract($dir);
			  echo "<option value='$id'>*$dsc</option>";
			}
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
		<label for="municipio">Municipio</label>
		<select class="form-control" name="ComboMun" id="ComboMun">
		<?php
		  $sql="SELECT * FROM `municipios` WHERE id=$parroquia_id";

			$ejec=mysqli_query($conexion,$sql);
			while ($mun=mysqli_fetch_assoc($ejec)) {
			  extract($mun);
			  echo "<option value='$id'>*$dsc</option>";
			}
			?>
		</select>
	  </div>

	  <div class="form-group col-md-3"> 
		<label>Estado civil</label>
		  <select class="form-control" name="edoc" id="edoc">
		  <?php
			$sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=$edocivil_id"; 
			$ejec=mysqli_query($conexion,$sql);
			while ($filaEAV=mysqli_fetch_assoc($ejec)) {
			  $op=$filaEAV['id']; $des=$filaEAV['dsc'];
			  echo "<option value='$op'>*$des</option>";
			}
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
	  
  <?php
	  echo "
	  <div class='form-group col-md-3'>
		<label>Profesion u oficio</label>
		<input class='form-control' type='' name='puo'  value='$profesion'>
	  </div>
	  
	  <div class='form-group col-md-3'>
		<label>Empresa</label>
		<input class='form-control' type='' name='emp'  value='$empresa'>
	  </div>
	  
	  <div class='form-group col-md-3'>
		<label>Lugar de trabajo</label>
		<input class='form-control' type='' name='ldt'  value='$lug_trab'>
	  </div>

	  <div class='form-group col-md-4'>
		<label>Telefono de la empresa</label>
		<input class='form-control' type='' name='tlf1'  value='$telf_emp'>
	  </div>

	  <div class='form-group col-md-4'>
		<label>Telefono de habitacion</label>
		<input class='form-control' type='' name='tlf2'  value='$telf_hab'>
	  </div>

	  <div class='form-group col-md-4'>
		<label>Telefono celular</label>
		<input class='form-control' type='' name='tlf3'  value='$telf_cel'>
	  </div>

	  <div class='form-group col-md-6'>
		<label>Dirección</label>
		<input class='form-control' type='' name='direcc'  value='$direccion'>
	  </div>

	  <div class='form-group col-md-6'>
		<label>Correo</label>
		<input class='form-control' type='' name='mail'  value='$correo'>
	  </div>"
?>

		<div class='form-group col-md-3'> 
		  <label for=genero>¿Es el padre?</label><br>                
		  <label><input type=radio name="pad" value="Si" <?php if ($parentesco_id=="17") {echo "checked";} ?> > Si </label>
			  
		  <label><input type=radio name="pad" value="No" <?php if ($parentesco_id=="18" or $parentesco_id=="16") {echo "checked";} ?> > No </label>
		</div>
		
		<div class='form-group col-md-3'> 
		  <label for=genero>¿Es la madre?</label><br>                
		  <label><input type=radio name="mad" value="Si" <?php if ($parentesco_id=="16") {echo "checked";} ?> > Si </label>
			  
		  <label><input type=radio name="mad" value="No" <?php if ($parentesco_id=="18" or $parentesco_id=="17") {echo "checked";} ?> > No </label>
		</div>

		<div class='form-group col-md-3'> 
		  <label for=genero>¿Es el representante legal?</label><br>                
		  <label><input type=radio name="leg" value="Si" <?php if ($legal=="Si") {echo "checked";} ?> > Si </label>
			  
		  <label><input type=radio name="leg" value="No" <?php if ($legal=="No") {echo "checked";} ?> > No </label>
		</div>
<?php


if($legal=="Si"){
$botonR="<div class='form-group col-md-6'><a class='btn btn-info btn-block' href='estudiante.php'>Registrar datos del estudiante </a></div>"; 
$colMd="6";
$offSet="offset-md-3";
}else{
$botonR=""; 
$colMd="12";
$offSet="offset-md-0";	
}

  echo "
	  <div class='form-group col-md-$colMd'>
		<input class='btn btn btn-block btn-primary' type='submit' name='dat_tut'  value='Actualizar información'>
	  </div>
$botonR
	</div>
  </form>
	  ";


      
?>      
<br>
<br>
<br> 