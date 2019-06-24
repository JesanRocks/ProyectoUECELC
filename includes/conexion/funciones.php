<?php 
function alerta($_msj){
?>
<div class='alert alert-info'>
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
	</button> 
	<?= $_msj ?>
</div>
<?php 
}

function vp(){ echo "<pre>";print_r($_POST); echo "</pre>"; }
function vg(){ echo "<pre>";print_r($_GET); echo "</pre>"; }
function vf(){ echo "<pre>";print_r($_FILES); echo "</pre>"; }
function vr(){ echo "<pre>";print_r($_REQUEST); echo "</pre>"; }
function vc(){ echo "<pre>";print_r($_COOKIE); echo "</pre>"; }
function vs(){ echo "<pre>";print_r($_SESSION); echo "</pre>"; }
function br($_var){ for ($_x=1 ; $_x <= $_var ; $_x++) { echo "<br>";} }

class server
{

    private static $db_host = 'localhost';
    private static $db_user = '';
    private static $db_pass = '';
    private $db_name        = '';
    private $conexion;
    private $resultado;

    public function __construct()
    {
        $this->conectar();
    }

    protected function conectar()
    {

        $this->conexion = mysqli_connect(
            self::$db_host,
            self::$db_user,
            self::$db_pass,
            $this->db_name);

        if (!$this->conexion) {
            mysqli_error($this->conexion);
        } else {
            return true;
        }
    }

    protected function query($sql)
    {
        $this->resultado = mysqli_query($this->conexion, $sql);
        if (!$this->resultado) {
            die('error: query ' . mysql_error());
        }

    }

    protected function extraerRegistro()
    {
        $fila = mysqli_fetch_assoc($this->resultado);
        return $fila;
    }

    public function affected()
    {

        $num = mysqli_affected_rows($this->conexion);
        if ($num) {
            return true;
        } else {
            return false;
        }

    }

}

// // se asume conexión en $mysqli

// // creamos una bandera
// $result_transaccion = true;

// // iniciamos transacción 
// $mysqli->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);

// // realizamos las querys
// if( !$mysqli->query("INSERT INTO Language VALUES ('DEU', 'Bavarian', 'F', 11.2)") ) {
//     // registramos el fallo
//     $result_transaccion = false;
// }

// if ( !$mysqli->query("INSERT INTO Language VALUES ('DEU', 'Swabian', 'F', 9.4)") ) {
//     // registramos el fallo
//     $result_transaccion = false;
// }

// if($result_transaccion) {
//     // consignamos
//     $mysqli->commit();
// } else {
//     // revertimos
//     $mysqli->rollback();
// }

// $mysqli->close();


// mysqli::begin_transaction, inicia una transacción.
// mysqli::commit, consigna una transacción.
// mysqli::rollback, revierte una transacción.
