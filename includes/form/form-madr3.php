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
          <label for="cedula">C.I. <span class="req">(*)</span></label>
          <input class="form-control" min="0" type="number" required name="ci" placeholder="Cédula" value="<?php echo $cedula; ?>">
        </div>

        <div class="form-group col-md-3"> 
          <label>Nacionalidad <span class="req">(*)</span></label>
              <select class="form-control" name="nac" id="nac" required>
          <option value="">Seleccionar</option>
            <?php
               $Nacionalidad="SELECT * FROM `eav` WHERE tipo_id=3";
               $NC=mysqli_query($conexion,$Nacionalidad);
              while ($filan=mysqli_fetch_assoc($NC)) {
            ?>
              <option value="<?php echo $filan['id']; ?>"> <?php echo $filan['dsc']; ?></option>
            <?php
              }
            ?>
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="edad">Fecha de nacimiento <span class="req">(*)</span></label>
          <input class="form-control" type="date" name="fec_na" min="1938-01-01" max="<?php echo date('Y-m-d');?>" required>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Primer nombre <span class="req">(*)</span></label>
            <input class="form-control" type="text" name="prinom" required>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Segundo nombre</label>
            <input class="form-control" type="text" name="segnom" >
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Primero apellido<span class="req">(*)</span></label>
            <input class="form-control" type="text" name="priape" required>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Segundo apellido</label>
            <input class="form-control" type="text" name="segape" >
        </div>

            <div class="form-group col-md-3"> 
              <label for="pais_n">País de nacimiento <span class="req">(*)</span></label>
              <select class="form-control" name="pais" id="pais" required>
                <option value="">Seleccionar</option>
                <?php
                 $sql="SELECT * FROM paises ORDER BY dsc ASC";
                 $ejc=mysqli_query($conexion,$sql);
                  while ($filaP1=mysqli_fetch_assoc($ejc)) {
                ?>
                  <option value="<?php echo $filaP1['id']; ?>"> <?php echo $filaP1['dsc']; ?></option>
                <?php
                  }
                ?>
              </select>
            </div>

        <div class="form-group col-md-3"> 
          <label for="pais_n">Lugar de nacimiento</label>
          <input class="form-control" type="text"  name="lugN" placeholder="Lugar de nacimiento">
        </div>

        <div class="form-group col-md-3">
          <label for="estado">Estado <span class="req">(*)</span></label>
          <select class="form-control" name="ComboEdo" id="ComboEdo" required>
            <option value="">Seleccionar</option>
            <?php
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

        <div class='form-group col-md-3'> 
          <label for="municipio">Municipio <span class="req">(*)</span></label>
          <select class="form-control" name="ComboMun" id="ComboMun" required></select>
        </div>

        <div class="form-group col-md-3"> 
          <label>Estado civil <span class="req">(*)</span></label>
              <select class="form-control" name="edoc" id="edoc" required>
          <option value="">Seleccionar</option>
            <?php
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
          <input class="form-control" type="" placeholder="Profesion u oficio" name="puo">
        </div>

        <div class="form-group col-md-3"> 
          <label>Empresa</label>
          <input class="form-control" type="" placeholder="Empresa" name="emp">
        </div>

        <div class="form-group col-md-3"> 
          <label>Lugar de trabajo</label>
          <input class="form-control" type="" placeholder="Lugar de trabajo" name="ldt">
        </div>

        <div class="form-group col-md-4">
          <label>Teléfono de la empresa</label>
          <input class="form-control" type="number" min="0" maxlength="11" placeholder="Numero" name="n_emp">
        </div>
            

        <div class="form-group col-md-4">
          <label>Teléfono de habitación</label>
          <input class="form-control" type="number" min="0" maxlength="11" placeholder="Numero" name="n_hab">
        </div>

        <div class="form-group col-md-4">
          <label>Teléfono celular</label>
          <input class="form-control" type="number" min="0" maxlength="11" placeholder="Numero" name="n_cel">
        </div>

        <div class="form-group col-md-6"> 
          <label>Dirección <span class="req">(*)</span></label>
          <input class="form-control" type="" placeholder="Dirección" name="dir" required>
        </div>
        
        <div class="form-group col-md-6"> 
          <label>Correo</label>
          <input class="form-control" type="email" placeholder="Correo" name="correo">
        </div>

        <div class='form-group col-md-4'> 
          <label for=genero>¿Es el padre?</label><br>                
          <label><input type=radio name="padre" value="Si" disabled> Si </label>
              
          <label><input type=radio name="padre" value="No" checked> No </label>
        </div>
        
        <div class='form-group col-md-4'> 
          <label for=genero>¿Es la madre?</label><br>                
          <label><input type=radio name="madre" value="Si" checked> Si </label>
              
          <label><input type=radio name="madre" value="No" disabled> No </label>
        </div>

        <div class='form-group col-md-4'> 
          <label for=genero>¿Es el representante legal?</label><br>                
          <label><input type=radio name="legal" value="Si" disabled> Si </label>
              
          <label><input type=radio name="legal" value="No" checked> No </label>
        </div>

        <button class="btn btn-block btn-info" name="dat_tut" value="1">Cargar datos</button>
      </div>
    </form>

     
<?php  

if (isset($_POST['dat_tut'])) {
 extract($_POST);
 $dependencia=$_SESSION['rep'];

 $SQL="INSERT INTO `personas`(`ci`, `nac_id`, `fec_nac`, `pri_nom`, `seg_nom`, `pri_ape`, `seg_ape`, `pais_id`) VALUES ('$ci','$nac','$fec_na','$prinom','$segnom','$priape','$segape','$pais')";
 $Ejec=mysqli_query($conexion,$SQL);

$SQL="SELECT `id` FROM `personas` WHERE `ci`=$ci";
$Ejec=mysqli_query($conexion,$SQL);
while ($personas=mysqli_fetch_array($Ejec)) {$id=$personas['id'];}


$SQL="INSERT INTO `direcciones`(`direccion`, `parroquia_id`, `persona_id`) VALUES ('$dir','$ComboMun','$id')";
$Ejec=mysqli_query($conexion,$SQL);



if ($padre=="Si" && $madre=="No") {$parentesco=16;}
if ($padre=="No" && $madre=="Si") {$parentesco=17;}
if ($padre=="No" && $madre=="No") {$parentesco=18;}

$SQL="INSERT INTO `representantes`(`edocivil_id`, `lug_nac`, `profesion`, `empresa`, `lug_trab`, `telf_emp`, `telf_cel`, `telf_hab`, `correo`, `parentesco_id`, `legal`, `persona_id`,`dependencia_id`) VALUES ('$edoc','$lugN','$puo','$emp','$ldt','$n_emp','$n_cel','$n_hab','$correo','$parentesco','$legal','$id','$dependencia')";
 $Ejec=mysqli_query($conexion,$SQL);


  if ($padre=="No" && $madre=="Si" && $legal=="No") {
   echo "<br> <a class='btn btn-info btn-block' href='padre.php'>Registrar datos del padre</a>"; 
  }

}
?>

<br>
<br>
<br>
