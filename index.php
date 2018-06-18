<?php 
include 'includes/header.php';
?>

    <section class="container col-8 text-justify">
<?php require 'includes/validar/error.php'; ?>
   <article class="card bg-light">
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
                  <input type="text" class="form-control" placeholder="Usuario" name="Usuario">
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="d-none d-sm-block col-sm-3 col-form-label">Contraseña</label>
              <div class="col-sm-9">
                <div class="input-group">                  
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-key "></i></div>
                  </div>
                  <input type="password" class="form-control" placeholder="Contraseña" name="Contraseña">
                </div>
              </div>
            </div>

             <div class="form-group row">
               <div class="col-sm-2"></div>
               <div class="col-sm-10">
                 <div class="form-check">
                   <label class="form-check-label">
                     <input class="form-check-input" type="checkbox"> Check me out
                   </label>
                 </div>
               </div>
             </div>
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
    </section>
<br>
<?php include 'includes/footer.php';?>