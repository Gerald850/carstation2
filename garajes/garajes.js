function AgregarGaraje(){
    $(".modal-title-xl").html("AGREGAR GARAJE");

    $.post("modal-agregar-garaje.php",{},function(result){
        $(".modal-body-xl").html(result);
        $('.modal-body-xl').show();
      });
    AbrirModaXl();
}

function AgregarGarajeConfirm(){
    let d = $("#d").val();
    let z = $("#z").val();
    let la = $("#la").val();
    let lo = $("#lo").val();
    let p = $("#p").val();
    $("#btn-add-gar").html("agregando estacionamiento...");
    $("#btn-add-gar").attr('disabled','disabled');
    $.post("agregar-garaje-confirm.php",{d:d,z:z,la:la,lo:lo,p:p},function(result){
        $(".modal-body-xl").html(result);
        $('.modal-body-xl').show();
        VerLista()
      });
    return false;
}

function VerLista(){
    $.post("lista.php",{},function(result){
        $("#myTable").html(result);
        $('#myTable').show();
      });
}

VerLista();

function ObtenerCorrdenadas(){
    var url = document.getElementById("link-map").value;

    var regex = /@(.*?),(.*?),/; // Formato @latitud,longitud
    var regexQ = /q=(.*?),(.*?)(?=&|$)/; // Formato q=latitud,longitud

    var latitud, longitud;

    var match = url.match(regex);
    if (match) {
        latitud = match[1];
        longitud = match[2];
    } else {
        match = url.match(regexQ);
        if (match) {
            latitud = match[1];
            longitud = match[2];
        } else {
            alert("No se encontraron coordenadas en la URL.");
            return;
        }
    }

    $("#la").val(latitud);
    $("#lo").val(longitud);

}

