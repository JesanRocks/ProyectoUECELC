<?php
    require_once 'includes/header.php';
    require_once 'includes/nav.php';
 
    function masculino()
    {
        $conexion = mysqli_connect( '127.0.0.1','root','') or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "Upps! No se encontro la Base de datos" );
        $sql="SELECT `persona_id` FROM `estudiantes` WHERE `sexo_id` = 7";
        $ejc=mysqli_query($conexion,$sql);
        $masculino = 0;
        while ($row=mysqli_fetch_array($ejc)) { $masculino++;}
        echo $totalM = $masculino;
    }

    function femenino()
    {
        $conexion = mysqli_connect( '127.0.0.1','root','') or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "Upps! No se encontro la Base de datos" );
        $sql="SELECT `persona_id` FROM `estudiantes` WHERE `sexo_id` = 8";
        $ejc=mysqli_query($conexion,$sql);
        $femenino = 0;
        while ($row=mysqli_fetch_array($ejc)) { $femenino++;}
        echo $totalF = $femenino;
    }

    function madre()
    {
        $conexion = mysqli_connect( '127.0.0.1','root','') or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "Upps! No se encontro la Base de datos" );
        $sql = "SELECT * FROM `representantes` WHERE `parentesco_id` = 16 AND `legal`='Si'";
        $ejc=mysqli_query($conexion,$sql);
        $madre = 0;
        while ($row=mysqli_fetch_array($ejc)) { $madre++;}
        echo $madreT = $madre;
    }
    
    function padre()
    {
        $conexion = mysqli_connect( '127.0.0.1','root','') or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "Upps! No se encontro la Base de datos" );
        $sql = "SELECT * FROM `representantes` WHERE `parentesco_id` = 17 AND `legal`='Si'";
        $ejc=mysqli_query($conexion,$sql);
        $padre = 0;
        while ($row=mysqli_fetch_array($ejc)) { $padre++;}
        echo $padreT = $padre;
    }

    function representante()
    {
        $conexion = mysqli_connect( '127.0.0.1','root','') or die ("No se ha podido conectar al servidor de Base de datos");
        $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "Upps! No se encontro la Base de datos" );
        $sql = "SELECT * FROM `representantes` WHERE `parentesco_id` = 18 AND `legal`='Si'";
        $ejc=mysqli_query($conexion,$sql);
        $representante = 0;
        while ($row=mysqli_fetch_array($ejc)) { $representante++;}
        echo $representanteT = $representante;
    }

    /*
        $conexion = mysqli_connect( '127.0.0.1','root','');
        $db = mysqli_select_db( $conexion, 'zordon' ) or die ( "No se encontro la Base de datos" );

        $query = "SELECT fec_nac FROM personas INNER JOIN estudiantes ON personas.id=estudiantes.persona_id INNER JOIN inscripciones ON estudiantes.id=inscripciones.estudiante_id";
        $run = mysqli_query($conexion,$query);
        $max = 0;
        while ($row=mysqli_fetch_array($run)) 
        { 
            extract($row);
            echo $fec_nac."<br>";

            function calcularEdad($fecha)
            {
                list($anyo,$mes,$dia) = explode("-",$fecha);
                $anyo_dif   = date("Y") - $anyo;
                $mes_dif    = date("m") - $mes;
                $dia_dif    = date("d") - $dia;
                if ($dia_dif < 0 || $mes_dif < 0) $anyo_dif--;
                return $anyo_dif;
            }
            
            $Edad = calcularEdad($fec_nac);
            echo $Edad."<br>";

            //echo "Edad 0: ".$Edad[0]." Edad 1: ".$Edad[5]; 

        //echo "El valor min:".$min."El valor max:".$max;
    */    
?>	
<section class="container mb-5 mx-auto p-0">
    <div class="row">
        <div class="col-sm-12 my-5 d-flex justify-content-center">
            <a href="includes/documentos/reporte.php" class="btn btn-info m-1 p-2">Reporte general</a>

            <div class="dropdown">
              <a class="btn btn-info m-1 p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reportes 1er Año
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año.php">Reporte general</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=A">Sección "A"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=B">Sección "B"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=C">Sección "C"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=D">Sección "D"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=E">Sección "E"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=F">Sección "F"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_1er_año_seccion.php?seccion=G">Sección "G"</a>
              </div>
            </div>

            <div class="dropdown">
              <a class="btn btn-info m-1 p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reporte 2do Año
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año.php">Reporte general</a>
                <a class="dropdown-item" href="#">Sección "A"</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=A">Sección "A"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=B">Sección "B"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=C">Sección "C"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=D">Sección "D"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=E">Sección "E"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=F">Sección "F"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_2do_año_seccion.php?seccion=G">Sección "G"</a>
              </div>            
            </div>

            <div class="dropdown">
              <a class="btn btn-info m-1 p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reporte 3er Año
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año.php">Reporte general</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=A">Sección "A"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=B">Sección "B"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=C">Sección "C"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=D">Sección "D"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=E">Sección "E"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=F">Sección "F"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_3er_año_seccion.php?seccion=G">Sección "G"</a>
              </div>
            </div>

            <div class="dropdown">
              <a class="btn btn-info m-1 p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reporte 4to Año
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año.php">Reporte general</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=A">Sección "A"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=B">Sección "B"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=C">Sección "C"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=D">Sección "D"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=E">Sección "E"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=F">Sección "F"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_4to_año_seccion.php?seccion=G">Sección "G"</a>
              </div>
            </div>

            <div class="dropdown">
              <a class="btn btn-info m-1 p-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Reporte 5to Año
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año.php">Reporte general</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=A">Sección "A"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=B">Sección "B"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=C">Sección "C"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=D">Sección "D"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=E">Sección "E"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=F">Sección "F"</a>
                <a class="dropdown-item" href="includes/documentos/reporte_5to_año_seccion.php?seccion=G">Sección "G"</a>
              </div>
            </div>
            
        </div>
        <div class="col-xs-12 col-md-6 my-1">
            <div class="card">
                <div class="card-header">
                    Población estudiantil por sexo
                </div>
                <div class="card-body">
                    <canvas id="myChart" width="200" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 my-1">
            <div class="card">
                <div class="card-header">
                    Población de representantes
                </div>
                <div class="card-body">
                    <canvas id="representante" width="200" height="200"></canvas>
                </div>
            </div>
        </div>


<!--         <div class="col-xs-12 my-1 mx-auto mb-5">
            <div class="card">
                <div class="card-header">
                    Población estudiantil por rango de edad
                </div>
                <div class="card-body">
                    <canvas id="Edad" width="400" height="400"></canvas>
                </div>
            </div>
        </div> -->

    </div>

    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Masculino', 'Femenino'],
                datasets: [{
                    label: 'Total de estudiantes por Sexo',
                    data: [
                    '<?php masculino();?>',
                    '<?php femenino(); ?>'
                    ],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });

        var rep = document.getElementById('representante');
        var totalRepresentante = new Chart(rep, {
            type: 'doughnut',
            data: {
                labels: ['Madres', 'Padres','Representantes legal'],
                datasets: [{
                    label: 'Total de representantes',
                    data: [
                        '<?php madre();?>',
                        '<?php padre();?>',
                        '<?php representante();?>'
                    ],
                    backgroundColor: [
                        'rgba(255, 0, 255, 0.2)',
                        'rgba(0, 102, 204, 0.2)',
                        'rgba(0, 102, 0, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 0, 255, 1)',
                        'rgba(0, 102, 204, 1)',
                        'rgba(0, 153, 0, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });

        // var edad = document.getElementById('Edad');
        // var Edad = new Chart(edad, {
        //     type: 'bar',
        //     data: {
        //         labels: ['11','12','13'],
        //         datasets: [{
        //             label: 'Rango de edad de estudiantes',
        //             data: [21,12,13,15,16,17,18,19,10,25],
        //             backgroundColor: [
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)'
        //             ],
        //             borderColor: [
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)',
        //                 'rgba(54, 162, 235, 0.2)',
        //                 'rgba(255, 99, 132, 0.2)'
        //             ],
        //             borderWidth: 1
        //         }]
        //     }
        // });
        
</script>

</section>
<?php require_once 'includes/footer.php'; ?>
