<?php 
require_once("vendor/autoload.php");
require '../conexion/db.php';

date_default_timezone_set('UTC');
setlocale(LC_ALL,"ES");

$sql="SELECT * FROM personas 
 inner join direcciones on personas.id=direcciones.persona_id
 inner join estudiantes on personas.id=estudiantes.persona_id 
 inner join inscripciones on estudiantes.id=inscripciones.estudiante_id
 where ci=".$_SESSION['estudiante']."
";

$ejc=mysqli_query($conexion,$sql);
while ($estudiante=mysqli_fetch_array($ejc)) { extract($estudiante); }

$_numFila=mysqli_num_rows($ejc);

 if ($_numFila==0) { echo "<script> alert('Cedula no registrada!'); window.close();</script>"; exit(); }
unset($_SESSION['estudiante']);
/* Start to develop here. Best regards https://php-download.com/ */

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf([
	'mode' => 'utf-8',
	'format' => 'Letter',
	'default_font_size' => 12,
	'default_font' => 'arial'
]);

$Nombre="$pri_nom $seg_nom $pri_ape $seg_ape";
$FechaN=$fec_nac;
$AñoAcademico=$grado; $PeriodoEscolar=date("Y");

function edad($fecha){
	list($anyo,$mes,$dia) = explode("-",$fecha);
	$anyo_dif  = date("Y") - $anyo;
	$mes_dif = date("m") - $mes;
	$dia_dif   = date("d") - $dia;
	if ($dia_dif < 0 || $mes_dif < 0) $anyo_dif--;
	return $anyo_dif;
}

$Edad=edad($FechaN);

if ($AñoAcademico=="1er" OR $AñoAcademico=="2do" OR $AñoAcademico=="3er") {
	$NivelDeEstudio="Media y General";
}else{
	$NivelDeEstudio="Diversificada";
}

$d=date('d'); $M=date('m'); $Y=date('Y');
$DiaActual=strval($d);
switch ($M) {
	case '1':
		$MesActual="Enero"; 
		break;
	case '2':
		$MesActual="Febrero"; 
		break;	
	case '3':
		$MesActual="Marzo"; 
		break;	
	case '4':
		$MesActual="Abril"; 
		break;	
	case '5':
		$MesActual="Mayo"; 
		break;	
	case '6':
		$MesActual="Junio"; 
		break;
	case '7':
		$MesActual="Julio"; 
		break;	
	case '8':
		$MesActual="Agosto"; 
		break;	
	case '9':
		$MesActual="Septiembre"; 
		break;	
	case '10':
		$MesActual="Octubre"; 
		break;	
	case '11':
		$MesActual="Noviembre"; 
		break;	
	case '12':
		$MesActual="Diciembre"; 
		break;
}
$AñoActual=strval($Y);
$Nombre=strtoupper($Nombre);
$sql="Select * from usuarios inner join eav on eav.id=usuarios.nivel_id inner join personas on personas.id=usuarios.persona_id where nivel_id=91";
 $ejc=mysqli_query($conexion,$sql);
while ($director=mysqli_fetch_array($ejc)) {extract($director);}

$Nom_director="$pri_nom $seg_nom $pri_ape $seg_ape";

$CI_director=$ci;

$Cargo=$dsc;
$cintillo="<img src=../../img/cintillomppe.jpg>"; $footer="<img src=../../img/gob-logoh.jpg>";
$membrete="<br><br><br><br><p align=center><b> República Bolivariana de Venezuela<br>	Ministerio del poder popular para Educación<br> Unidad Educativa Complejo Educativo &quot;Las Carolinas&quot;<br> Distrito escolar Nro 1<br> Maturín - Estado Monagas<br></b></p>";
$titulo="<br><br><h2 align='center'><B>CONSTACIA DE ESTUDIO</B></h2>";
$texto="<p align=justify style='text-indent: 1cm'>Quien suscribe el Director (E) Prof. <B>$Nom_director</B>, titular de la cédula de identidad: <B>$CI_director</B>, la Unidad Educativa Complejo Educativo “Las Carolinas”, ubicado en la calle principal de Las Carolinas, Municipio Maturín, Estado Monagas, hace constar que el alumno(a) <B>$Nombre</B> de <B>$Edad</B> años de edad, Natural de <B>$direccion</B>, Fecha de Nacimiento <B>$FechaN</B>, curso el <B>$AñoAcademico</B> grado de <B>$NivelDeEstudio</B>.</p>  

<p align=justify style='text-indent: 1cm'>Constancia que se expide a solicitud de la parte interesada a los $DiaActual días del mes de $MesActual del año $AñoActual.</p><br><br><br><br>";	
$Firma="<br><br><br><br><p align=center>_________________________________________________<br>Prof. $Nom_director <br> $Cargo <br>C.I:V-$CI_director<br><br></p>";

// Write some HTML code:
$mpdf->SetHeader($cintillo);
$mpdf->WriteHTML($membrete);
$mpdf->WriteHTML($titulo);
$mpdf->WriteHTML($texto);
$mpdf->WriteHTML($Firma);
$mpdf->SetFooter($footer);
// Output a PDF file directly to the browser
$mpdf->Output();
?>