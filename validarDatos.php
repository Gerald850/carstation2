<?php  


    session_start(); //iniciando sesion

    

    include 'conexionBD.php';

    $conexionBD = new ConexionBD();
    $conexionBD->conectar();    

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    

    $sql = "select * from users where usuario='$valor1' AND estado=1";
    $resultado = $conexionBD->conexion->query($sql);


    $resultado = $conexionBD->conexion->query($sql);

    if($resultado->num_rows>0){
 
     $verificado = false;
 
     $fila = mysqli_fetch_assoc($resultado);
 
     $vpass = $fila['contra'];
     $hash = password_hash($valor2, PASSWORD_DEFAULT, ['cost'=>5]);
         if(password_verify($valor2, $vpass)){
                 $verificado = true;
                 $_SESSION["rol"] = $fila['rol'];
                 $_SESSION["pass"]= $valor2;
 
                 $_SESSION['id_user'] = $fila['id_user'];
                 $_SESSION['nombre_user'] = $fila['nombre'];
 
         } else {
             $verificado = false;
         }
 
     if($verificado == true){
         ?>
         <script>
         window.location.href = "panel/";
         </script>
         <?php
         } else {
         ?>
         <div class="alert alert-danger alert-dismissible fade show bg-danger text-white" role="alert">
            <strong>usuario incorrecto.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         <?php
         }
     }else{
     ?>
         <div class="alert alert-danger alert-dismissible fade show bg-danger text-white" role="alert">
            <strong>usuario incorrecto.</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
     <?php
     }
 
 ?>


