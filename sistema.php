<style type="text/css">
    body{
        background: url(img/fondo1.jpg), gray;
        background-size:all;
    }
</style>
<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

	<section class="container-fluid">
	    <style type="text/css">    .foto_principal{  margin-top: -55px;} </style>
	    <aside class="d-flex justify-content-center m-5">
             <div class= "card text-center" style="max-width: 600px;"> 
                <div class= "card-header" > 
                    <img  class="card-img-top img-fluid" src="img/banner.png" >
                 </div>    
                    <div class="text-center">
                        <img src="img/icon.png" class="img-fluid img-thumbnail text-center foto_principal rounded-circle" width="125px" height="125px">
                    </div>
                

                    <div class= "card-body" > 
                        <h5 class="display-5"> 
<!--                         <table class="table">
                            <tr>
                                <td class="table-active" colspan="2"> Bienvenido: 
                                    <small> <?php echo $_SESSION['pri_nom']." ".$_SESSION['seg_nom']." ".$_SESSION['pri_ape']." ".$_SESSION['seg_ape'];?> </small>
                                </td>
                            </tr>
                            <tr>
                                <td> Cedula: <small><?php echo $_SESSION['cedula']; ?></small></td>
                                <td> Cargo: <small><?php echo $_SESSION['cargo']; ?></small></td>
                            </tr>
                            <tr><td colspan="2"></td></tr>
                        </table> -->
                        </h5>
                        <h5 class= "card-title" ><b> Notificación: </b></h5> 
                        <p class= "card-text text-justify" > <b>ZORDON</b> es el sistema de inscripción de la <b> Unidad Educativa Complejo Educativo "Las Carolinas"</b>.
                         En la seccion <b> superior </b> de la pantalla, podra observar todas las opciones que estan disponibles, dentro del sistema.   
                        </p> 
                        
                    </div> 
                <div class= "card-footer text-muted" > 
                    <!---->
                </div> 
             </div> 
        </aside>
	</section>

<?php require_once 'includes/footer.php'; ?>	