var asiderActive = true;
    $(document).ready(function(){
        ajustaAlto();
        
        $(window).resize(function(){
            ajustaAlto();
        })        
        
        $('.menu li:has(ul)').click(function(e){
        e.preventDefault(); /* desabilida todos los a  */
        if($(this).hasClass('activado')){
            $(this).removeClass('activado');
            $(this).children('ul').slideUp();
        }else{
            ocultarSubmenu(this);
        }
        });

        $('.btn-asider').click(function(){
            let asider;
            let main;
            if(asiderActive){
                asider = '0';
                main = '0';
                asiderActive = false; 
            }else{
                asider = '1';
                main = '250px';
                asiderActive = true; 
            }
            ocultarAsider(asider, main);
        });

        $('.submenu a').each(function(){
            $(this).click(function(){
                scroll($(this).attr('href'));
            });
        });
    });

    function scroll(idElem){
        
        $([document.documentElement, document.body]).animate({
            scrollTop: $(idElem).offset().top -56
        }, 700);
    }

    function ocultarAsider(asider, main){
        $('.asider').animate({
                opacity: asider
        },500);
        $('.main').animate({
            marginLeft: main
        },500);  
    }

    function ocultarSubmenu(submenu){
        $('.menu li ul').slideUp();
        $('.menu li').removeClass('activado');
        $(submenu).addClass('activado');
        $(submenu).children('ul').slideDown();
    }
    function ajustaAlto(){
        $('.asider').css({'height':window.innerHeight-55});        
    }