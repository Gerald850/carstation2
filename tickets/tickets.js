function AgregarTicket(){
    $(".modal-title").html("AGREGAR TICKET");

    $.post("modal-agregar-ticket.php",{},function(result){
        $(".modal-body").html(result);
        $('.modal-body').show();
      });
    AbrirModal();
}

function AgregarReservaConfirm(){
    let f = $("#f").val();
    let e = $("#e").val();
    let hi = $("#hi").val();
    let hf = $("#hf").val();
    let s = $("#s").val();
    let p = $("#p").val();
    let m = $("#m").val();
    let c = $("#c").val();
    
    $("#btn-add-res").html("agregando reserva...");
    $("#btn-add-res").attr('disabled','disabled');
    $.post("agregar-reserva-confirm.php",{f:f,e:e,hi:hi,hf:hf,s:s,p:p,m:m,c:c},function(result){
        $(".modal-body").html(result);
        $('.modal-body').show();
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


