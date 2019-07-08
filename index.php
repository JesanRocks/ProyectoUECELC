<?php require_once 'includes/header.php'; 

	if ($_SESSION['Usuario']) {
		header('Location: sistema.php');
	}


?>
<style type="text/css">
	body{
		background: url(img/bgsite.jpg), gray;
		background-size: cover;
	}
</style>
	<section class="container">
		<br>
		<br>
		<br>
		<br>
		<br>
		<?php require_once 'includes/login.php'; ?>	
	</section>
<?php require_once 'includes/footer.php'; ?>	