<?php 
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>
<section class="container">

  <div class="m-5">
    <form action="" method="get">
      <div class="form-row">      
        <div class="form-group col-md-6 offset-md-3"> 
          <label>Ingrese la cédula de la madre</label>
          <input class="form-control" type="number" name="cedula" placeholder="Cédula" required>
        </div>
         
        <div class="form-group col-md-6 offset-md-3">      
          <button class="btn btn-primary btn-block" name="buscar" value="1">Buscar</button>
        </div>
     
      </div>
    </form>
  </div>
<?php 

if (isset($_GET['buscar'])) {
 $cedula=$_GET['cedula'];
 $sql="SELECT * FROM personas 
 INNER JOIN direcciones ON personas.id=direcciones.persona_id
 INNER JOIN municipios ON municipios.id=direcciones.parroquia_id 
 INNER JOIN estados ON estados.id=municipios.estado_id  
 INNER JOIN representantes ON personas.id=representantes.persona_id 
 WHERE ci=$cedula"; 
 $ejc=mysqli_query($conexion,$sql);
 while ($row=mysqli_fetch_array($ejc)) {extract($row);}

 if (isset($ci)) {
   $sql="SELECT id FROM personas WHERE ci=$ci";
   $ejc=mysqli_query($conexion,$sql);
   while ($row=mysqli_fetch_array($ejc)) { $_SESSION['dep']=$row['id'];}
   require_once 'includes/form/edit-reg.php';
 }else{
   require_once 'includes/form/form-madre.php';
 }
 
} 
?>


</section>
<?php require_once 'includes/footer.php'; ?> 