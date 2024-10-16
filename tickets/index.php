<?php
    require_once "../layout/access.php";
    if(isset($_SESSION["nombre_user"])){

      $title="Administrador de Tickets";

        require_once '../layout/header.php';
?>
        <!---- CONTENIDO ----- -->

        







        <!-------------------- -->
<?php
        require_once '../layout/footer.php';
    }else{
        header("Location: ../");
    }
?>