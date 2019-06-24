
    <form class='form' action=''  method='post'>
      <div class='form-row'>

      <table class='table table-hover'>
        <thead class='text-center thead-dark'>
          <tr>
            <th scope='col' colspan='3'>Actualizar inscripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <label>C.I. del estudiante</label>
                <input class='form-control' type='number' name='cedula' id='cedula' value="<?php echo $ci?>">
            </td>

            <td>
              <label>Año</label>
              <select  class='form-control' name='grado' required>
                <option value='<?php echo $grado?>'>*<?php echo $grado;?></option>
                <option value='1er'>1er</option>
                <option value='2do'>2do</option>
                <option value='3er'>3er</option>
                <option value='4to'>4to</option>
                <option value='5to'>5to</option>
              </select>
            </td>
            <td>
              <label>Sección</label>
              <select  class='form-control' name='seccion' required>
                <option value='<?php echo $seccion?>'>*<?php echo $seccion;?></option>
                <option value='A'>A</option>
                <option value='B'>B</option>
                <option value='C'>C</option>
                <option value='D'>D</option>
                <option value='E'>E</option>
                <option value='F'>F</option>
                <option value='G'>G</option>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
<?php

$sql="SELECT * FROM `academicos` WHERE persona_id=$estudiante_id";
$ejc=mysqli_query($conexion,$sql);
while ($fil=mysqli_fetch_array($ejc)) { extract($fil); }

?>
      <table class='table table-hover'>
        <thead class='text-center thead-dark'>
          <tr>
            <th scope='col' colspan='4'>Datos academicos</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
                <label for='genero'>¿Repitiente?</label><br>    
                <label><input type='radio' name='repitiente' value='51' <?php if ($repitiente=="51") { echo "checked";}?>> Si</label>
                <label><input type='radio' name='repitiente' value='52' <?php if ($repitiente=="52") { echo "checked";}?>> No</label>
            </td>

            <td colspan='3'>
              <label for='asig'>Asignaturas que cursa</label>
              <input class='form-control' type='text' name='asig' value="<?php echo $asig_cur;?>">
            </td>
          </tr>
          <tr>
            <td>
                <label for='genero'>¿Materia penditiente?</label><br>    
                <label><input type='radio' name='mat_pend' value='54' <?php if ($mat_pend=="54") { echo "checked";}?>> Si</label>
                <label><input type='radio' name='mat_pend' value='55' <?php if ($mat_pend=="55") { echo "checked";}?>> No</label>
            </td>

            <td colspan='2'>
              <label for='mat'>¿Cual?</label>
              <input class='form-control' type='' name='mat' value="<?php echo $pend_mat;?>">
            </td>

            <td>
              <label for='genero'>¿Posee beca?</label><br>
              <label><input type='radio' name='beca' value='57' <?php if ($beca_id=="57") { echo "checked";}?>> Si</label>  
              <label><input type='radio' name='beca' value='58' <?php if ($beca_id=="58") { echo "checked";}?>> No</label>
            </td>
          </tr>

          <tr>
            <td>
              <label>¿Posea canaima?</label><br>     
              <label><input type='radio' name='Pcanaima' value='60'<?php if ($canaima_id=="60") { echo "checked";}?>> Si</label>     
              <label><input type='radio' name='Pcanaima' value='61'<?php if ($canaima_id=="61") { echo "checked";}?>> No</label>
            </td>

            <td>
              <label>¿Estado?</label><br>      
              <label><input type='radio' name='Ecanaima' value='63'<?php if ($can_edo_id=="63") { echo "checked";}?> > En uso</label>      
              <label><input type='radio' name='Ecanaima' value='64'<?php if ($can_edo_id=="64") { echo "checked";}?> > Dañada</label>
            </td>
            
            <td>
              <label for='serial'>Serial</label>
              <input class='form-control' type=' name='Scanaima' value="<?php echo $can_serial;?>">
            </td>

            <td colspan='1'>
              <label>Actividad Extra-catedra</label>
              <input class='form-control' type=' name='act_extca' value="<?php echo $act_extca;?>">
            </td>
          </tr>
          <tr>
            <td colspan='4'>
              <label for='plantel'>Plantel procedente</label>
              <input class='form-control' type='text' name='plantel_p' value="<?php echo $plant_ant?>">
            </td>
          </tr>
<?php

$sql="SELECT * FROM `div_funcional` WHERE estudiante_id=$estudiante_id";
$ejc=mysqli_query($conexion,$sql);
while ($fil=mysqli_fetch_array($ejc)) { $df_id[]=$fil['id']; $dsc[]=$fil['diversidad_id']; $informe[]=$fil['informe'];}

if ($dsc[0]=="90" or $informe[1]=="91" or $informe[2]=="92" or  $informe[3]=="93" or $informe[4]=="94" or $informe[5]=="95") { $posee="Si"; }

if ($informe[0]=="Si" or $informe[1]=="Si" or $informe[2]=="Si" or  $informe[3]=="Si" or $informe[4]=="Si" or $informe[5]=="Si") { $informe="Si"; }

?>

          <tr>
            <td>
              <label for='genero'>¿Posea alguna diversidad funcional?</label><br>
              <label><input type='radio' name='p_df' value='Si' <?php if ($posee=="Si") { echo "checked";}?>> Si</label>
              <label><input type='radio' name='p_df' value='No' <?php if ($posee=="No") { echo "checked";}?>> No</label>
            </td>

            <td>
              <label>¿Posee informe medico?</label><br>
              <label><input type='radio' name='p_inf' value='Si' <?php if ($informe=="Si") { echo "checked";}?>> Si</label>
              <label><input type='radio' name='p_inf' value='No' <?php if ($informe=="No") { echo "checked";}?>> No</label>
            </td>

            <td colspan='2'>
             <label>Indique la condicion</label><br>
             <label><input type='checkbox' name='con_vi' value='90' <?php if ($dsc[0]=="90") {echo "checked";}?> > Visual</label>
             <label><input type='checkbox' name='con_au' value='91' <?php if ($dsc[1]=="91") {echo "checked";}?> > Auditiva</label>
             <label><input type='checkbox' name='con_mo' value='92' <?php if ($dsc[2]=="92") {echo "checked";}?> > Motora</label><br>
             <label><input type='checkbox' name='con_fi' value='93' <?php if ($dsc[3]=="93") {echo "checked";}?> > Fisica</label>
             <label><input type='checkbox' name='con_le' value='94' <?php if ($dsc[4]=="94") {echo "checked";}?> > De lenguaje</label>
             <label><input type='checkbox' name='con_ap' value='95' <?php if ($dsc[5]=="95") {echo "checked";}?> > De aprendizaje</label>
            </td>
          </tr>
          <tr class='text-white text-center bg-dark'>
            <td colspan='4'><b>Indique el colegio donde estudio en los tres años anteriores</b></td>
          </tr>

          <tr>
            <td>
              <label>Periodo</label>
              <input class='form-control' type='text' name='periodo1' value="<?php echo $period1;?>"> 
            </td>

            <td colspan='3'>
              <label>Indique el colegio donde estudio</label>
              <input class='form-control' type='text' name='p1' value="<?php echo $plantel1;?>"> 
            </td>
          </tr>

          <tr>
            <td>
              <label for='municipio'>Periodo</label>
              <input class='form-control' type='text' name='periodo2' value="<?php echo $period2;?>"> 
            </td>

            <td colspan='3'> 
              <label for='nacionalidad'>Indique el colegio donde estudio</label>
              <input class='form-control' type='text' name='p2' value="<?php echo $plantel2;?>">
            </td>
          </tr>

          <tr>
            <td>
              <label for='municipio'>Periodo</label>
              <input class='form-control' type='text' name='periodo3' value="<?php echo $period3;?>"> 
            </td>

            <td colspan='3'>
              <label for='nacionalidad'>Indique el colegio donde estudio</label>
              <input class='form-control' type='text' name='p3' value="<?php echo $plantel3;?>"> 
            </td>
          </tr>
        </tbody>
      </table>
<?php
$sql="SELECT * FROM `documentos` WHERE persona_id='$estudiante_id'";
$ejc=mysqli_query($conexion,$sql);
while ($fil=mysqli_fetch_array($ejc)) { 
  print_r($fil);
  $docid[]=$fil['id'];
  $doc[]=$fil['documento_id'];
}
?>
      <table class='table table-hover'>
        <thead class='text-center thead-dark'>
          <tr>
            <th scope='col' colspan='3'>Documentos consignados</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label><input type='checkbox' name='ci_est' value='79' <?php if ($doc[0]=="79") {echo "checked";}?>> 2 Copia  C.I (Estudiante)</label></td>
            <td>
              <label><input type='checkbox' name='ci_rep' value='80' <?php if ($doc[1]=="80") {echo "checked";}?>> 1 Copia C.I (Representante)</label></td>
            <td>
              <label><input type='checkbox' name='corgcert' value='81' <?php if ($doc[2]=="81") {echo "checked";}?>> Copia y original de not. cert.</label></td>
          </tr>
          <tr>
            <td>
              <label><input type='checkbox' name='f_rep' value='82' <?php if ($doc[3]=="82") {echo "checked";}?>> 1 Foto del Representante</label>
            </td>
            <td>
              <label><input type='checkbox' name='ci_pa' value='83' <?php if ($doc[4]=="83") {echo "checked";}?>> 1 Copia  C.I (Padre)</label>
            </td>
            <td>
              <label><input type='checkbox' name='part_nac' value='84' <?php if ($doc[5]=="84") {echo "checked";}?>> 2 Copia Part. Nac</label>
            </td>
          </tr>
          
          <tr>
            <td>
              <label><input type='checkbox' name='corg_b' value='85' <?php if ($doc[6]=="85") {echo "checked";}?>> Copia y Original del Boletín</label>
            </td>
            <td>
              <label><input type='checkbox' name='ci_ma' value='86' <?php if ($doc[7]=="86") {echo "checked";}?>> 1 Copia C.I (Madre)</label>
            </td>
            <td>
              <label><input type='checkbox' name='f_est' value='87' <?php if ($doc[8]=="87") {echo "checked";}?>> 4 Fotos del Estudiante</label>
            </td>
          </tr>
          <tr>
            <td></td>
            <td colspan='2'>
              <label><input type='checkbox' name='funda' value='88' <?php if ($doc[9]=="88") {echo "checked";}?>> Funda Transparente</label>
            </td>
          </tr>
        </tbody>
      </table>

      <div class='form-group col-md-6 offset-md-3'>
        <button class='btn btn-block btn-info m-3' name='inscribir' value='1'>Actualizar inscripción</button>   
      </div>

      </div>
    </form>
  </section>