<div class="container-fluid">
    <div class="d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7614.78136452872!2d-66.1584138979959!3d-17.393028870494177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sbo!4v1729039020847!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <form onsubmit="return AgregarGarajeConfirm();" class="row">
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="d" id="d" required>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Zona:</label>
            <input type="text" class="form-control" name="z" id="z" required>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">LINK GOOGLE MAPS:</label>
            <input type="text" class="form-control" id="link-map">
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <button class="btn btn-dark btn-sm" onclick="ObtenerCorrdenadas();">obtener coordenadas</button>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Latitud:</label>
            <input type="text" class="form-control"name="la" id="la" required>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Longitud:</label>
            <input type="text" class="form-control"name="lo" id="lo" required>
        </div>
        <div class="form-group col-12 col-sm-6 pt-2 pb-2">
            <label for="">Nro de Plazas:</label>
            <input type="number" class="form-control" name="p" id="p" required>
        </div>
        <div class="form-group col-12 pt-2 pb-2 d-flex justify-content-center">
            <button type="submit" id="btn-add-gar" class="btn btn-primary" style="background-color: #164c97;">Agregar Garaje</button>
        </div>
    </form>

</div>