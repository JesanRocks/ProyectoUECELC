  <div class="col-md-12">
    <div class="collapse multi-collapse" id="dat-pa">
      <div class="card card-body">
		<br>
		<form class="form" action="" method="">

			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="nomap">Nombres y Apellidos</label>
			      <input class="form-control" type="text" name="nomap" value="<?php echo $NombresP; ?>">
			    </div>
			    <div class="form-group col-md-3"> 
					<label for="cedula">C.I.</label>
					<input class="form-control" type="number" name="cedula" value="<?php echo $CedulaM; ?>">
			    </div>

			    <div class="form-group col-md-3">
			    	<label for="edad">Edad</label>
					<input class="form-control" type="number" name="edad" value='<?php echo $EdadP; ?>'>
			    </div>

			    <div class="form-group col-md-4"> 
					<label for="pais_n">Lugar de nacimiento</label>
				<input class="form-control" type="text" id="pais_n" name="pais_n" value="<?php echo $LGNP; ?>">
			    </div>

			    <div class="form-group col-md-4">
			    	<label for="estado">Estado</label>
					<input class="form-control" type="text" name="estado" value="<?php echo $EstadoP; ?>">
			    </div>

			    <div class="form-group col-md-4"> 
					<label for="municipio">Municipio</label>
					<input class="form-control" type="text" name="municipio" value="<?php echo $MunicipioP; ?>">
			    </div>

				<div class="form-group col-md-12">
			    	<label> Telefono de habitacion</label>
			    </div>
				<div class="form-group col-md-2"> 
			     	<label>Operadora</label>
					<select class="form-control" name="op_hab">
						<option><?php echo $OP_HAB_P; ?></option>
						<option>0291</option>
						<option>0292</option>
						<option>0281</option>
					</select>
				</div>
				<div class="form-group col-md-4"> 
			    	
					<label>Telefono</label>
					<input class="form-control" type="" name="num_hab" value="<?php echo $N_HAB_P; ?>">
			    </div>

				<div class="form-group col-md-12">
			    	<label> Telefono celular</label>
			    </div>
			    <div class="form-group col-md-2"> 
			     	<label>Operadora</label>
					<select class="form-control" name="op_cel">
						<option><?php echo $OP_CEL_P; ?></option>
						<option>0412</option>
						<option>0414</option>
						<option>0416</option>
						<option>0424</option>
						<option>0426</option>
					</select>
				</div>

				<div class="form-group col-md-4"> 
					<label>Telefono</label>
					<input class="form-control" type="" name="num_cel" value="<?php echo $N_CEL_P; ?>">
			    </div>
				
				 <div class="form-group col-md-7"> 
					<label>Profesion u oficio</label>
					<input class="form-control" type="" name="puo" value="<?php echo $ProfesionP; ?>">
			    </div>

				<div class="form-group col-md-5"> 
					<label>Lugar de trabajo</label>
					<input class="form-control" type="" name="ldt" value="<?php echo $Lug_TP; ?>">
			    </div>

			     <div class="form-group col-md-12"> 
					<label>Dirección</label>
					<input class="form-control" type="" name="dir" value="<?php echo $DireccionP; ?>">
			    </div>

			    <div class="form-group col-md-12"> 
					<input class="btn btn-success btn-block" value="Actualizar datos del padre" type="submit" name="btn-pa">
			    </div>

			</div>
		</form>    
			    
	
		
      </div>
    </div>
  </div>