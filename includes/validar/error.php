<?php 
if (!empty($_GET['error'])) {

    if ($_GET['error']=="1") {
        echo "<div class='alert alert-info'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button> 
                El usuario que ingresó no esta <strong>registrado</strong> en el sistema. El administrador debe crear cuenta.
            </div>";
    }


    if ($_GET['error']=="2") {
        echo "<div class='alert alert-info'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button> 
                <strong>¡Contraseña incorrecta!</strong> Por favor ingrese nuevamente  su contraseña.
            </div>";
    }

    if ($_GET['error']=="3") {
        echo "<div class='alert alert-info'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button> 
                Su sesión <strong>ha expirado</strong> ¡Ingrese nuevamente!
            </div>";
    }
}
?>