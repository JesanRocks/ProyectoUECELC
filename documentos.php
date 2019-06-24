<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

	<section class="container">

  <form action="documentos.php" method="post">
    <div class="form-row m-5">
      <div class="form-group col-md-12 col-lg-6"> 
        <label>Elija el tipo de documento a tramitar</label>
        <select class="form-control" name="documentos" required>
<option value="">Seleccionar</option>
<option value="1" <?php if (isset($_POST['documentos'])) { if ($_POST['documentos']==1) { echo "selected"; }} ?> >Constancia de inscripción</option>
<option value="2" <?php if (isset($_POST['documentos'])) { if ($_POST['documentos']==2) { echo "selected"; }} ?> >Constancia de estudio</option>
<option value="3" <?php if (isset($_POST['documentos'])) { if ($_POST['documentos']==3) { echo "selected"; }} ?> >Constancia de buena conducta </option>
<option value="4" <?php if (isset($_POST['documentos'])) { if ($_POST['documentos']==4) { echo "selected"; }} ?> >Constancia de asistencia</option>
<option value="5" <?php if (isset($_POST['documentos'])) { if ($_POST['documentos']==5) { echo "selected"; }} ?> >Aceptación de cupo</option>
<option value="6" <?php if (isset($_POST['documentos'])) { if ($_POST['documentos']==6) { echo "selected"; }} ?> >Constancia de retiro</option>

        </select>
      </div>
      
      <div class="form-group col-md-12 col-lg-6"> 
        <label>Ingrese la cedula del estudiante</label>
        <input class="form-control" type="number" name="cedula" placeholder="Cédula" required value="<?php if (isset($_POST['cedula'])){ echo $_POST['cedula'];} ?>" >
        </div>
      </div>
      
      <div class="form-group col-md-12"> 
        <input class="btn btn-primary btn-block" name="doc" type="submit" value="Generar documento">
      </div>
    </div>
  </form>  

	</section>

<?php 
  extract($_POST);

  if (isset($doc)) {
    switch ($documentos) {
      case '1':
        $_SESSION['estudiante']=$cedula;
        echo "<script>window.open('includes/documentos/constancia_de_inscripción.php', '', 'width=500,height=500');</script>";
        break;
      
      case '2':
        $_SESSION['estudiante']=$cedula;
        echo "<script>window.open('includes/documentos/constancia_de_estudio.php', '', 'width=500,height=500');</script>";
        break;
      
      case '3':
        $_SESSION['estudiante']=$cedula;
        echo "<script>window.open('includes/documentos/constancia_de_buena_conducta.php', '', 'width=500,height=500');</script>";
        break;
      
      case '4':
        $_SESSION['estudiante']=$cedula;
        echo "<script>window.open('includes/documentos/constancia_de_asistencia.php', '', 'width=500,height=500');</script>";
        break;
      
      case '5':
        $_SESSION['estudiante']=$cedula;
        echo "<script>window.open('includes/documentos/aceptación_de_cupo.php', '', 'width=500,height=500');</script>";
        break;
      
      case '6':
        $_SESSION['estudiante']=$cedula;
        echo "<script>window.open('includes/documentos/constancia_de_retiro.php', '', 'width=500,height=500');</script>";
        break;
      
      default:
        # code...
        break;
    }
  }
  require_once 'includes/footer.php'; 

?>