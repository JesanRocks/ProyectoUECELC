<p>
<div class="btn-group-vertical btn-block" role="group" aria-label="Basic example">
  <a class="btn btn-primary" data-toggle="collapse" href="#dat-est" role="button" aria-expanded="false" aria-controls="dat-est">Datos del estudiante</a>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dat-aca" aria-expanded="false" aria-controls="dat-aca">Datos academicos</button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dat-ma" aria-expanded="false" aria-controls="dat-ma">Datos de la madre</button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dat-pa" aria-expanded="false" aria-controls="dat-pa">Datos del padre</button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dat-re" aria-expanded="false" aria-controls="dat-re">Datos del representante</button>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#doc-co" aria-expanded="false" aria-controls="doc-co">Documentos consignados</button>
</div>
</p>

<div class="row">

  <div class="col-12">
    <div class="collapse multi-collapse" id="dat-est">
      <div class="card card-body">
        <br>
		<form>
			<div class='form-row'>
				<div class='form-group col-md-6'>
				  <label>Nombres y Apellidos</label>
				  <input class='form-control' type='text' name='nomap' value='<?php echo $Nombres;?>'>
				</div>
				<div class='form-group col-md-6'> 
					<label>C.I.</label>
					<input class='form-control' type=number name='cedula' value='<?php echo $Cedula;?>'>
				</div>
					
					<div class='form-group col-md-4'>
				    	<label for='edad'>Edad</label>
						<input class='form-control' type='number' name='edad' value='<?php echo $Edad;?>'>
				    </div>

				    <div class='form-group col-md-4'> 
						<label for=fecha_n>Fecha de nacimiento</label>
						<input class='form-control' type=date name='fecha_n' value='<?php echo $Fecha;?>'>
				    </div>

				   <div class='form-group col-md-4'> 
						<label>País de nacimiento</label>
					<input class='form-control' type='text' name='pais_n' value='<?php echo $Pais;?>'>
				    </div>

				    <div class='form-group col-md-4'>
				    	<label>Estado</label>
						<input value='<?php echo $Estado;?>' class='form-control' type='text' name='estado' placeholder='Estado'>
				    </div>

				    <div class='form-group col-md-4'> 
						<label>Municipio</label>
						<input value='<?php echo $Municipio;?>' class='form-control' type='text' name='municipio' placeholder='Municipio'>
				    </div>

				    <div class='form-group col-md-4'> 
						<label>Nacionalidad</label>
						<select class='form-control' name='nacionalidad'>
							<option><?php echo $Nacionalidad; ?></option>
							<option>Venezolano(a)</option>
							<option>Extranjero(a)</option>
						</select>
				    </div>

				    <div class='form-group col-md-4'> 
						<label>Lateralidad</label><br>
						<select class='form-control' name='lateralidad'>
							<option><?php echo $Lateralidad; ?></option>
							<option value='Derecho'>Derecho</option>
							<option value='Izquierdo'>Izquierdo</option>
							<option value='Ambas'>Ambas</option>
						</select>
				    </div>

				    <div class='form-group col-md-4 offset-4'> 
						<label for='genero'>Genero</label><br>
						<select class='form-control' name='genero'>
							<option><?php echo $Genero; ?></option>
							<option value='F'>F</option>
							<option value='M'>M</option>
						</select>
				    </div>
					<br>
				    <div class='form-group col-md-2'> 
						<label for='peso'>Peso</label>
						<input value='<?php echo $Peso;?>' class='form-control' type=' name='peso' >
				    </div>

				     <div class='form-group col-md-2'> 
						<label for='estatura'>Estatura</label>
						<input value='<?php echo $Estatura;?>' class='form-control' type=' name='estatura'>
				    </div>

				   	<div class='form-group col-md-2'> 
						<label for=''>Talla camisa</label>
						<input value='<?php echo $TallaC;?>' class='form-control' type='text' name='TallaC'>
				    </div>

				     <div class='form-group col-md-2'> 
						<label>Talla pantalon</label>
						<input value='<?php echo $TallaP;?>' class='form-control' type='number' name='TallaP'>
				    </div>

				    <div class='form-group col-md-2'> 
						<label for=''>Talla zapatos</label>
						<input value='<?php echo $TallaZ;?>' class='form-control' type='number' name='TallaZ'>
				    </div>

				     <div class='form-group col-md-12'> 
						<label for='vivienda'>Vivienda</label>
				    </div>

				     <div class='form-group col-md-3'> 
						<label>Tipo de vivienda</label>
						<input value='<?php echo $TipoV ;?>' class='form-control' name='tipo_v'>
				    </div>

				     <div class='form-group col-md-3'> 
						<label>Condición</label>
						<input value='<?php echo $CondV ;?>' class='form-control' name='cond'>
				    </div>

				     <div class='form-group col-md-3'> 
						<label>Infraestructura</label>
						<input value='<?php echo $InfrV ;?>' class='form-control' name='infraestructura'>
				    </div>
					
					<div class='form-group col-md-12'> 
						<label>Telefono</label>
				    </div>

				    <div class='form-group col-md-2'> 
				     	<label>Operadora</label>
						<select class='form-control' name='op_cel'>
							<option><?php echo $Operadora;?> </option>
							<option>0412</option>
							<option>0414</option>
							<option>0416</option>
							<option>0424</option>
							<option>0426</option>
						</select>
					</div>

					<div class='form-group col-md-4'> 
						<label>Numero</label>
						<input value='<?php echo $Numero; ?>' class='form-control' name='num_cel'>
				    </div>

				     <div class='form-group col-md-12'> 
						<label>Dirección</label>
						<input value='<?php echo $Direccion ;?>' class='form-control' type=' placeholder='Dirección' name='dir'>
				    </div>

				    <div class='form-group col-md-12'> 
						<input class='btn btn-success btn-block' name='btn_est' value='Actualizar datos del estudiante' type=submit>
				    </div>
				</div> 
				    
			</div> 
		</form>
		<br>
      </div>
    </div>
  </div>

  	<?php 
  		include 'includes/estudiantes/act-dat.php';
		include 'includes/estudiantes/act-ma.php';
		include 'includes/estudiantes/act-pa.php';
		include 'includes/estudiantes/act-re.php';
		include 'includes/estudiantes/act-doc.php'; 
	?>

</div>