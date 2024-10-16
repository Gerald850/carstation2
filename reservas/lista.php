<?php  
    session_start();

    include '../conexionBD.php';

    $conexionBD = new ConexionBD();
    $conexionBD->conectar();


    $sqlinsert = "SELECT r.*, g.direccion,p.numero FROM reserva r INNER JOIN plaza p ON r.id_plaza=p.id_plaza INNER JOIN garaje g ON p.id_garaje=g.id_garaje ORDER BY r.id_reserva DESC";

              if ($result = $conexionBD->conexion->query($sqlinsert)) {
                $n=1;
                while ($row = $result->fetch_assoc()) {
      
                  ?>
                      <tr>
                      <td><?php echo $n;?></td>
                      <td><?php echo $row['direccion'];?></td>
                      <td><?php echo $row['numero'];?></td>
                      <td><?php echo $row['fecha'];?></td>
                      <td><?php echo $row['placa'];?></td>
                      <td><?php echo $row['hora_inicio_r'];?></td>
                      <td><?php echo $row['hora_final_r'];?></td>
                      <td><?php echo $row['estado'];?></td>
                      <td class="d-flex">
                          <div>
                            <button class="btn btn-light btn-sm rounded-0" data-placement="top" title="mostrar ticket" style="margin-right: 10px;"><i class="far fa-file-pdf"></i></button>
                          </div>
                          <div>
                            <button class="btn btn-danger btn-sm rounded-0" data-placement="top" title="anular reserva" data-toggle='modal' style="margin-right: 10px;" data-target='#update' onclick="EliminarReserva(<?php echo $row['id_reserva'];?>);" disabled><i class="fa fa-trash"></i></button>
                          </div>
                          
                      </td>
                    </tr>
                    <?php
                    $n++;
                }
                $result->free();

              }
  ?>