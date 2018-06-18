<?php 
    // Datos de la base de datos
    $usuario = "root";
    $contraseña = "root";
    $servidor = "127.0.0.1";
    $basededatos = "uece_lc";
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, $contraseña ) or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

session_start();
 $_SESSION['Usuario']=$_POST['Usuario'];
 $_SESSION['Password']=$_POST['Contraseña'];

$UsuarioInput=$_SESSION['Usuario'];
$PasswordInput=$_SESSION['Password'];

$SQL="SELECT * FROM `Usuario` WHERE `nom_u`='$UsuarioInput' "; #AND `pass`='$PasswordInput'
$Consulta=mysqli_query($conexion,$SQL);

while ( $fila=mysqli_fetch_array($Consulta) ) {
	$ID=$fila['id_users']; 
	$User=$fila['nom_u']; 
	$Pass=$fila['pass']; 
	$Nombres=$fila['nom_ap']; 
	$Cedula=$fila['cedula']; 
	$Fecha=$fila['f_ingreso']; 
	$Desemp=$fila['desemp']; 
	$Cond_lab=$fila['cond_lab']; 
	$Horas=$fila['horas'];

	if (isset($Nombres) AND isset($Cedula) AND isset($Desemp)) {
		$_SESSION['Nombre']=$Nombres;	
		$_SESSION['Cedula']=$Cedula;	
		$_SESSION['Desempeño']=$Desemp;	
	}
}
#Verificar que el campo nom_u de la tabla Usuario se encuetre en binario.
if ($User==$UsuarioInput AND $Pass==$PasswordInput) {
	header('Location: ../../sistema.php?valido=1');

	}elseif ($_SESSION['Usuario']!==$User AND $_SESSION['Password']!==$Pass){
		header('Location: ../../index.php?error=1');
			
	}elseif ($_SESSION['Usuario']===$User AND $_SESSION['Password']!==$Pass){
		echo "Contraseña incorrecta";
		header('Location: ../../index.php?error=2');
}



?>