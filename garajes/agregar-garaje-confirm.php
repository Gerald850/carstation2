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
$hi=$_POST["hi"];
$hf=$_POST["hf"];

$sql = "INSERT INTO garaje VALUES(null,'$id','$d','$z','$la','$lo','$p','$hi','$hf',1)";
$conexionBD->conexion->query($sql);

$id_garaje = $conexionBD->conexion->insert_id;

for ($i = 1; $i <= $p; $i++) {
    $sql = "INSERT INTO plaza VALUES(null,'$id_garaje','$i',1)";
    $conexionBD->conexion->query($sql);
}

echo '<p>ESTACIONAMIENTO AGREGADO correctamente !.</p>';
?>