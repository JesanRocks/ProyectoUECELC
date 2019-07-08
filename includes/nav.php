<?php 
	if ($_SESSION['Usuario']==NULL) {
		header('Location: index.php');
	}
?>
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link text-white" href="sistema.php"><i class="fas fa-home "></i> Inicio</a>
	      </li>

	      <ul class="navbar-nav d-flex justify-content-end">
		      <li class="nav-item dropdown ">
		        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fas fa-plus"></i> Registro 
		        </a>
		        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="registro.php"><i class="fas fa-user-plus "></i> Registrar</a>
		          <a class="dropdown-item" href="listado.php"><i class="fas fa-list-ol "></i> Listado</a>
		        </div>
		      </li>
		    </ul>
			
			<ul class="navbar-nav d-flex justify-content-end">
		      <li class="nav-item dropdown ">
		        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fas fa-street-view"></i> Inscripción 
		        </a>
		        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="inscripcion.php"><i class="fas fa-user-plus "></i> Inscribir</a>
		          <a class="dropdown-item" href="listados_inscritos.php"><i class="fas fa-list-ol "></i> Listado</a>
		        </div>
		      </li>
		    </ul>

		    <li class="nav-item">
	         <a class="nav-link text-white" href="documentos.php"><i class="fas fa-file-alt"></i> Documentos</a>
	      	</li>

		    <li class="nav-item">
	         <a class="nav-link text-white" href="estadistica.php"><i class="fas fa-chart-bar"></i> Estadísticas</a>
	      	</li>


			<ul class="navbar-nav d-flex justify-content-end <?php if ($_SESSION['cargo']!="Director(a)") {echo"fade";}?>">
		      <li class="nav-item dropdown ">
		        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <i class="fas fa-street-view"></i> Personal 
		        </a>
		        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="reg-personal.php"><i class="fas fa-user-plus "></i> Registrar</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="lis-personal.php"><i class="fas fa-list-ol "></i> Listado</a>
		        </div>
		      </li>
		    </ul>
	    </ul>

	    <ul class="navbar-nav d-flex justify-content-end">
	      <li class="nav-item dropdown ">
	        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <?php echo $_SESSION['pri_nom']." ".$_SESSION['seg_nom']." ".$_SESSION['pri_ape']." ".$_SESSION['seg_ape']; ?> <i class="fas fa-user-circle"></i>
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <h6 class="dropdown-header text-center"><?php echo $_SESSION['Usuario']; ?></h6>
	          <a class="dropdown-item" href="" data-toggle="modal" data-target="#Cambiar"><i class="fas fa-unlock-alt"></i> Cambiar contraseña</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="salir.php"><i class="fas fa-power-off"></i> Salir</a>
	        </div>
	      </li>
	    </ul>

	  </div>
	</nav>


<div class="modal fade" id="Cambiar" tabindex="-1" role="dialog" aria-labelledby="CambiarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="CambiarLabel">Cambiar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        
        <form class="form" method="post" action="">
          <div class="form-group"> 
            <label>Ingrese su contraseña actual</label>
            <input class="form-control" name="ca">
          </div>

           <div class="form-group"> 
            <label>Ingrese la contraseña nueva</label>
            <input class="form-control" name="cn">
          </div>

          <div class="form-group"> 
            <label>Repita la contraseña nueva</label>
            <input class="form-control" name="rc">
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary" name="Cambiar" value="1">Cambiar</button>
        </form>
      </div>

    </div>
  </div>
</div>
<div class="offset-sm-2 col-8 mt-2">
<?php  
if (isset($_POST['Cambiar'])) {
	extract($_POST);
	$a=$_SESSION['Usuario'];

	$sql="SELECT `clave` FROM `usuarios` WHERE `usuario`='$a'";
	$ejec=mysqli_query($conexion,$sql);

	while ($fila=mysqli_fetch_array($ejec) ) {extract($fila);}

	if ($ca==$clave) {
		echo "
		<div class='alert alert-info text-center'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button> Contraseña <b>autenticada</b>.
        </div>";

		if (!empty($cn) && !empty($rc)) {

					if ($cn==$rc) {
						
						$sql="UPDATE `usuarios` SET `clave`='$cn' WHERE usuario='$a' ";
						$cambiar=mysqli_query($conexion,$sql);

						echo "
						<div class='alert alert-info text-center'>
			                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			                    <span aria-hidden='true'>&times;</span>
			                </button> 
			                <h5 class='alert-heading'>¡Bien hecho!</h5><hr>
			                El cambio de contraseña se realizo de manera <b>exitosa</b>.
			            </div>";
					}else{
						echo "
						<div class='alert alert-danger text-center'>
			                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			                    <span aria-hidden='true'>&times;</span>
			                </button> 
			                <h5 class='alert-heading'>¡Error!</h5><hr>
			                La contraseña suministrada no coinciden, por favor intentelo nuevamente.
			            </div>";
					}

		}else{
		echo "
		<div class='alert alert-danger text-center'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
			</button> 
			<h5 class='alert-heading'>¡Error!</h5><hr>
			Hay campos vacios, verifique e intente nuevamente.
		</div>";
								
		}

	}else{
		echo "
		<div class='alert alert-danger text-center'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button> Error al autentificar contraseña actual.
        </div>";
	}
}
?>
</div>

<?php 
if (isset($_GET['msj'])) {
	
	if ($_GET['msj']==1) {
		alerta("El estudiante se registro exitososamente");
	}

}
 ?>
