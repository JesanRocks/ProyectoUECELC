<?php include 'includes/header.php'; ?>
    <section class="container-fluid row text-justify">  
<?php include 'includes/menu.php'; ?>
    
    <style type="text/css">    .foto_principal{  margin-top: -55px;} </style>

        <aside class="col-md-9">
             <div class= "card text-center" > 
                <div class= "card-header" > 
                    <img  class="card-img-top img-fluid" src="img/banner.png" >
                 </div>    
                    <div class="text-center">
                        <img src="img/logo-uecelc.png" class="img-fluid img-thumbnail text-center foto_principal rounded-circle" width="125px" height="125px">
                    </div>
                

                    <div class= "card-body" > 
                        <h5 class="display-5"> 
                        <table class="table">
                            <tr>
                                <td class="table-active" colspan="2"> Bienvenido: 
                                    <small> <?php echo $_SESSION['Nombre'];?> </small>
                                </td>
                            </tr>
                            <tr>
                                <td> Cedula: <small><?php echo $_SESSION['Cedula']; ?></small></td>
                                <td> Cargo: <small><?php echo $_SESSION['Desempeño']; ?></small></td>
                            </tr>
                            <tr><td colspan="2"></td></tr>
                        </table>
                        </h5>
                        <h5 class= "card-title" ><b> Notificación: </b></h5> 
                        <p class= "card-text text-justify" > Usted ha ingreado exitosamente al sistema de inscripción de la <b> Unidad Educativa Complejo Educativo "Las Carolinas"</b>.

                         Del <b>lado izquierdo</b> de la pantalla, estan las opciones disponibles, dentro del sistema.   
                        </p> 
                        
                    </div> 
                <div class= "card-footer text-muted" > 
                    <a href= "#" class= "btn btn-primary" > Reporte </a>  
                </div> 
             </div> 
        </aside>
    </section>
    <br>
<?php include 'includes/footer.php'; ?>