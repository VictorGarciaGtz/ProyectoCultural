<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosLogin.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="shortcut icon" href="img/iconfinder_login_48697.ico">
    <meta name="google-signin-client_id" content="624806894589-lskf3s0b4mal3sornur2p3u2et3q8sft.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>

</head>


<body>
    <header>
        <div class="logo">
            <img src="img/iconfinder_Resume_Graduate_2316254.png" class="imagenGraduacion">
            <span class="escuela">ReDa</span>
        </div>

        <div class="sistema">
            Sistema para el Reporte de</br>Desempeño Académico
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 align-items-center">
                <div class="card text-center shadow-bottom-right" id="cardIniciarSesion">
                    <img src="img/Instituto-Cultural-Tampico-.png" class="logoCultural">
                    <div class="card-body text-center">
                        <p class="my-2 sesionFont">Iniciar Sesión</p>
                        <div class="form-cont">
                            <form action="">
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="text" class="form-control col-12 col-md-10 validar" id="matricula" name="matricula"  required/>
                                    <label for="matricula"><i class="fa fa-user-o iconos" aria-hidden="true"></i>Matricula</label>
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="password" class="form-control col-12 col-md-10" id="contraseña" name="contraseña" required>
                                    <label for="contraseña"><i class="fa fa-unlock-alt iconos" aria-hidden="true"></i>Contraseña</label>
                                </div>
                                <div class="form-group row my-2 justify-content-center mx-2">
                                    <input type="submit" value="Ingresar" class="btn btn-iniciarSesion col-12 col-md-5">
                                </div>
                            </form>
                        </div>
                        <div class="form-group row my-2 justify-content-center mx-2" id="gSignIn"></div>                                             
                        <div class="my-1">
                            <button type="button" class="btn btn-link" id="btnOlvidarContra">Olvide mi contraseña</button>
                        </div>
                    </div>
                </div><!-- aqui termina el inicio de sesion -->
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> 
    // Render Google Sign-in button
        function renderButton() {
        gapi.signin2.render('gSignIn', {
            'scope': 'profile email',
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSuccess,
            'onfailure': onFailure
        });        

    }
    </script>
    <script src="js/login.js"></script>
</body>
</html>