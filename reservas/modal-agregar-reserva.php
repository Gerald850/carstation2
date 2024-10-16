<?php
session_start();
$id=$_SESSION['id_user'];

require_once '../conexionBD.php';
$conexionBD = new ConexionBD();
$conexionBD->conectar(); 
?>
<div class="container-fluid">
    
    <form onsubmit="return AgregarReservaConfirm();" class="row">
        <div class="form-group col-12 pt-2 pb-2">
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="f" id="f" required>
        </div>
            <label for="">Estacionamiento:</label>
            <select class="form-select" name="e" id="e" required>
                
                <option value="" selected>[SELECCIONE UN ESTACIONAMIENTO]</option>
                <?php
                $sqlinsert = "SELECT id_garaje,direccion FROM garaje ORDER BY 2 ASC;";

                if ($result = $conexionBD->conexion->query($sqlinsert)) {
                  while ($row = $result->fetch_assoc()) {
        
                    ?>
                        <option value="<?= $row["id_garaje"];?>"><?= $row["direccion"];?></option>
                        
                      <?php
                  }
                  $result->free();
                }
                ?>
            </select>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Hora de inicio:</label>
            <input type="time" class="form-control"name="hi" id="hi" required>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Hora final:</label>
            <input type="time" class="form-control"name="hf" id="hf" required>
        </div>
        <div class="form-group col-12 pt-2 pb-2 d-flex justify-content-center">
            <button type="button" class="btn btn-dark btn-sm" onclick="ConsultarEspacio()">consultar espacio</button>
        </div>
        <div class="form-group col-12 pt-2 pb-2">
            <label for="">Espacio en el parqueo:</label>
            <select class="form-select" name="s" id="s" onchange="SelEsp(this);" required>
                <option value="" selected>[SELECCIONE UN ESPACIO]</option>
            </select>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Placa:</label>
            <input type="text" class="form-control"name="p" id="p" required>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">modelo:</label>
            <input type="text" class="form-control"name="m" id="m">
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Color:</label>
            <input type="text" class="form-control"name="c" id="c">
        </div>
        <div class="form-group col-12 pt-2 pb-2 d-flex justify-content-center">
            <button type="submit" id="btn-add-res" class="btn btn-primary" style="background-color: #164c97;">Agregar Reserva</button>
        </div>
        <script>
            $("#btn-add-res").hide();
        </script>
    </form>

</div>