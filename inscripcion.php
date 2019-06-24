<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';


if (isset($_POST['inscribir'])) {

extract($_POST);

// creamos una bandera
$result_transaccion = true;
// iniciamos transacción 
$conexion->begin_transaction();
$anno=date("Y");


$sql="INSERT INTO `inscripciones`(`grado`, `seccion`, `periodo`, `status_id`, `estudiante_id`) VALUES ('$grado','$seccion','$anno',98,'$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

$sql="INSERT INTO `academicos`(`repitiente`, `asig_cur`, `mat_pend`, `pend_mat`, `beca_id`, `canaima_id`, `can_edo_id`, `can_serial`, `act_extca`, `plant_ant`, `period1`, `plantel1`, `period2`, `plantel2`, `period3`, `plantel3`, `persona_id`) VALUES ('$repitiente','$asig','$mat_pend','$mat','$beca','$Pcanaima','$Ecanaima','$Scanaima','$act_extca','$plantel_p','$periodo1','$p1','$periodo2','$p2','$periodo3','$p3','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

//Diversidad funcional
if (is_null($con_vi)) { $con_vi=1; }
   $sql="INSERT INTO `div_funcional`(`diversidad_id`, `informe`, `estudiante_id`) VALUES ('$con_vi','$p_inf','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

if (is_null($con_au)) { $con_au=1; }
   $sql="INSERT INTO `div_funcional`(`diversidad_id`, `informe`, `estudiante_id`) VALUES ('$con_au','$p_inf','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

if (is_null($con_mo)) { $con_mo=1; }
   $sql="INSERT INTO `div_funcional`(`diversidad_id`, `informe`, `estudiante_id`) VALUES ('$con_mo','$p_inf','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

if (is_null($con_fi)) { $con_fi=1; }
   $sql="INSERT INTO `div_funcional`(`diversidad_id`, `informe`, `estudiante_id`) VALUES ('$con_fi','$p_inf','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

if (is_null($con_le)) { $con_le=1; }
   $sql="INSERT INTO `div_funcional`(`diversidad_id`, `informe`, `estudiante_id`) VALUES ('$con_le','$p_inf','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

if (is_null($con_ap)) { $con_ap=1; }
   $sql="INSERT INTO `div_funcional`(`diversidad_id`, `informe`, `estudiante_id`) VALUES ('$con_ap','$p_inf','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

//Documentos consignados
if (is_null($ci_est)) { $ci_est=1; }
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$ci_est','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($ci_rep)) { $ci_rep=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$ci_rep','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($corgcert)) { $corgcert=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$corgcert','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($f_rep)) { $f_rep=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$f_rep','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($ci_pa)) { $ci_pa=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$ci_pa','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($part_nac)) { $part_nac=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$part_nac','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($corg_b)) { $corg_b=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$corg_b','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($ci_ma)) { $ci_ma=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$ci_ma','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($f_est)) { $f_est=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$f_est','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 
if (is_null($funda)) { $funda=1; }   
   $sql="INSERT INTO `documentos`(`documento_id`, `estudiante_id`) VALUES ('$funda','$id')";
if( !$conexion->query("$sql") ) { $result_transaccion = false; } //var_dump($result_transaccion); 

if($result_transaccion) {
	// consignamos
	$conexion->commit();
} else {
	// revertimos
	$conexion->rollback();
}

?>
<section class="container">
	<?php 
alerta("Inscripcion Registrada");
	 ?>
</section> 
<?php
require_once 'includes/footer.php';
	
exit();


}
?>
<section class="container">
  <br>
	  <table class="table table-hover">
		<thead class="text-center thead-light">
		  <tr>
			<th scope="col" colspan="3">Buscar</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>
			  <form action="" method="post">
				<label>Cédula del estudiante</label>
				<input class="form-control" type="number" name="cedula" id="cedula" required>
			</td>
			<td>
			  <label class="fade"> Buscar</label>
			  <input class="btn btn-block btn-info" type="submit" name="Buscar" value="Buscar">
			  </form>
			</td>
		  </tr>
		</tbody>
	  </table>

<?php 

if (isset($_POST['Buscar'])) {

  extract($_POST);

  $sql="SELECT * FROM `personas` INNER JOIN estudiantes ON personas.id=estudiantes.persona_id WHERE ci=$cedula";
  $ejc=mysqli_query($conexion,$sql);
  $_numFila=mysqli_num_rows($ejc);
  
  while ($fila=mysqli_fetch_array($ejc)) { 
	//print_r($fila);
	extract($fila); 
  }
if ($_numFila==0) {
alerta("LA CEDULA NO ESTA INSCRIPTA");
}



//print_r($GLOBALS);
//exit();

  if (isset($id)) {
	$sql="SELECT * FROM `inscripciones` WHERE estudiante_id=$id";
	$ejc=mysqli_query($conexion,$sql);
	$_numFila=mysqli_num_rows($ejc);

	if ($_numFila==0) {
	  require_once 'includes/form/ins-form.php';
	}else{
	  while ($fil=mysqli_fetch_array($ejc)) { 
		//print_r($fil);
		extract($fil);
	  }
	  require_once 'includes/form/ins-edit.php';
	}

  }



}
 ?>  

</section> 

<?php 
require_once 'includes/footer.php';
?>