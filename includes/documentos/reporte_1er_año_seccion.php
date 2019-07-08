<?php 
require_once("vendor/autoload.php");
require '../conexion/db.php';

date_default_timezone_set('UTC');
setlocale(LC_ALL,"ES");

$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf([
	'mode' => 'utf-8',
	'format' => 'Letter',
	'default_font_size' => 12,
	'default_font' => 'arial'
]);

$cintillo="<img src=../../img/cintillomppe.jpg>";
$footer="<img src=../../img/gob-logoh.jpg>";
$membrete="<br><br><br><br><p align=center><b> República Bolivariana de Venezuela<br>	Ministerio del poder popular para Educación<br> Unidad Educativa Complejo Educativo &quot;Las Carolinas&quot;<br> Distrito escolar Nro 1<br> Maturín - Estado Monagas<br></b></p>";

$titulo="<br><br><h2 align='center'><B>Reporte de estudiantes inscritos en 1er Año Sección ".$_GET['seccion']." </B></h2>";

	$tableStart="
	    <table border='1'>
	        <thead>
	            <tr>
	                <th>ID</th>
					<th>C.I Estudiante</th>
					<th>Alumno</th>
					<th>Año</th>
					<th>Sección</th>
					<th>C.I Representante</th>
					<th>Representante</th>
	            </tr>
	        </thead>
	        <tbody>
	";

	$tableEnd="                
            </tbody>
        </table>
	";	

// Write some HTML code:
$mpdf->SetHeader($cintillo);
$mpdf->WriteHTML($membrete);
$mpdf->WriteHTML($titulo);
$mpdf->WriteHTML($tableStart);
$seccion=$_GET['seccion'];
$sql="
	SELECT  
	t1.ci, t1.pri_nom, t1.seg_nom, t1.pri_ape, t1.seg_ape,
	t2.direccion,
	t4.grado,t4.seccion,
	t6.ci AS cedula, t6.pri_nom AS nombre1, t6.seg_nom AS nombre2, t6.pri_ape AS apellido1, t6.seg_ape AS apellido2

	FROM personas t1 
	INNER JOIN direcciones t2 on t1.id = t2.persona_id
	INNER JOIN estudiantes t3 on t1.id = t3.persona_id 
	INNER JOIN inscripciones t4 on t3.id = t4.estudiante_id
	INNER JOIN representantes t5 on t3.representante_id = t5.id
	INNER JOIN personas t6 on t5.persona_id = t6.id
	WHERE t4.grado = '1er' AND t4.seccion = '$seccion'
	ORDER BY t4.seccion ASC, t1.ci ASC
";
$ejc=mysqli_query($conexion,$sql);  
$i=0;
while ($estudiante=mysqli_fetch_array($ejc)) {
	extract($estudiante);
	$i++;
	$mpdf->WriteHTML("
                <tr>
                    <td>$i</td>
                    <td>$ci</td>
                    <td>$pri_nom $seg_nom $pri_ape $seg_ape</td>
                    <td>$grado</td>
                    <td>$seccion</td>
                    <!--td>$periodo</td-->
                    <td>$cedula</td>
                    <td>$nombre1 $nombre2 $apellido1 $apellido2</td>
                </tr>
	");
}

$mpdf->WriteHTML($tableEnd);
$mpdf->SetFooter($footer);
// Output a PDF file directly to the browser
$mpdf->Output();
?>