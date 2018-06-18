<?php include 'includes/header.php'; ?>
    <section class="container-fluid row text-justify">  
<?php include 'includes/menu.php'; ?>

<div class="col-md-9">
	<?php 
		include 'includes/dat/dat_estudiantes.html';

		include 'includes/dat/dat_academicos.html';

		include 'includes/dat/dat_madre.html';

		include 'includes/dat/dat_padre.html';

		include 'includes/dat/dat_representante.html';

		include 'includes/dat/dat_documentos.html'; 

	#Declaracion de variables
		$nom_ap=$_POST['nomap']; $cedula=$_POST['cedula']; $edad=$_POST['edad'];
		$fecha_nac=$_POST['fecha_n']; 
		$pais=$_POST['pais_n']; $estado=$_POST['estado']; $municipio=$_POST['municipio']; 
		$nacionalidad=$_POST['nacionalidad']; 
		
		$lateralidad=$_POST['lateralidad']; $genero=$_POST['genero'];
		$peso=$_POST['peso']; $estatura=$_POST['estatura']; 
		$tallaC=$_POST['TallaC']; $tallaP=$_POST['TallaP']; $tallaZ=$_POST['TallaZ'];
		
		$tipo_vivienda=$_POST['tipo_v']; $cond_vivienda=$_POST['cond'];
		$infraestructura=$_POST['infraestructura'];

		$op_hab=$_POST['op_hab']; $num_hab=$_POST['num_hab'];
		$op_cel=$_POST['op_cel']; $num_cel=$_POST['num_cel'];
		$op_emp=$_POST['op_emp']; $num_emp=$_POST['num_emp']; 
		$correo=$_POST['correo']; 
		
		$direccion=$_POST['dir'];

	#Datos academicos variables
		$rep=$_POST['repitiente']; $asig_cur=$_POST['asig'];
		$mat_pend=$_POST['mat_pend'];	$mat_pend_c=$_POST['mat'];
		$beca=$_POST['beca'];

		$p_canaima=$_POST['Pcanaima'];
		$e_canaima=$_POST['Ecanaima'];
		$s_canaima=$_POST['Scanaima'];

		$p_df=$_POST['p_df'];
		$p_inf=$_POST['p_inf'];
		$ind_cond=$_POST['ind_cond'];

		$plantel_pro=$_POST['plantel_p'];
		$periodo1=$_POST['periodo1'];
		$plantel_1=$_POST['p1'];
		$periodo2=$_POST['periodo2'];
		$plantel_2=$_POST['p2'];
		$periodo3=$_POST['periodo3'];
		$plantel_3=$_POST['p3'];

		$profesion=$_POST['puo'];
		$lug_trab=$_POST['ldt'];
		$empresa=$_POST['empresa'];

		$estado_c=$_POST['est_c'];

	#Documentos
		$ci_est=$_POST['ci_est'];
		$ci_rep=$_POST['ci_rep'];
		$corgcert=$_POST['corgcert'];
		$ci_pa=$_POST['ci_pa'];
		$part_nac=$_POST['part_nac'];
		$corg_b=$_POST['corg_b'];
		$ci_ma=$_POST['ci_ma'];
		$f_est=$_POST['f_est'];
		$f_rep=$_POST['f_rep'];
		$funda=$_POST['funda'];
	
			
		
//Enviar a base de datos	

#Estudiantes
if (isset($_POST['dat_est'])) {
	$EstudiantesSQL="INSERT INTO `Estudiantes`(`id_estudiantes`, `nom_ap`, `cedula`, `edad`, `fecha_nac`, `pais_nac`, `estado`, `municipio`, `nacionalidad`, `op_tlf`, `num_tlf`, `direccion`) VALUES (NULL,'$nom_ap','$cedula','$edad','$fecha_nac','$pais','$estado','$municipio','$nacionalidad','$op_cel','$num_cel','$direccion')";

	$Ejecutar=mysqli_query($conexion,$EstudiantesSQL);

	#Datos de Medidas
	$MedidasSQL= mysqli_query($conexion, "INSERT INTO `Medidas`(`id_medidas`, `lateralidad`, `genero`, `peso`, `estatura`, `talla_c`, `talla_p`, `talla_z`) VALUES (NULL,'$lateralidad','$genero','$peso','$estatura','$tallaC','$tallaP','$tallaZ')");
	
	#Enviar datos de vivienda
	$ViviendaSQL=mysqli_query($conexion, "INSERT INTO `Vivienda`(`id_vivienda`, `tp_vivienda`, `cond_vivienda`, `infraestr_vivienda`) VALUES (NULL,'$tipo_vivienda','$cond_vivienda','$infraestructura')");
}

#Datos academicos
if (isset($_POST['dat_aca'])) {
//Envio de datos a Tabla Datos_acad	
$DatosAcaSQL=mysqli_query($conexion, "INSERT INTO `Datos_acad`(`id_da`, `rep`, `asig_cur`, `mat_pend`, `mat_pend_c`, `beca`) VALUES (NULL,'$rep','$asig_cur','$mat_pend','$mat_pend_c','$beca')");
	
//Envio de datos a Tabla canaima
$CanaimaSQL= mysqli_query($conexion, "INSERT INTO `Canaima`(`id_canaima`, `p_canaima`, `e_canaima`, `s_canaima`) VALUES (NULL,'$p_canaima','$e_canaima','$s_canaima')");

////Envio de datos a Tabla Diversidad_fun	
$Diversidad_funSQL=mysqli_query($conexion, "INSERT INTO `Diversidad_fun`(`id_df`, `p_df`, `p_inf`, `ind_cond`) VALUES (NULL,'$p_df','$p_inf','$ind_cond')");

////Envio de datos a Tabla Plantel_pro
$Plantel_pro=mysqli_query($conexion, "INSERT INTO `Plantel_pro`(`id_pp`, `plantel_p`, `period1`, `p1`, `period2`, `p2`, `period3`, `p3`) VALUES (NULL ,'$plantel_pro','$periodo1','$plantel_1','$periodo2','$plantel_2','$periodo3','$plantel_3')");
}

#Madres
if (isset($_POST['dat_ma'])) {

	$MadreSQL=mysqli_query($conexion,"INSERT INTO `Madre`(`id_madre`, `nom_ap`, `cedula`, `edad`, `lug_nac`, `estado`, `municipio`, `op_hab`, `num_hab`, `op_cel`, `num_cel`, `profesion`, `lugar_trab`, `direccion`) VALUES (NULL, '$nom_ap', '$cedula', '$edad', '$pais', '$estado', '$municipio', '$op_hab', '$num_hab', '$op_cel', '$num_cel', '$profesion', '$lug_trab', '$direccion')");
}

#Padres
if (isset($_POST['dat_pa'])) {

	$PadreSQL=mysqli_query($conexion,"INSERT INTO `Padre`(`id_padre`, `nom_ap`, `cedula`, `edad`, `lug_nac`, `estado`, `municipio`, `op_hab`, `num_hab`, `op_cel`, `num_cel`, `profesion`, `lugar_trab`, `direccion`) VALUES (NULL,'$nom_ap','$cedula','$edad','$pais','$estado','$municipio','$op_hab','$num_hab','$op_cel','$num_cel','$profesion','$lug_trab','$direccion')");
	
}

#Representante
if (isset($_POST['dat_re'])) {
	$RepSQL=mysqli_query($conexion,"INSERT INTO `Representante`(`id_rep`, `nom_ap`, `cedula`, `fecha_nac`, `pais_nac`, `estado`, `nacionalidad`, `estado_civil`, `profesion`, `empresa`, `op_emp`, `num_emp`, `op_hab`, `num_hab`, `op_cel`, `num_cel`, `correo`, `direccion`) VALUES (NULL, '$nom_ap', '$cedula', '$fecha_nac', '$pais', '$estado', '$nacionalidad', '$estado_c', '$profesion', '$empresa', '$op_emp', '$num_emp', '$op_hab', '$num_hab', '$op_cel', '$num_cel', '$correo', '$direccion')");
}


if (isset($_POST['dat_doc'])) {
	
	if ($ci_est==1) { $ci_est="Si"; }else{ $ci_est="No";}

	if ($ci_rep==1) { $ci_rep="Si"; }else{ $ci_rep="No";}

	if ($ci_pa==1) { $ci_pa="Si";}else{ $ci_pa="No";}
	
	if ($ci_ma==1) { $ci_ma="Si";}else{ $ci_ma="No";}

	if ($part_nac==1) { $part_nac="Si";}else{ $part_nac="No";}

	if ($corgcert==1) { $corgcert="Si";}else{$corgcert="No";}

	if ($corg_b==1) {$corg_b="Si";}else{ $corg_b="No";}

	if ($f_est==1) {$f_est="Si";}else{	$f_est="No";}

	if ($f_rep==1) {$f_rep="Si";}else{	$f_rep="No";}

	if ($funda==1) {$funda="Si";}else{	$funda="No";}

	$DocumentosSQL=mysqli_query($conexion,"INSERT INTO `Documentos`(`id_doc`, `ci_est`, `ci_rep`, `ci_ma`, `ci_pa`, `part_nac`, `corgcert`, `corg_b`, `f_est`, `f_rep`, `funda`) VALUES (NULL, '$ci_est', '$ci_rep', '$ci_ma', '$ci_pa', '$part_nac', '$corgcert', '$corg_b', '$f_est', '$f_rep' ,'$funda')");

}
?>
</div>
    
    </section>
    <br>
<?php include 'includes/footer.php'; ?>