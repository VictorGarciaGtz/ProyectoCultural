$(document).ready(function(){
    $('#cardRegistrarse').hide();
    $('#btnMostrarRegistrarse').on("click", mostrarRegistrarse);
    $('#btnMostrarInicioS').on("click", mostrarInicioSesion);
});

function mostrarRegistrarse(){
    $('#cardIniciarSesion').hide();
    $('#cardRegistrarse').show('fade');
}

function mostrarInicioSesion(){
    $('#cardRegistrarse').hide();
    $('#cardIniciarSesion').show('fade');
}

$(function(){
    $(".validar").keydown(function(event){
        //alert(event.keyCode);
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
});

function validar_email( email ) 
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}