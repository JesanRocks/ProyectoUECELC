<?php 
ini_set("display_errors", "ON");
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('america/caracas');
setlocale(LC_ALL, "es_VE@bolivar", "es_VE", "esp");

require_once 'funciones.php';
    
    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( '127.0.0.1','Sandino','Jsrf.5773') or die ("No se ha podido conectar al servidor de Base de datos");
    
    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "Upps! No se encontro la Base de datos" );

    header("Content-Type: text/html;charset=utf-8");
    mysqli_set_charset($conexion, 'utf8');
    #$acentos=mysqli_query($conexion,"SET NAMES 'utf8_spanish_ci'");

   session_start();
