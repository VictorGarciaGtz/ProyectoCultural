var bandera = false;

$(document).ready(function(){
    $('.menu li:has(ul)').click(function(e){
        e.preventDefault(); /* desabilida todos los a  */
        if($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }else{
            ocultarSubmenu(this);
        }
    });

    $('#button-menu').click(function(){
        if($('#button-menu').attr('class') == 'fa fa-bars'){
            $('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close');
            $('.navegacion').css({'left': '0px'});
            bandera = true;
        }else{
            $('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars');
            $('.navegacion').css({'left': '-250px'});
            ocultarSubmenu();
            bandera = false;
        }
    });

    $(window).resize(function() {
        if (screen.width <= 768 && bandera!==true){
            $('.navegacion').css({'left': '-250px'});
        }
        else if(screen.width > 768){
            $('.navegacion').css({'left': '0'});
        }

    });

    $('.menu li ul li a').click(function(){
        window.location.href = $(this).attr('href');
    });
});
function ocultarSubmenu(submenu){
    $('.menu li ul').slideUp();
    $('.menu li').removeClass('activado');
    $(submenu).addClass('activado');
    $(submenu).children('ul').slideDown();
}
