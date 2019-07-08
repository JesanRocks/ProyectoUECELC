<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

	<section class="container">
<?php 
alerta("El usuario se registro exitososamente");
?>
  <form class="form" action="reg-personal.php" method="post">
    <br>
    <div class="form-row">

      <div class="form-group col-md-6"> 
        <label>Cargo de usuario</label>
        <select class="form-control" name="nvl" required >
          <option value="">--Elige--</option>

        <?php
        $sql="SELECT * FROM eav where tipo_id=90";
        $consul=mysqli_query($conexion,$sql);

        while ($filaP=mysqli_fetch_assoc($consul)) {
        ?>
          <option value="<?php echo $filaP['id']; ?>"> <?php echo $filaP['dsc']; ?></option>
        <?php
          }
        ?>
        </select>
      </div>

      <div class="form-group col-md-6 ">
        <label for="cedula">C.I.</label>
        <input class="form-control"  min="0" type="number" name="ci" id="ci" placeholder="Cédula" required>
      </div>

      <div class="form-group col-md-6">
        <label for="nomap">Primer nombre</label>
        <input class="form-control" type="text" name="pri_nom" placeholder="" required >
      </div>

      <div class="form-group col-md-6">
        <label for="nomap">Segundo nombre</label>
        <input class="form-control" type="text" name="seg_nom" placeholder="">
      </div>

      <div class="form-group col-md-6">
        <label for="nomap">Primero apellido</label>
        <input class="form-control" type="text" name="pri_ape" placeholder="" required >
      </div>

      <div class="form-group col-md-6">
        <label for="nomap">Segundo apellido</label>
        <input class="form-control" type="text" name="seg_ape" placeholder="">
      </div>
      
      <div class="form-group col-md-12"> 
        <input class="btn btn-primary" type="submit" name="reg" value="Registar usuario">
      </div>
    </div>
  </form> 
<?php 
 
if (isset($_POST['reg'])) {
   
  extract($_POST);

  $SQL="INSERT INTO `personas`(`ci`, `pri_nom`, `seg_nom`, `pri_ape`, `seg_ape`) VALUES ('$ci','$pri_nom','$seg_nom','$pri_ape','$seg_ape')";
  $Ejec=mysqli_query($conexion,$SQL);

  $SQL="SELECT `id` FROM `personas` WHERE `ci`=$ci";
  $Ejec=mysqli_query($conexion,$SQL);

  while ($personas=mysqli_fetch_array($Ejec)) {$id=$personas['id'];}

  $SQL="INSERT INTO `usuarios`(`usuario`, `clave`, `nivel_id`, `persona_id`) VALUES ('V-$ci','$ci','$nvl','$id')";
  $Ejec=mysqli_query($conexion,$SQL);
}

?>
	</section>

<?php require_once 'includes/footer.php'; ?>