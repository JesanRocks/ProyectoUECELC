<?php include 'includes/header.php'; include 'includes/nav.php';?>  

  <section class="container">
    <br><br>
    <?php
  //Cantidad por paginas
    $MostrarPag=5;

    if (isset($_GET['pagina'])) {
      $pagina=$_GET['pagina'];
    }else{
      $pagina=1;
    }

    //La pag inicia en 0 y se multiplica por $MostrarPag
    $empieza=($pagina-1)*$MostrarPag;

    //Seleccionar todo de la tabla usuario y personas con LIMIT
    $SQL="SELECT * FROM usuarios INNER JOIN eav ON usuarios.nivel_id=eav.id INNER JOIN personas ON usuarios.persona_id=personas.id LIMIT $empieza,$MostrarPag";
    $Ejec=mysqli_query($conexion,$SQL);
    ?>

    <table class="table table-sm table-hover bg-light text-center">
      <tr class="table-active">
        <th>ID</th>
        <th>Nombres y apellidos</th>
        <th>Usuario</th>
        <th>Nivel</th>
        <th>Opciones</th>
      </tr>
      <?php 
      $ii=0;

      while ($fila=mysqli_fetch_assoc($Ejec)) {
        extract($fila); 
        $ii++;
      ?>
      <tr>
        <td><?php echo "$ii"; ?></td>
        <td><?php echo "$pri_nom $seg_nom $pri_ape $seg_ape"; ?></td>
        <td><?php echo "$usuario"; ?></td>
        <td><?php echo "$dsc"; ?></td>
        <td>
          <a class="btn btn-sm btn-info" href="lis-personal.php?editar=<?php echo "$id"; ?>" name="editar" value="1"><i class="fas fa-edit"></i> Editar</a>

          <a class="btn btn-sm btn-danger" href="lis-personal.php?borrar=<?php echo "$id"; ?>" name="borrar"><i class="fas fa-trash-alt"></i> Borrar</a>
        </td>
      </tr>
    <?php } ?>
    </table>

<?php if (isset($_GET['editar'])) {include 'includes/form/edit-user.php';}

  if (isset($_GET['borrar'])) {
    $borrar_id=$_GET['borrar'];
    $SQL="DELETE FROM usuarios WHERE persona_id='$borrar_id'"; $ejec=mysqli_query($conexion,$SQL);
      
    if ($ejec) {
      echo "<script>alert('Usuario eliminado')</script>";
      echo "<script>window.open('lis-personal.php','_self')</script>";
    }
  }
  
  ?>
    
    <div class="d-flex justify-content-center">
    <?php 
    //Seleccionar todo de la tabla usuarios y personas
    $SQL="SELECT * FROM usuarios INNER JOIN personas ON usuarios.persona_id=personas.id INNER JOIN eav ON usuarios.nivel_id=eav.id";
    $Ejec=mysqli_query($conexion,$SQL);
    //Contar el total de registros
    $TotalRegistros=mysqli_num_rows($Ejec);
    //Usar ceil para dividir el total de registros entre $MostrarPag
    $TotalPag=ceil($TotalRegistros/$MostrarPag);
    
  /*Link a primera pagina
  echo 
  "<nav aria-label=Page navigation example class=text-center>
    <ul class=pagination d-flex justify-content-center>
      <li class=page-item active><a class=page-link href=listado.php?pagina=1>"."&laquo;"."</a></li>";
         
  for ($i=1; $i <=$TotalPag ; $i++) { 
    echo "<li class=page-item active><a class=page-link href=listado.php?pagina=".$i."> ".$i." </a></li>";
  }
  //Link a primera pagina    
  echo "
      <li class=page-item><a class=page-link href=listado.php?pagina=".$TotalPag.">"." &raquo; "."</a></li>
    </ul>
  </nav>";*/
  ?> 

  <nav aria-label=Page navigation example class=text-center>
    <ul class=pagination d-flex justify-content-center>
      <li class="page-item"><a class="page-link" href="listado.php?pagina=<?php echo $pagina-1; ?>">&laquo;</a></li>
      
      <?php for ($i=1; $i <=$TotalPag ; $i++) { ?>
      <li class="page-item"><a class="page-link" href="listado.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php } ?>

      <li class="page-item"><a class="page-link" href="listado.php?pagina=<?php echo $pagina+1; ?>">&raquo;</a></li>
    </ul>
  </nav>




    </div>
  </section>

<?php include 'includes/footer.php'; ?> 