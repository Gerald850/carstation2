<?php
session_start();
$id=$_SESSION['id_user'];

require_once '../conexionBD.php';
$conexionBD = new ConexionBD();
$conexionBD->conectar(); 
?>
<div class="container-fluid">
    
    <form onsubmit="return AgregarTicketConfirm();" class="row">
        <div class="form-group col-12 pt-2 pb-2">
        <div>
            <label for="">paquete:</label>
            <select class="form-select" name="e" id="e" required>
                
                <option value="" selected>[SELECCIONE UN PAQUETE]</option>
                <?php
                $sqlinsert = "SELECT * FROM paquete WHERE estado='activo';";

                if ($result = $conexionBD->conexion->query($sqlinsert)) {
                  while ($row = $result->fetch_assoc()) {
        
                    ?>
                        <option value="<?= $row["id_paquete"];?>"><?= $row["tipo"];?> - <?= $row["horas"];?>hrs. - <?= $row["precio"];?>Bs.</option>
                        
                      <?php
                  }
                  $result->free();
                }
                ?>
            </select>
        </div>
        <div class="form-group col-12 pt-2 pb-2">
            <label for="">Nombre:</label>
            <input type="text" class="form-control"name="n" id="n">
        </div>
        <div class="form-group col-12 pt-2 pb-2">
            <label for="">Placa:</label>
            <input type="text" class="form-control"name="p" id="p" required>
        </div>
        <div class="form-group col-12 pt-2 pb-2">
            <label for="">Celular:</label>
            <input type="number" class="form-control"name="c" id="c" required>
        </div>
        <div class="form-group col-12 pt-2 pb-2 d-flex justify-content-center">
            <button type="submit" id="btn-add-tic" class="btn btn-primary" style="background-color: #164c97;">Agregar Ticket</button>
        </div>
    </form>

</div>