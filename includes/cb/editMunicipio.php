<?php
	require ('../conexion/db.php');
	
	$id = $_POST['id'];
	
	$queryM = "SELECT * FROM municipios WHERE estado_id = '$id'";
	$resultadosM=mysqli_query($conexion,$queryM);
	
	#$html="<option value='0'>Seleccionar Municipio</option>";
	
	while($filaM=mysqli_fetch_assoc($resultadosM))
	{
		$html.= "<option value='".$filaM['id']."'>".$filaM['dsc']."</option>";
	}
	
	echo $html;
?>