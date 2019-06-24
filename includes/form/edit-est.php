<?php
  $SQL="SELECT * FROM estudiantes INNER JOIN personas ON estudiantes.persona_id=personas.id WHERE persona_id=$editar_id";
  $Ejec=mysqli_query($conexion,$SQL);
  while ($fila=mysqli_fetch_array($Ejec)) {extract($fila);}
  
  $SQL="SELECT * FROM direcciones INNER JOIN municipios ON direcciones.parroquia_id=municipios.id WHERE persona_id=$editar_id";
  $Ejec=mysqli_query($conexion,$SQL);
  while ($fila=mysqli_fetch_array($Ejec)) {extract($fila);}
  
  $sql="SELECT id,dsc FROM vivienda WHERE persona_id=$persona_id"; $ejec=mysqli_query($conexion,$sql);
  $i=1;
  while ($b=mysqli_fetch_array($ejec)) { $di[]=$b['id']; $viv[]=$b['dsc'];   $i++;}

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
    <form class="form" action="" method="post">
       <div class="form-row">

        <div class="form-group col-md-6"> 
          <label for="cedula">C.I. *</label>
          <input class="form-control" type="number"  name="cedula" placeholder="Cédula" value="<?php echo $ci; ?>">
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
          <input class="form-control" type="date" name="fec_na" min="1938-01-01" value="<?php echo $fec_nac; ?>">
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

      <div class='form-group col-md-2'> 
        <label for=lateralidad>Lateralidad</label><br>
            
        <label><input type=radio name=lateralidad value=21  <?php if ($lateralidad_id==21) {
          echo "checked";}?> > Izquierdo</label><br>
                
        <label><input type=radio name=lateralidad value=22  <?php if ($lateralidad_id==22) {
          echo "checked";}?> > Derecho</label><br>
                
        <label><input type=radio name=lateralidad value=23  <?php if ($lateralidad_id==23) {
          echo "checked";}?> > Ambas</label><br>
      </div>

      <div class='form-group col-md-1'> 
        <label for=genero>Genero</label><br>
              
        <label><input type=radio name=sex value=7 <?php if ($sexo_id==7) {
          echo "checked";}?> >M</label><br>
              
        <label><input type=radio name=sex value=8 <?php if ($sexo_id==8) {
          echo "checked";}?> >F</label><br>
      </div>

            <div class="form-group col-md-1"> 
              <label for="peso">Peso</label>
              <input class="form-control" type="" name="peso" value='<?php echo $peso; ?>'>
            </div>

            <div class="form-group col-md-2"> 
              <label for="estatura">Estatura</label>
              <input class="form-control" type="" name="estatura" value='<?php echo $estatura; ?>'>
            </div>

            <div class="form-group col-md-2"> 
              <label for="TallaC">Talla camisa</label>
              <input class="form-control" type="text" name="TallaC" value='<?php echo $tall_cam; ?>'>
            </div>

            <div class="form-group col-md-2"> 
              <label for="TallaP">Talla pantalón</label>
              <input class="form-control" type="number" name="TallaP" value='<?php echo $tall_pan; ?>'>
            </div>

            <div class="form-group col-md-2"> 
              <label for="TallaZ">Talla zapatos</label>
              <input class="form-control" type="number" name="TallaZ" value='<?php echo $tall_zap; ?>'>
            </div>

            <div class="form-group col-md-12"> 
              <label for="vivienda">Vivienda</label>
            </div>

      <div class='form-group col-md-3'>
        <label>Tipo de vivienda </label>
        <select class='form-control' name="tv">
        <?php  
          $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=".$viv[0]." "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>* $des</option>";
          }
          $sql="SELECT * FROM `eav` WHERE `tipo_id`=26 "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>$des</option>";
          }
        ?>
        </select>
      </div>
      
      <div class='form-group col-md-3'>
        <label>Condicion de vivienda</label>
        <select class='form-control' name="cv">
        <?php  
          $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=".$viv[1]." "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>*$des</option>";
          }
          $sql="SELECT * FROM `eav` WHERE `tipo_id`=34 "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>$des</option>";
          }
        ?>
        </select>
      </div>
      
      <div class='form-group col-md-3'>
        <label>Infraestructura</label>
        <select class='form-control' name="tipo_techo">
        <?php  
          $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=".$viv[2]." "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>*$des</option>";
          }

          $sql="SELECT * FROM `eav` WHERE `tipo_id`=40 "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>$des</option>";
          }
        ?>
        </select>
      </div>
      
      <div class='form-group col-md-3'>
        <label class="fade">Condicion de vivienda</label>
        <select class='form-control' name="tipo_pared">
        <?php  
          $sql="SELECT `id`,`dsc` FROM `eav` WHERE `id`=".$viv[3]." "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>*$des</option>";
          }
          $sql="SELECT * FROM `eav` WHERE `tipo_id`=49 "; 
          $ejec=mysqli_query($conexion,$sql);
          while ($filaEAV=mysqli_fetch_assoc($ejec)) {
            $op=$filaEAV['id']; $des=$filaEAV['dsc'];
            echo "<option value='$op'>$des</option>";
          }
        ?>
        </select>
      </div>


            <div class="form-group col-md-6"> 
              <label>Telefono </label>
              <input class="form-control" type="" placeholder="Numero" maxlength="11" name="num">
            </div>

            <div class="form-group col-md-6"> 
              <label>Dirección *</label>
              <input class="form-control" type="" value="<?php echo $direccion; ?>" name="dir">
            </div>

            <button class="btn btn-block btn-info" name="dat_est" value="1">Cargar datos</button>
      </div>
    </form>

<?php 

if (isset($_POST['dat_est'])) {
  extract($_POST);

  $SQL="UPDATE `personas` SET `ci`='$cedula',`nac_id`='$nac',`fec_nac`='$fec_na',`pri_nom`='$prinom',`seg_nom`='$segnom',`pri_ape`='$priape',`seg_ape`='$segape',`pais_id`='$pais' WHERE ci='$ci'";
  $Ejec=mysqli_query($conexion,$SQL);
  
  $SQL="UPDATE `estudiantes` SET `lateralidad_id`='$lateralidad',`sexo_id`='$sex',`peso`='$peso',`estatura`='$estatura',`tall_cam`='$TallaC',`tall_pan`='$TallaP',`tall_zap`='$TallaZ',`telefono`='$num' WHERE `persona_id`='$persona_id'";

  $Ejec=mysqli_query($conexion,$SQL);

  $sql="UPDATE `vivienda` SET `dsc`='$tv' WHERE id=$di[0]";
  $Ejec=mysqli_query($conexion,$sql);
 
  $sql="UPDATE `vivienda` SET `dsc`='$cv' WHERE id=$di[1]";
  $Ejec=mysqli_query($conexion,$sql);

  $sql="UPDATE `vivienda` SET `dsc`='$tipo_techo' WHERE id=$di[2]";
  $Ejec=mysqli_query($conexion,$sql);

  $sql="UPDATE `vivienda` SET `dsc`='$tipo_pared' WHERE id=$di[3]";
  $Ejec=mysqli_query($conexion,$sql);

 $ql="UPDATE `direcciones` SET `direccion`='$dir',`parroquia_id`='$ComboMun' WHERE persona_id='$persona_id'";
  $ejc=mysqli_query($conexion,$ql);

    if ($Ejec) {
    echo "<script>alert('Registro del estudiante actualizado')</script>";
    echo "<script>window.open('listados_estudiantes.php','_self')</script>";
  }
}
?>
<br>
<br>
<br>    