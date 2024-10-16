<?PHP
require_once '../conexionBD.php';
$conexionBD = new ConexionBD();
$conexionBD->conectar();

$f = $_POST["f"];
$e = $_POST["e"];
$hi = $_POST["hi"];
$hf = $_POST["hf"];

?>
<option value="" selected>[SELECCIONE UN ESPACIO]</option>
<?php
$sqlinsert = "SELECT id_plaza i, numero n FROM plaza WHERE id_garaje='$e' AND estado='activo' AND id_plaza NOT IN (SELECT id_plaza FROM reserva WHERE id_garaje='$e' AND fecha='$f')";

if ($result = $conexionBD->conexion->query($sqlinsert)) {
  while ($row = $result->fetch_assoc()) {
  ?>
    <option value="<?= $row["i"];?>">espacio <?= $row["n"];?></option>
<?php
    }
    $result->free();
}
?>