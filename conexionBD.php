<?php

class ConexionBD {
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $baseDeDatos = "carstation";
    public $conexion;

    public function conectar() {
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->baseDeDatos);

    
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
       
    }
    public function cerrarConexion() {
        if ($this->conexion) {
            $this->conexion->close();
        }
    }
}

$conexionBD = new ConexionBD();
$conexionBD->conectar();

$conexionBD->cerrarConexion();

?>
