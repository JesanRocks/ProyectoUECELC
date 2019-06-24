<?php 
if (!empty($_GET['error'])) {


	if ($_GET['error']=="1") {
$_msj ="Usuario o clave invalida, verifica tus datos";
	}

	if ($_GET['error']=="3") {
$_msj ="Su sesión <strong>ha expirado</strong> ¡Ingrese nuevamente!";
	}

}

if (isset($_msj)) {
?>
<div class='alert alert-info'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
	</button> 
	<?= $_msj ?>
</div>
<?php 
}
?>