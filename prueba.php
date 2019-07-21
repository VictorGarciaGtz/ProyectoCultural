<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="prueba.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <header id="header" class="header container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6 text-center text-sm-left">
                    <h1 class="my-1">ReDA</h1>
                </div>            
                <div class="col-12 col-sm-6 text-center text-sm-right">
                    <button class="btn btn-light">Cerrar sesión</button>
                </div>
            </div>        
        </div>        
    </header>

    

    <main style="position:absolute;">  
        <div id="content">
            <div id="nav-button">        
                <img src="img/row.png" class="img-responsive">
            </div>
            <div class="aside-nav bg-dark">
                <div class="container px-0">
                    <div class="nav-head">
                        Bienvenido: Usuario
                    </div>
                    <div class="nav-main">
                        <div class="nav-title">
                            Grupos
                        </div>
                        <div class="nav-title">
                            Criterios de evaluación
                        </div>
                        <div class="nav-title">
                            Mantas
                        </div>
                        <div class="nav-title">
                            Ayuda
                        </div>
                    </div>    
                </div> 
            </div>            
        </div>              
    </main>

    <script>
        $(document).ready(function(){
            $(".content").css({'height':''+window.innerHeight});                
            $(window).resize(function() {
                $(".content").css({'height':''+window.innerHeight});                
            });
        });        
    </script>

</body>
</html>