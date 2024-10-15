function LogIn(){
    const user = $("#user").val();
    const password = $('#password').val();

    
    $.post("validarDatos.php",{valor1: user, valor2:password},function(result){
      $("#user").val("");
      $('#password').val("");
      $("#resp").html(result);
      $('#resp').show();

    });
    return false;
}