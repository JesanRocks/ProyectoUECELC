
   <div class="col-12">
    <div class="collapse multi-collapse" id="dat-aca">
      <div class="card card-body">
      	<br>
        <form class="form" action="" method="">
			
			<div class="form-row">
			
				<div class="form-group col-md-3"> 
					<label for="genero">¿Repitiente?</label><br>
					<select class="form-control" name="repitiente"> 
						<option><?php echo $Rep; ?></option>
						<option>Si</option>
						<option>No</option>
					</select>
			    </div>

			    <div class="form-group col-md-9">
			      <label for="asig">Asignaturas que cursa</label>
			      <input class="form-control" type="text" name="asig" value="<?php echo $Asignatura;?>">
			    </div>

			    <div class="form-group col-md-3"> 
					<label for="genero">¿Materia penditiente?</label><br>
					<select class="form-control" name="repitiente"> 
						<option><?php echo $Materia; ?></option>
						<option>Si</option>
						<option>No</option>
					</select>
			    </div>

			     <div class="form-group col-md-6"> 
					<label for="mat">¿Cual?</label>
					<input class="form-control" type="" id="mat" name="mat" value="<?php echo $MateriaPC;?>">
			    </div>


			    <div class="form-group col-md-3"> 
					<label for="genero">¿Posee beca?</label><br>
					<select class="form-control" name="repitiente"> 
						<option><?php echo $Beca; ?></option>
						<option>Si</option>
						<option>No</option>
					</select>
			    </div>

			    <div class="form-group col-md-3"> 
					<label for="genero">¿Posea canaima?</label><br>
					<select class="form-control" name="Pcanaima""> 
						<option><?php echo $Pcanaima; ?></option>
						<option>Si</option>
						<option>No</option>
					</select>
			    </div>
			
				<div class="form-group col-md-3"> 
					<label>¿Estado?</label><br>
					<select class="form-control" name="Pcanaima""> 
						<option><?php echo $Ecanaima; ?></option>
						<option>En uso</option>
						<option>Dañada</option>
					</select>
			    </div>

			    <div class="form-group col-md-4"> 
					<label for="serial">Serial</label>
					<input class="form-control" type="" name="Scanaima" value="<?php echo $Scanaima; ?>">
			    </div>

			    <div class="form-group col-md-12"> 
					<label for="plantel">Plantel procedente</label>
				<input class="form-control" type="text" name="plantel_p" value='<?php echo $PlantelP; ?>'>
			    </div>

			    <div class="form-group col-md-4"> 
					<label for="genero">¿Posea alguna diversidad funcional?</label><br>
					<select class="form-control"  name="p_df"> 
						<option><?php echo $Pdiv; ?></option>
						<option>Si</option>
						<option>No</option>
					</select>

			    </div>
			
				<div class="form-group col-md-4"> 
					<label>¿Posee informe medico?</label><br>
					<select class="form-control"  name="p_df"> 
						<option><?php echo $Pinf; ?></option>
						<option>Si</option>
						<option>No</option>
					</select>
			    </div>

			     <div class="form-group col-md-4"> 
			     	<label>Indique la condicion</label>
					<select class="form-control" name="ind_cond">
						<option><?php echo $ICon; ?></option>
						<option>N/P</option>
						<option>Visual</option>
						<option>Auditiva</option>
						<option>Motora</option>
						<option>Fisica</option>
						<option>De lenguaje</option>
						<option>De aprendizaje</option>
					</select>
				</div>

			    <div class="form-group col-md-12">
			    	<label for="Colegio"> Indique el colegio donde estudio en los tres años anteriores</label>
			    </div>

			    <div class="form-group col-md-3"> 
					<label>Periodo</label>
					<input class="form-control" type="text" name="periodo1" value="<?php echo $Pe1; ?>">
			    </div>

			    <div class="form-group col-md-9"> 
					<label>Indique el colegio donde estudio</label>
					<input class="form-control" type="text" name="p1" value='<?php echo $PP1; ?>'>
			    </div>

			    <div class="form-group col-md-3"> 
					<label for="municipio">Periodo</label>
					<input class="form-control" type="text" name="periodo2" value="<?php echo $Pe2; ?>">
			    </div>

			    <div class="form-group col-md-9"> 
					<label for="nacionalidad">Indique el colegio donde estudio</label>
					<input class="form-control" type="text" name="p2" value='<?php echo $PP2 ; ?>'>
			    </div>

			    <div class="form-group col-md-3"> 
					<label for="municipio">Periodo</label>
					<input class="form-control" type="text" name="periodo3" value="<?php echo $Pe3 ; ?>">
			    </div>

			    <div class="form-group col-md-9"> 
					<label for="nacionalidad">Indique el colegio donde estudio</label>
					<input class="form-control" type="text" name="p3" value='<?php echo $PP3; ?>'>
			    </div>
				
				<div class="form-group col-md-12"> 
					<input class="btn btn-success btn-block" value="Actualizar datos academicos" type="submit" name="btn-dat">
			    </div>
			</div>
		</form>	
		<br>
      </div>
    </div>
  </div>