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
          <input class="form-control" min="0" type="number" required name="ci" placeholder="Cédula" value="<?php echo $ci; ?>">
        </div>

        <div class="form-group col-md-3"> 
          <label>Nacionalidad *</label>
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
          <label for="edad">Fecha de nacimiento *</label>
          <input class="form-control" type="date" name="fec_na" min="1938-01-01" required>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Primer nombre *</label>
            <input class="form-control" type="text" name="prinom" required>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Segundo nombre</label>
            <input class="form-control" type="text" name="segnom" >
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Primero apellido *</label>
            <input class="form-control" type="text" name="priape" required>
        </div>

        <div class="form-group col-md-3">
            <label for="nomap">Segundo apellido</label>
            <input class="form-control" type="text" name="segape" >
        </div>

            <div class="form-group col-md-3"> 
              <label for="pais_n">País de nacimiento *</label>
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
          <label for="estado">Estado *</label>
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
          <label for="municipio">Municipio *</label>
          <select class="form-control" name="ComboMun" id="ComboMun" required></select>
        </div>

        <div class="form-group col-md-3"> 
          <label>Estado civil *</label>
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
          <input class="form-control" type=""  maxlength="11" placeholder="Numero" name="n_emp">
        </div>
            

        <div class="form-group col-md-4">
          <label>Teléfono de habitación</label>
          <input class="form-control" type=""  maxlength="11" placeholder="Numero" name="n_hab">
        </div>

        <div class="form-group col-md-4">
          <label>Teléfono celular</label>
          <input class="form-control" type=""  maxlength="11" placeholder="Numero" name="n_cel">
        </div>

        <div class="form-group col-md-6"> 
          <label>Dirección *</label>
          <input class="form-control" type="" placeholder="Dirección" name="dir" required>
        </div>
        
        <div class="form-group col-md-6"> 
          <label>Correo</label>
          <input class="form-control" type="email" placeholder="Correo" name="correo">
        </div>

        <div class='form-group col-md-4'> 
          <label for=genero>¿Es el padre?</label><br>                
          <label><input type=radio name="padre" value="Si" required> Si </label>
              
          <label><input type=radio name="padre" value="No" required> No </label>
        </div>
        
        <div class='form-group col-md-4'> 
          <label for=genero>¿Es la madre?</label><br>                
          <label><input type=radio name="madre" value="Si" required> Si </label>
              
          <label><input type=radio name="madre" value="No" required> No </label>
        </div>

        <div class='form-group col-md-4'> 
          <label for=genero>¿Es el representante legal?</label><br>                
          <label><input type=radio name="legal" value="Si" required> Si </label>
              
          <label><input type=radio name="legal" value="No" required> No </label>
        </div>

        <button class="btn btn-block btn-info" name="dat_tut" value="1">Cargar datos</button>
      </div>
    </form>
     
<?php  

if (isset($_POST['dat_tut'])) {


}

?>