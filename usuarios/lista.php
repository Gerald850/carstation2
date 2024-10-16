<?php  
    session_start();

    include '../conexionBD.php';

    $conexionBD = new ConexionBD();
    $conexionBD->conectar();


    $sqlinsert = "SELECT * FROM users ORDER BY nombre DESC";

              if ($result = $conexionBD->conexion->query($sqlinsert)) {
                $n=1;
                while ($row = $result->fetch_assoc()) {
      
                  ?>
                      <tr>
                      <td><?php echo $n;?></td>
                      <td><?php echo $row['nombre'];?></td>
                      <td><?php echo $row['usuario'];?></td>
                      <td><?php echo $row['rol'];?></td>
                      <td><?php echo $row['celular'];?></td>
                      <td><?php echo $row['estado'];?></td>
                      <td class="d-flex">
                          <div>
                              <button class="btn btn-primary btn-sm rounded-0" data-placement="top" title="lista de productos" style="margin-right: 10px;" data-toggle='modal' data-target='#update' onclick="MostrarListaProdVentas(<?php echo $row['id_user'];?>);"><i class="fas fa-list"></i></button>
                          </div>
                          <?php 
                            if($row['estado']=='inactivo'){
                              ?>
                              <form action="ver-factura.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id_garaje'];?>">
                                <button class="btn btn-light btn-sm rounded-0" data-placement="top" title="ver factura" style="margin-right: 10px;"><i class="far fa-file-pdf"></i></button>
                              </form>
                              <?php
                            }
                          ?>
                          <?php 
                            if($row['estado']=='inactivo'){
                              ?>
                              <div>
                                <button class="btn btn-danger btn-sm rounded-0" data-placement="top" title="anular factura" data-toggle='modal' style="margin-right: 10px;" data-target='#update' onclick="EliminarFactura(<?php echo $row['id_user'];?>);"><i class="fa fa-trash"></i></button>
                              </div>
                              <?php
                            }
                          ?>
                      </td>
                    </tr>
                    <?php
                    $n++;
                }
                $result->free();

              }
  ?>