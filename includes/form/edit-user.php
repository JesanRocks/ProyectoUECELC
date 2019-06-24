<?php  
	if (isset($_GET['editar'])) {
		$editar_id=$_GET['editar'];

			$sql="SELECT * FROM `usuarios` 
			INNER JOIN  personas ON usuarios.persona_id=personas.id
			WHERE persona_id='$editar_id'";
			$ejec=mysqli_query($conexion,$sql);

			$edit=mysqli_fetch_array($ejec);
			extract($edit);
	}
?>

<?php 
    if (isset($_POST['actualizar'])) {
      extract($_POST);

      $sql="UPDATE `personas` SET `ci`='$cedula' ,`pri_nom`='$prinom',`seg_nom`='$segnom',`pri_ape`='$priape',`seg_ape`='$segape' WHERE id='$editar_id'";

      $ejec=mysqli_query($conexion,$sql);
      $sql="UPDATE `usuarios` SET `usuario`='$usuario',`clave`='$clave',`nivel_id`='$nivel' WHERE persona_id='$editar_id'";
      $ejec=mysqli_query($conexion,$sql);


      if ($ejec) {
        echo "<script>alert('Datos actualizados')</script>";
        echo "<script>window.open('lis-personal.php','_self')</script>";
      }

    }
  ?>

<form class="form" method="post" action="">
 <div class="form-row">

  <div class="form-group col-md-3">
      <label for="nomap">C.I</label>
      <input class="form-control" type="number" min="0" name="cedula" value="<?php echo $ci;?>">
  </div>

  <div class="form-group col-md-3">
      <label for="nomap">Primer nombre</label>
      <input class="form-control" type="text" name="prinom" value="<?php echo $pri_nom;?>">
  </div>

  <div class="form-group col-md-3">
      <label for="nomap">Segundo nombre</label>
      <input class="form-control" type="text" name="segnom" value="<?php echo $seg_nom;?>">
  </div>

  <div class="form-group col-md-3">
      <label for="nomap">Primero apellido</label>
      <input class="form-control" type="text" name="priape" value="<?php echo $pri_ape;?>">
  </div>

  <div class="form-group col-md-3">
      <label for="nomap">Segundo apellido</label>
      <input class="form-control" type="text" name="segape" value="<?php echo $seg_ape?>">
  </div>

  <div class="form-group col-3">
	<label>Usuario:</label>
	<input class="form-control" type="text" name="usuario" value="<?php echo "$usuario"; ?>">
  </div>

  <div class="form-group col-3">	
	<label>Clave:</label>
	<input class="form-control" type="text" name="clave" value="<?php echo "$clave"; ?>">
  </div>

  <div class="form-group col-3">	
	<label>Cargo de usuario</label>
    <select class="form-control" name="nivel" required >
      <?php  
        $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`= $nivel_id"; $ejec=mysqli_query($conexion,$sql);
        while ($EAV=mysqli_fetch_assoc($ejec)) {
        	extract($EAV); 
        	echo "<option value=$id>* $dsc </option>";
        }
      ?>		
	  <?php
	    $sql="SELECT * FROM eav where tipo_id=72";
	    $ejec=mysqli_query($conexion,$sql);
	    while ($filaP=mysqli_fetch_assoc($ejec)) {
	  ?>
     <option value="<?php echo $filaP['id']; ?>"> <?php echo $filaP['dsc']; ?></option>
     <?php } ?>
    </select>
  </div>

  <div class="form-group col-3">	
	<label class="fade">Clave:</label>
	<input class="form-control btn btn-success" type="submit" name="actualizar" value="Actualizar">
  </div>

 </div>
</form>