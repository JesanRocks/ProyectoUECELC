<?php 
require_once '../conexion/db.php';
// print_r($_POST);
extract($_POST);
$user=strtoupper($user);

$SQL="SELECT * FROM `usuarios` INNER JOIN eav on usuarios.nivel_id=eav.id INNER JOIN personas on usuarios.persona_id=personas.id WHERE `usuario`='$user' AND `clave`='$pass'";
$ejc=mysqli_query($conexion,$SQL);
$_numFila=mysqli_num_rows($ejc);

if ($_numFila==1) {
	
	while ($fila=mysqli_fetch_array($ejc) ) {
		extract($fila);
		$_SESSION['pri_nom']=$pri_nom;
		$_SESSION['seg_nom']=$seg_nom; 
		$_SESSION['pri_ape']=$pri_ape;
		$_SESSION['seg_ape']=$seg_ape;	
		$_SESSION['cedula']=$ci;
		$_SESSION['cargo']=$dsc;	

		$_SESSION['Usuario']=$usuario;
		$_SESSION['Clave']=$clave;
	}

	header('Location: ../../sistema.php');

}else{
	header('Location: ../../index.php?error=1');
}
