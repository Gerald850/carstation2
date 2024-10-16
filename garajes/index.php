<?php
    require_once "../layout/access.php";
    if(isset($_SESSION["nombre_user"])){

      $title="Gestión de Garajes";

        require_once '../layout/header.php';
?>
        <!---- CONTENIDO ----- -->

        <div class="container">
            <div class="d-flex flex-wrap justify-content-between gap-2">
                <h2>Lista de Garajes</h2>
                <button class="btn btn-primary btn-sn" onclick="AgregarGaraje();" style="background-color: #164c97;"><i class="fa-solid fa-plus"></i> Agregar Estacionamiento</button>
            </div>
            

    <!-- Input para la búsqueda -->
     <div style="width: 100%; max-width: 200px;">
      <input class="form-control" id="searchInput" type="text" placeholder="Buscar en la tabla...">  
     </div>
    

    <!-- Tabla responsiva -->
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Direccion</th>
                    <th>Zona</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Nro plazas</th>
                    <th>Estado</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <tbody id="myTable">
                
            </tbody>
        </table>
    </div>
</div>

<?php
    require_once "../modal/modal-xl.php";
?>

<script src="garajes.js"></script>

<script>
    // Función de búsqueda en tiempo real
    document.getElementById('searchInput').addEventListener('keyup', function() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        table = document.getElementById('myTable');
        tr = table.getElementsByTagName('tr');

        // Recorremos todas las filas de la tabla y las mostramos u ocultamos según el filtro de búsqueda
        for (i = 0; i < tr.length; i++) {
            let rowVisible = false;
            td = tr[i].getElementsByTagName('td');
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        rowVisible = true;
                        break; // Si se encuentra un match, no es necesario seguir verificando las demás columnas de esta fila
                    }
                }
            }
            tr[i].style.display = rowVisible ? "" : "none";
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>







        <!-------------------- -->
<?php
        require_once '../layout/footer.php';
    }else{
        header("Location: ../");
    }
?>