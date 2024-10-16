<?php
session_start();
$id=$_SESSION['id_user'];

require_once '../conexionBD.php';
$conexionBD = new ConexionBD();
$conexionBD->conectar(); 

$f=$_POST["f"];
$e=$_POST["e"];
$hi=$_POST["hi"];
$hf=$_POST["hf"];
$s=$_POST["s"];
$p=strtoupper($_POST["p"]);
$m=$_POST["m"];
$c=$_POST["c"];

$caracteres_permitidos = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$res="";
$k = false;
do{
    $res= substr(str_shuffle($caracteres_permitidos), 0, 10);
    $sql = "SELECT reserva_cod FROM reserva WHERE BINARY reserva_cod='$res';";
    $resultado = $conexionBD->conexion->query($sql);
    if($resultado->num_rows>0){
    }else{
            $k = true;
    }
}while($k==false);

$NuevoCodigo = $res;

$sql = "INSERT INTO reserva VALUES(null,'$id','$e','$s','$NuevoCodigo','$f','$hi','$hf','$p','$m','$c',1,null)";
$conexionBD->conexion->query($sql);

echo '<p class="m-2">RESERVA AGREGADA correctamente !.</p>';
?>