<?php require_once 'includes/conexion/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/Chart.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<script src="js/Chart.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script> 
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<title>ZORDON</title>
	<link rel="shortcut icon" href="img/icon.png" >
	<script type="text/javascript">
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	</script>
</head>

<body>
	<header style="position: fixed; top: 0; width: 100%; border: 0px solid green; background: white;">
		<center>
		<img src="img/gbcintillo.jpg" height="50px">
		</center>

	</header>