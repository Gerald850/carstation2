<?php
session_start();
$id=$_SESSION['id_user'];

require_once '../conexionBD.php';
$conexionBD = new ConexionBD();
$conexionBD->conectar(); 

$d=$_POST["d"];
$z=$_POST["z"];
$la=$_POST["la"];
$lo=$_POST["lo"];
$p=$_POST["p"];

$sql = "INSERT INTO garaje VALUES(null,'$id','$d','$z','$la','$lo','$p',2)";
$conexionBD->conexion->query($sql);

echo '<p>ESTACIONAMINETO AGREGADO correctamente !.</p>';
?>