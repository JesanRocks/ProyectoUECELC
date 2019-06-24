<?php 
require('config.php');
sleep(1);
if (isset($_POST)) {
    $cedula = (string)$_POST['cedula'];
    
    $result = $conexion->query(
        'SELECT * FROM personas WHERE ci = "'.strtolower($cedula).'"'
    );
    
    if ($result->num_rows > 0) {
    	echo '<div class="alert alert-success"><strong>El estudiante</strong> Se encuentra registrado.</div>';
    } else {
        echo '<div class="alert alert-danger"><strong>El estudiante</strong> No se encuentra registrado.</div>';
    }
}