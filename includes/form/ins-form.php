<section class="container">
  <br><br>
	<form class="form" action=""  method="post">
	  <div class="form-row">

	  <table class="table table-hover">
		<thead class="text-center thead-light">
		  <tr>
			<th scope="col" colspan="3">Inscripción</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>
				<label>C.I. del estudiante</label>
<input class="form-control" type="hidden" name="id" value="<?php if(isset($id)){ echo $id; }?> " readonly required >
<input class="form-control" type="text" name="cedula" id="cedula" value="<?php if(isset($ci)){ echo $ci; }?> " readonly required >
			</td>

			<td>
			  <label>Año</label>
			  <select  class="form-control" name="grado" required >
				<option value="">Seleccionar</option>
				<option value="1er">1er</option>
				<option value="2do">2do</option>
				<option value="3er">3er</option>
				<option value="4to">4to</option>
				<option value="5to">5to</option>
			  </select>
			</td>
			<td>
			  <label>Sección</label>
			  <select  class="form-control" name="seccion" required >
				<option value="">Seleccionar</option>
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
				<option value="E">E</option>
				<option value="F">F</option>
				<option value="G">G</option>
			  </select>
			</td>
		  </tr>
		</tbody>
	  </table>

	  <table class="table table-hover">
		<thead class="text-center thead-light">
		  <tr>
			<th scope="col" colspan="4">Datos academicos</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>
				<label for="genero">¿Repitiente?</label><br>    
				<label><input type="radio" name="repitiente" value="51" required > Si</label>
				<label><input type="radio" name="repitiente" value="52" checked > No</label>
			</td>

			<td colspan="3">
			  <label for="asig">Asignaturas que cursa</label>
<input class="form-control" type="text" id="asig" name="asig" value="todas" placeholder="Asignaturas que cursa" required >
			</td>
		  </tr>
		  <tr>
			<td>
				<label for="genero">¿Materia penditiente?</label><br>    
				<label><input type="radio" name="mat_pend" value="54" required > Si</label>
				<label><input type="radio" name="mat_pend" value="55" checked > No</label>
			</td>

			<td colspan="2">
			  <label for="mat">¿Cual?</label>
<input class="form-control" type="text" value="ninguna" id="mat" name="mat" placeholder="Indique la materia pendiente">
			</td>

			<td>
			  <label for="genero">¿Posee beca?</label><br>
			  <label><input type="radio" name="beca" value="57" required > Si</label>  
			  <label><input type="radio" name="beca" value="58" checked > No</label>
			</td>
		  </tr>

		  <tr>
			<td>
			  <label>¿Posea canaima?</label><br>     
			  <label><input type="radio" name="Pcanaima" value="60" required > Si</label>     
			  <label><input type="radio" name="Pcanaima" value="61" checked > No</label>
			</td>

			<td>
			  <label>¿Estado?</label><br>      
			  <label><input type="radio" name="Ecanaima" value="63" required > En uso</label>      
			  <label><input type="radio" name="Ecanaima" value="64"> Dañada</label>
			</td>
			
			<td>
			  <label for="serial">Serial</label>
			  <input class="form-control" type="text" name="Scanaima" placeholder="Serial">
			</td>

			<td colspan="1">
			  <label>Actividad Extra-catedra</label>
			  <input class="form-control" type="text" value="ninguna" name="act_extca">
			</td>
		  </tr>
		  <tr>
			<td colspan="4">
			  <label for="plantel">Plantel procedente</label>
			  <input class="form-control" type="text" name="plantel_p" placeholder="Plantel procedente">
			</td>
		  </tr>
		  <tr>
			<td>
			  <label for="genero">¿Posea alguna diversidad funcional?</label><br>
			  <label><input type="radio" name="p_df" value="Si" required > Si</label>
			  <label><input type="radio" name="p_df" value="No" checked > No</label>
			</td>

			<td>
			  <label>¿Posee informe medico?</label><br>
			  <label><input type="radio" name="p_inf" value="Si" required checked > Si</label>
			  <label><input type="radio" name="p_inf" value="No" > No</label>
			</td>

			<td colspan="2">
			 <label>Indique la condicion</label><br>
			 <label><input type="checkbox" name="con_vi" value="90"> Visual</label>
			 <label><input type="checkbox" name="con_au" value="91"> Auditiva</label>
			 <label><input type="checkbox" name="con_mo" value="92"> Motora</label><br>
			 <label><input type="checkbox" name="con_fi" value="93"> Fisica</label>
			 <label><input type="checkbox" name="con_le" value="94"> De lenguaje</label>
			 <label><input type="checkbox" name="con_ap" value="95"> De aprendizaje</label>
			</td>
		  </tr>
		  <tr class="text-center bg-light">
			<td colspan="4"><b>Indique el colegio donde estudio en los tres años anteriores</b></td>
		  </tr>

		  <tr>
			<td>
			  <label>Periodo</label>
			  <input class="form-control" type="text" name="periodo1" placeholder="Ej: 2015 - 2016"> 
			</td>

			<td colspan="3">
			  <label>Indique el colegio donde estudio</label>
			  <input class="form-control" type="text" name="p1" placeholder="Indique el colegio donde estudio"> 
			</td>
		  </tr>

		  <tr>
			<td>
			  <label for="municipio">Periodo</label>
			  <input class="form-control" type="text" name="periodo2" placeholder="Ej: 2015 - 2016"> 
			</td>

			<td colspan="3"> 
			  <label for="nacionalidad">Indique el colegio donde estudio</label>
			  <input class="form-control" type="text" name="p2" placeholder="Indique el colegio donde estudio">
			</td>
		  </tr>

		  <tr>
			<td>
			  <label for="municipio">Periodo</label>
			  <input class="form-control" type="text" name="periodo3" placeholder="Ej: 2015 - 2016"> 
			</td>

			<td colspan="3">
			  <label for="nacionalidad">Indique el colegio donde estudio</label>
			  <input class="form-control" type="text" name="p3" placeholder="Indique el colegio donde estudio"> 
			</td>
		  </tr>
		</tbody>
	  </table>

	  <table class="table table-hover">
		<thead class="text-center thead-light">
		  <tr>
			<th scope="col" colspan="3">Documentos consignados</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>
			  <label><input type="checkbox" name="ci_est" value="79"> 2 Copia  C.I (Estudiante)</label></td>
			<td>
			  <label><input type="checkbox" name="ci_rep" value="80"> 1 Copia C.I (Representante)</label></td>
			<td>
			  <label><input type="checkbox" name="corgcert" value="81"> Copia y original de not. cert.</label></td>
		  </tr>
		  <tr>
			<td>
			  <label><input type="checkbox" name="f_rep" value="82"> 1 Foto del Representante</label>
			</td>
			<td>
			  <label><input type="checkbox" name="ci_pa" value="83"> 1 Copia  C.I (Padre)</label>
			</td>
			<td>
			  <label><input type="checkbox" name="part_nac" value="84"> 2 Copia Part. Nac</label>
			</td>
		  </tr>
		  
		  <tr>
			<td>
			  <label><input type="checkbox" name="corg_b" value="85"> Copia y Original del Boletín</label>
			</td>
			<td>
			  <label><input type="checkbox" name="ci_ma" value="86"> 1 Copia C.I (Madre)</label>
			</td>
			<td>
			  <label><input type="checkbox" name="f_est" value="87"> 4 Fotos del Estudiante</label>
			</td>
		  </tr>
		  <tr>
			<td></td>
			<td colspan="2">
			  <label><input type="checkbox" name="funda" value="88"> Funda Transparente</label>
			</td>
		  </tr>
		</tbody>
	  </table>

	  <div class="form-group col-md-6 offset-md-3">
		<input class="btn btn-block btn-info m-3" value="Inscribir" type="submit" name="inscribir">
	  </div>

	  </div>
	</form>
	<br>
	</section>