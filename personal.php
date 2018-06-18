<?php include 'includes/header.php'; ?>
    <section class="container-fluid row text-justify"> 
     
<?php include 'includes/menu.php'; ?>

<div class="col-md-9">
	<?php include 'includes/personal/crear_usuario.html';?>
</div>
    
<?php 

if (isset($_POST['crear_user'])) {

$User=$_POST['usuario']; $Con=$_POST['contraseña'];
$Nomap=$_POST['nomap']; $Ced=$_POST['cedula'];
$fing=$_POST['f_ingreso']; $desemp=$_POST['desempeño'];
$conlab=$_POST['cond_laboral']; $horas=$_POST['horas']; 

$SQL="INSERT INTO `Usuario`(`id_users`, `nom_u`, `pass`, `nom_ap`, `cedula`, `f_ingreso`, `desemp`, `cond_lab`, `horas`) VALUES (NULL,'$User','$Con','$Nomap','$Ced','$fing','$desemp','$conlab','$horas')";

$UserSQL=mysqli_query($conexion,$SQL);
}

?>   
    </section>
    <br>
<?php include 'includes/footer.php'; ?>