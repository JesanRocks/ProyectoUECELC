<?php
  $SQL="SELECT * FROM representantes INNER JOIN personas ON representantes.persona_id=personas.id WHERE persona_id=$editar_id";
  $Ejec=mysqli_query($conexion,$SQL);
  while ($fila=mysqli_fetch_array($Ejec)) {extract($fila);}

  $SQL="SELECT * FROM direcciones INNER JOIN municipios ON direcciones.parroquia_id=municipios.id WHERE persona_id=$editar_id";
  $Ejec=mysqli_query($conexion,$SQL);
  while ($fila=mysqli_fetch_array($Ejec)) {extract($fila);}
?>
<!--Combobox-->
  <script type="text/javascript">
      $(document).ready(function(){
        $("#ComboEdo").change(function () {
          
          $("#ComboEdo option:selected").each(function () {
            id = $(this).val();

            $.post("includes/cb/getMunicipio.php", { id: id }, function(data){
              $("#ComboMun").html(data);
            });            
          });
        })
      });
  </script>
<!--Formularios-->      
    <form class="form" action="" method="POST">
      <div class="form-row">

        <div class="form-group col-md-6"> 
          <label for="cedula">C.I. *</label>
          <input class="form-control" min="0" type="number"  name="cedula" placeholder="Cédula" value="<?php echo $ci; ?>">
        </div>

      <div class='form-group col-md-3'>
        <label>Nacionalidad</label>
          <select class="form-control" name="nac">
          <?php
            $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=$nac_id"; 
            $ejec=mysqli_query($conexion,$sql);
            while ($filaEAV=mysqli_fetch_assoc($ejec)) {
              $op=$filaEAV['id']; $des=$filaEAV['dsc'];
              echo "<option value='$op'>*$des</option>";
            }
            $edoc="SELECT * FROM `eav` WHERE tipo_id=3";
            $ecc=mysqli_query($conexion,$edoc);
            while ($filaec=mysqli_fetch_assoc($ecc)) {
          ?>
            <option value="<?php echo $filaec['id']; ?>"> <?php echo $filaec['dsc']; ?></option>
          <?php
            }
          ?>
        </select>
      </div>

        <div class="form-group col-md-3">
          <label for="edad">Fecha de nacimiento *</label>
          <input class="form-control" type="date" name="fec_na" min="1938-01-01" max="<?php echo date('Y-m-d');?>" value="<?php echo $fec_nac; ?>">
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Primer nombre *</label>
            <input class="form-control" type="text" name="prinom" value='<?php echo $pri_nom; ?>'>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Segundo nombre</label>
            <input class="form-control" type="text" name="segnom" value='<?php echo $seg_nom; ?>' >
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Primero apellido *</label>
            <input class="form-control" type="text" name="priape" value='<?php echo $pri_ape; ?>'>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Segundo apellido</label>
            <input class="form-control" type="text" name="segape" value='<?php echo $seg_ape; ?>' >
        </div>

        <div class='form-group col-md-3'> 
          <label>País de nacimiento</label>
          <select class='form-control' name='pais' id='pais' >
          <?php
            $sql="SELECT * FROM `paises` WHERE id=$pais_id";
            $ejec=mysqli_query($conexion,$sql);
            while ($p=mysqli_fetch_assoc($ejec)) {extract($p);
              echo "<option value='$id'>*$dsc</option>";
            }
              
            $sql='SELECT * FROM paises ORDER BY dsc ASC';
            $ejc=mysqli_query($conexion,$sql);
            while ($filaP1=mysqli_fetch_assoc($ejc)) {
          ?>
            <option value='<?php echo $filaP1['id']; ?>'> <?php echo $filaP1['dsc']; ?></option>
          <?php
            }
          ?>
          </select>
        </div>

     <div class='form-group col-md-3'>
        <label>Lugar de nacimiento</label>
        <input class='form-control' type='' name='ln'  value='<?php echo $lug_nac; ?>'>
      </div>

      <div class="form-group col-md-3">
        <label for="estado">Estado</label>
        <select class="form-control" name="ComboEdo" id="ComboEdo">
          <?php
            $sql="SELECT * FROM `estados` WHERE id=$estado_id";
            $ejec=mysqli_query($conexion,$sql);
            while ($dir=mysqli_fetch_assoc($ejec)) {
              extract($dir);
              echo "<option value='$id'>*$dsc</option>";
            }
            $edo="SELECT * FROM estados ORDER BY dsc ASC";
            $edoc=mysqli_query($conexion,$edo); 

            while ($fila=mysqli_fetch_assoc($edoc)) {
          ?>
            <option value="<?php echo $fila['id']; ?>"> <?php echo $fila['dsc']; ?></option>
          <?php
            }
          ?>
        </select>
      </div>

      <div class="form-group col-md-3"> 
        <label for="municipio">Municipio</label>
        <select class="form-control" name="ComboMun" id="ComboMun">
        <?php
          $sql="SELECT * FROM `municipios` WHERE id=$parroquia_id";

            $ejec=mysqli_query($conexion,$sql);
            while ($mun=mysqli_fetch_assoc($ejec)) {
              extract($mun);
              echo "<option value='$id'>*$dsc</option>";
            }
            ?>
        </select>
      </div>

      <div class="form-group col-md-3"> 
        <label>Estado civil</label>
          <select class="form-control" name="edoc" id="edoc">
          <?php
            $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=$edocivil_id"; 
            $ejec=mysqli_query($conexion,$sql);
            while ($filaEAV=mysqli_fetch_assoc($ejec)) {
              $op=$filaEAV['id']; $des=$filaEAV['dsc'];
              echo "<option value='$op'>*$des</option>";
            }
            $edoc="SELECT * FROM `eav` WHERE tipo_id=9";
            $ecc=mysqli_query($conexion,$edoc);
            while ($filaec=mysqli_fetch_assoc($ecc)) {
          ?>
            <option value="<?php echo $filaec['id']; ?>"> <?php echo $filaec['dsc']; ?></option>
          <?php
            }
          ?>
        </select>
      </div>

        <div class="form-group col-md-3"> 
          <label>Profesión u oficio</label>
          <input class="form-control" type="" value="<?php echo $profesion;?>" name="puo">
        </div>

        <div class="form-group col-md-3"> 
          <label>Empresa</label>
          <input class="form-control" type="" value="<?php echo $empresa;?>" name="emp">
        </div>

        <div class="form-group col-md-3"> 
          <label>Lugar de trabajo</label>
          <input class="form-control" type="" value="<?php echo $lug_trab;?>" name="ldt">
        </div>

        <div class="form-group col-md-4">
          <label>Teléfono de la empresa</label>
          <input class="form-control" type=""  maxlength="11" value="<?php echo $telf_emp;?>" name="n_emp">
        </div>
            

        <div class="form-group col-md-4">
          <label>Teléfono de habitación</label>
          <input class="form-control" type=""  maxlength="11" value="<?php echo $telf_hab;?>" name="n_hab">
        </div>

        <div class="form-group col-md-4">
          <label>Teléfono celular</label>
          <input class="form-control" type=""  maxlength="11" value="<?php echo $telf_cel;?>" name="n_cel">
        </div>

        <div class="form-group col-md-6"> 
          <label>Dirección </label>
          <input class="form-control" type="" value="<?php echo $direccion; ?>" name="dir" >
        </div>
        
        <div class="form-group col-md-6"> 
          <label>Correo</label>
          <input class="form-control" type="email" value="<?php echo $correo; ?>" name="correo">
        </div>

        <div class='form-group col-md-3'> 
          <label for=genero>¿Es el padre?</label><br>                
          <label><input type=radio name="pad" value="Si" <?php if ($parentesco_id=="17") {echo "checked";} ?> > Si </label>
              
          <label><input type=radio name="pad" value="No" <?php if ($parentesco_id=="18" or $parentesco_id=="16") {echo "checked";} ?> > No </label>
        </div>
        
        <div class='form-group col-md-3'> 
          <label for=genero>¿Es la madre?</label><br>                
          <label><input type=radio name="mad" value="Si" <?php if ($parentesco_id=="16") {echo "checked";} ?> > Si </label>
              
          <label><input type=radio name="mad" value="No" <?php if ($parentesco_id=="18" or $parentesco_id=="17") {echo "checked";} ?> > No </label>
        </div>

        <div class='form-group col-md-3'> 
          <label for=genero>¿Es el representante legal?</label><br>                
          <label><input type=radio name="leg" value="Si" <?php if ($legal=="Si") {echo "checked";} ?> > Si </label>
              
          <label><input type=radio name="leg" value="No" <?php if ($legal=="No") {echo "checked";} ?> > No </label>
        </div>

        <button class="btn btn-block btn-info" name="dat_tut" value="1">Actualizar datos</button>
      </div>
    </form>
     
<?php  

if (isset($_POST['dat_tut'])) {
 extract($_POST);
 print_r($_POST);
  
  $ql="UPDATE `personas` SET `ci`='$cedula',`nac_id`='$nac',`fec_nac`='$fec_na',`pri_nom`='$prinom',`seg_nom`='$segnom',`pri_ape`='$priape',`seg_ape`='$segape',`pais_id`='$pais' WHERE ci='$ci'";
  $ejc=mysqli_query($conexion,$ql);

  $ql="UPDATE `direcciones` SET `direccion`='$dir',`parroquia_id`='$ComboMun' WHERE persona_id='$persona_id'";
  $ejc=mysqli_query($conexion,$ql);

if ($pad=="Si" && $mad=="No") {$parentesco=16;}
if ($pad=="No" && $mad=="Si") {$parentesco=17;}
if ($pad=="No" && $mad=="No") {$parentesco=18;}

  $ql="UPDATE `representantes` SET `edocivil_id`='$edoc',`lug_nac`='$ln',`profesion`='$puo',`empresa`='$emp',`lug_trab`='$ldt',`telf_emp`='$n_emp',`telf_cel`='$n_cel',`telf_hab`='$n_hab',`correo`='$correo',`parentesco_id`='$parentesco',`legal`='$leg' WHERE persona_id='$persona_id'";
  $ejc=mysqli_query($conexion,$ql);  
  
  if ($ejec) {
      echo "<script>alert('Registro del representante actualizado')</script> 
      <script>window.open('listado.php','_self')</script>";
  }

}

?>
<br>
<br>
<br>