<?php include 'includes/header.php'; ?>
    <section class="container-fluid row text-justify">  
<?php include 'includes/menu.php'; ?>

<div class="col-md-9">
	<form action="est-modificar.php" method="get">
		<div class="form-row">			
			<div class="form-group col-md-12"> 
				<label>Ingrese la cedula del estudiante</label>
				<input class="form-control" type="number" name="edit-ced" placeholder="Cédula">
			</div>

			<button class="btn btn-primary btn-block" name="buscar">Buscar</button>
		</div>
	</form>

<?php  
$ced=$_GET['edit-ced'];

if ($ced>=1) {
		$editar_est=$_GET['edit-ced'];
#Consulta datos de estudiante
		$ConsultaEST="SELECT * FROM `Estudiantes` WHERE cedula='$editar_est'";
		$EjecutarEST=mysqli_query($conexion,$ConsultaEST);

		$fila=mysqli_fetch_array($EjecutarEST);
		$ID=$fila['id_estudiantes'];
		$Nombres=$fila['nom_ap'];
		$Cedula=$fila['cedula'];
		$Edad=$fila['edad'];
		$Fecha=$fila['fecha_nac'];
		$Pais=$fila['pais_nac'];
		$Estado=$fila['estado'];
		$Municipio=$fila['municipio'];
		$Nacionalidad=$fila['nacionalidad'];
		$Operadora=$fila['op_tlf'];
		$Numero=$fila['num_tlf'];
		$Direccion=$fila['direccion'];

		$ConsultaMED="SELECT * FROM `Medidas` WHERE `id_medidas`='$ID'";
		$EjecutarMED=mysqli_query($conexion,$ConsultaMED);

		$FilaMED=mysqli_fetch_array($EjecutarMED);
		$Lateralidad=$FilaMED['lateralidad'];
		$Genero=$FilaMED['genero'];
		$Estatura=$FilaMED['estatura'];
		$Peso=$FilaMED['peso'];
		$TallaC=$FilaMED['talla_c'];
		$TallaP=$FilaMED['talla_p'];
		$TallaZ=$FilaMED['talla_z'];

		$ConsultaVIV="SELECT * FROM `Vivienda` WHERE `id_vivienda`='$ID'";
		$EjecutarVIV=mysqli_query($conexion,$ConsultaVIV);

		$FilaVIV=mysqli_fetch_array($EjecutarVIV);
		$TipoV=$FilaVIV['tp_vivienda']; 
		$CondV=$FilaVIV['cond_vivienda']; 
		$InfrV=$FilaVIV['infraestr_vivienda'];
#Consulta datos academicos
		$ConsultaDAT="SELECT * FROM `Datos_acad` WHERE `id_da`='$ID'";
		$EjecutarDAT=mysqli_query($conexion,$ConsultaDAT);

		$filaDAT=mysqli_fetch_array($EjecutarDAT);
		$Rep=$filaDAT['rep'];
		$Asignatura=$filaDAT['asig_cur'];
		$Materia=$filaDAT['mat_pend'];
		$MateriaPC=$filaDAT['mat_pend_c'];
		$Beca=$filaDAT['beca'];

		$ConsultaCana="SELECT * FROM `Canaima` WHERE `id_canaima`='$ID'";
		$EjecutarCana=mysqli_query($conexion,$ConsultaCana);

		$filaCana=mysqli_fetch_array($EjecutarCana);
		$Pcanaima=$filaCana['p_canaima'];
		$Ecanaima=$filaCana['e_canaima'];
		$Scanaima=$filaCana['s_canaima'];

		$ConsultaDF="SELECT * FROM `Diversidad_fun` WHERE `id_df`='$ID'";
		$EjecutarDF=mysqli_query($conexion,$ConsultaDF);

		$filaDF=mysqli_fetch_array($EjecutarDF);
		$Pdiv=$filaDF['p_df'];
		$Pinf=$filaDF['p_inf'];
		$ICon=$filaDF['ind_cond'];

		$ConsultaPP="SELECT * FROM `Plantel_pro` WHERE `id_pp`='$ID'";
		$EjecutarPP=mysqli_query($conexion,$ConsultaPP);

		$FilaPP=$filaDF=mysqli_fetch_array($EjecutarPP);
		$PlantelP=$FilaPP['plantel_p'];
		$Pe1=$FilaPP['period1'];
		$PP1=$FilaPP['p1'];
		$Pe2=$FilaPP['period2'];
		$PP2=$FilaPP['p2'];
		$Pe3=$FilaPP['period3'];
		$PP3=$FilaPP['p3'];
#Consulta datos de la madre
		$ConsultaMA="SELECT * FROM `Madre` WHERE `id_madre`='$ID'";
		$EjecutarMA=mysqli_query($conexion,$ConsultaMA);

		$filaMA=mysqli_fetch_array($EjecutarMA);
		$NombresM=$filaMA['nom_ap'];
		$CedulaM=$filaMA['cedula'];
		$EdadM=$filaMA['edad'];
		$LGNM=$filaMA['lug_nac'];
		$EstadoM=$filaMA['estado'];
		$MunicipioM=$filaMA['municipio'];
		$OP_HAB_M=$filaMA['op_hab'];
		$N_HAB_M=$filaMA['num_hab'];
		$OP_CEL_M=$filaMA['op_cel'];
		$N_CEL_M=$filaMA['num_cel'];
		$ProfesionM=$filaMA['profesion'];
		$Lug_TM=$filaMA['lugar_trab'];
		$DireccionM=$filaMA['direccion'];
#Consulta datos del padre
		$ConsultaPa="SELECT * FROM `Padre` WHERE `id_padre`='$ID'";
		$EjecutarPa=mysqli_query($conexion,$ConsultaPa);

		$filaPa=mysqli_fetch_array($EjecutarPa);
		$NombresP=$filaPa['nom_ap'];
		$CedulaP=$filaPa['cedula'];
		$EdadP=$filaPa['edad'];
		$LGNP=$filaPa['lug_nac'];
		$EstadoP=$filaPa['estado'];
		$MunicipioP=$filaPa['municipio'];
		$OP_HAB_P=$filaPa['op_hab'];
		$N_HAB_P=$filaPa['num_hab'];
		$OP_CEL_P=$filaPa['op_cel'];
		$N_CEL_P=$filaPa['num_cel'];
		$ProfesionP=$filaPa['profesion'];
		$Lug_TP=$filaPa['lugar_trab'];
		$DireccionP=$filaPa['direccion'];
#Consulta datos del representante
		$ConsultaRe="SELECT * FROM `Representante` WHERE `id_rep`='$ID'";
		$EjecutarRe=mysqli_query($conexion,$ConsultaRe);

		$filaRe=mysqli_fetch_array($EjecutarRe);
		$NombresR=$filaRe['nom_ap'];
		$CedulaR=$filaRe['cedula'];
		$FechaNacR=$filaRe['fecha_nac'];
		$PaisNacR=$filaRe['pais_nac'];
		$EstadoR=$filaRe['estado'];
		$NacionalidadR=$filaRe['nacionalidad'];
		$EstadoC=$filaRe['estado_civil'];
		$ProfesionR=$filaRe['profesion'];
		$Empresa=$filaRe['empresa'];
		$OP_EMP=$filaRe['op_emp'];
		$N_EMP=$filaRe['num_emp'];
		$OP_HAB_R=$filaRe['op_hab'];
		$N_HAB_R=$filaRe['num_hab'];
		$OP_CEL_R=$filaRe['op_cel'];
		$N_CEL_R=$filaRe['num_cel'];
		$CorreoR=$filaRe['correo'];
		$DireccionR=$filaRe['direccion'];
#Consulta documentos

	if (!empty($Cedula)) {
		
		include 'includes/estudiantes/act-est.php';
	}

	if (isset($_POST['btn_est'])) {
		$Act_nom=$_POST['nombres'];
		$Act_ced=$_POST['cedula'];
		$Act_dir=$_POST['direccion'];

		$Actualizar="UPDATE `Estudiantes` SET `nom_ap`='$Act_nom',`cedula`='$Act_ced', `direccion`='$Act_dir' WHERE cedula='$Cedula'";

		$Ejecutar=mysqli_query($conexion,$Actualizar);

		if ($Ejecutar) {
		echo "<script>alert('Datos actualizados')</script>";
		header("location:est-modificar.php");
		
		}
	}
}

?>

</div>
   
    </section>
    <br>
<?php include 'includes/footer.php'; ?>