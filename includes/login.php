	<div class="offset-sm-0 col-sm-12 offset-md-3 col-md-6">
		<article class="card bg-light mt-4 mb-4">
			<div class="card-header text-center"> <b>Iniciar sesión</b> </div>
			  <div class="card-body">
				<form action="includes/validar/verificar.php" method="post">
				 
				<div class="form-group row">
				  <label class="d-none d-sm-block col-sm-3 col-form-label">Usuario</label>
				  <div class="col-sm-9">
					<div class="input-group">
					  <div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-child"></i></div>
					  </div>
<input type="text" class="form-control" placeholder="Usuario" name="user" value="V-8377937">
					</div>
				  </div>
				</div>

				<div class="form-group row">
				  <label class="d-none d-sm-block col-sm-3 col-form-label">Clave</label>
				  <div class="col-sm-9">
					<div class="input-group">                  
					  <div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-key "></i></div>
					  </div>
<input type="password" class="form-control" placeholder="*******" name="pass" value="8377937">
					</div>
				  </div>
				</div>
<?php require_once 'includes/validar/error.php';?>
			  </div>

			  <div class="card-footer">
				<div class="form-group row">
				  <div class="col-sm-12">
					<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fas fa-sign-in-alt  "></i> <b> Ingresar</b></button>
				  </div>
				</div>
			  </form>
		  </div>
		</article>
</div>