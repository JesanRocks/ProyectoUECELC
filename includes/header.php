<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Unidad Educativa Complejo Educativo "Las Carolinas"</title>
    <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0, maximum-scale-1.0, minimum-scale-1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/fontawesome-all.css" rel="stylesheet">

    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>

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
   include 'includes/mppe.html';

   session_start();
   ?>

</head>
<body class=" bg-info">
    <nav class=" navbar navbar-dark bg-primary">
      <a class="navbar-brand col-2" href="#"><img src="img/logo-uecelc-min.png" class="img-responsive center" width="100px" height="100px"></a>
      <h1 class="col-9 text-white text-center">Unidad Educativa Complejo Educativo <br> "Las Carolinas"</h1>
    </nav>
<br>