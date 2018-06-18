
  <div class="col-md-12">
    <div class="collapse multi-collapse" id="dat-re">
      <div class="card card-body">
        <form class="form" action="estudiantes.php" method="post">

			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="nomap">Nombres y Apellidos</label>
			      <input class="form-control" type="text" name="nomap" value="<?php echo $NombresR; ?>">
			    </div>
			    
			    <div class="form-group col-md-3"> 
					<label for="cedula">C.I.</label>
					<input class="form-control" type="number" name="cedula" value="<?php echo $CedulaR; ?>">
			    </div>


			    <div class="form-group col-md-3">
			    	<label for="edad">Fecha de nacimiento</label>
					<input class="form-control" type="date" name="fecha_n" value="<?php echo $FechaNacR;?>">
			    </div>

			    <div class="form-group col-md-3"> 
					<label for="pais_n">Pais de nacimiento</label>
				<input class="form-control" type="text" name="pais_n" value="<?php echo $PaisNacR;?>">
			    </div>

			    <div class="form-group col-md-3">
			    	<label for="estado">Estado</label>
					<input class="form-control" type="text" name="estado" value="<?php echo $EstadoR; ?>">
			    </div>

			    <div class="form-group col-md-3"> 
					<label for="nacionalidad">Nacionalidad</label>
					<input class="form-control" type="text" name="nacionalidad" value="<?php echo $NacionalidadR;?>">
			    </div>

			    <div class="form-group col-md-3">
			    	<label for="estadoc">Estado civil</label>
					<select class="form-control" name="est_c">
						<option><?php echo $EstadoC; ?></option>
						<option>Soltero(a)</option>
						<option>Casado(a)</option>
						<option>Vuido(a)</option>
						<option>Divorciado(a)</option>
					</select>
			    </div>
				
			     <div class="form-group col-md-6"> 
					<label>Profesion u oficio</label>
					<input class="form-control" type="" value="<?php echo $ProfesionR; ?>" name="puo">
			    </div>

				<div class="form-group col-md-6"> 
					<label>Empresa</label>
					<input class="form-control" type="" name="empresa" value="<?php echo $Empresa; ?>">
			    </div>

				<div class="form-group col-md-12">
			    	<label> Telefono de la empresa</label>
			    </div>
				<div class="form-group col-md-2"> 
			     	<label>Operadora</label>
					<select class="form-control" name="op_emp">
						<option><?php echo $OP_EMP; ?></option>
						<option>0291</option>
						<option>0292</option>
						<option>0281</option>
						<option>0412</option>
						<option>0414</option>
						<option>0416</option>
						<option>0424</option>
						<option>0426</option>
					</select>
				</div>
				<div class="form-group col-md-4"> 
			    	
					<label>Telefono</label>
					<input class="form-control" type="" name="num_emp" value="<?php echo $N_EMP; ?>">
			    </div>

				<div class="form-group col-md-12">
			    	<label> Telefono de habitación</label>
			    </div>
			    <div class="form-group col-md-2"> 
			     	<label>Operadora</label>
					<select class="form-control" name="op_hab">
						<option><?php echo $OP_HAB_R; ?></option>
						<option>0291</option>
						<option>0292</option>
						<option>0281</option>
					</select>
				</div>

				<div class="form-group col-md-4"> 
					<label>Telefono</label>
					<input class="form-control" type="" name="num_hab" value="<?php echo $N_HAB_R; ?>">
			    </div>

			   <div class="form-group col-md-12">
			    	<label> Telefono de celular</label>
			    </div>
			    <div class="form-group col-md-2"> 
			     	<label>Operadora</label>
					<select class="form-control" name="op_cel">
						<option><?php echo $N_CEL_R; ?></option>
						<option>0412</option>
						<option>0414</option>
						<option>0416</option>
						<option>0424</option>
						<option>0426</option>
					</select>
				</div>

				<div class="form-group col-md-4"> 
					<label>Telefono</label>
					<input class="form-control" type="" name="num_cel" value="<?php echo $N_CEL_R; ?>">
			    </div>

				<div class="form-group col-md-6"> 
					<label>Correo electronico</label>
					<input class="form-control" type="" name="correo" value="<?php echo $CorreoR; ?>">
			    </div>

			     <div class="form-group col-md-12"> 
					<label>Dirección</label>
					<input class="form-control" type="" name="dir" value="<?php echo $DireccionR; ?>">
			    </div>

			    <div class="form-group col-md-12"> 
					<input class="btn btn-success btn-block" value="Actualizar datos del representante" type="submit" name="btn-re">
			    </div>

			</div>
		</form>	
      </div>
    </div>
  </div>