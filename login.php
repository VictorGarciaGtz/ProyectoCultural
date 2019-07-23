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
                        <div class="form-group row my-2 justify-content-center mx-2" id="gSignIn">
                            <!-- <div style="" class="abcRioButton abcRioButtonBlue col-12 col-md-5">
                                <div class="abcRioButtonContentWrapper">
                                    <div class="abcRioButtonIcon" style="padding:8px">
                                        <div style="width:18px;height:18px;" class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg">
                                                <g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                                    <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                                    <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                                    <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <span style="font-size:13px;line-height:34px;" class="abcRioButtonContents">
                                        <span id="not_signed_incfms09rp89cw">Sign in with Google</span>
                                        <span id="connectedcfms09rp89cw" style="display:none">Signed in with Google</span>
                                    </span>
                                </div>
                            </div> -->
                        
                        </div>                       
                        <!-- <div class="form-group row my-2 justify-content-center mx-2">
                            <button type="button" class="btn btn-secondary col-12 col-md-5" id="btnMostrarRegistrarse">Registrarse</button>
                        </div> -->
                        <div class="my-1">
                            <button type="button" class="btn btn-link" id="btnOlvidarContra">Olvide mi contraseña</button>
                        </div>
                    </div>
                </div><!-- aqui termina el inicio de sesion -->
                <!-- <div class="card text-center shadow-bottom-right" id="cardRegistrarse">
                    <img src="img/Instituto-Cultural-Tampico-.png" class="logoCultural">
                    <div class="card-body">
                        <p class="my-2 sesionFont text-center">Registrarse</p>
                        <div class="form-cont">
                            <form action="">
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="text" class="form-control col-12 col-md-10 validar" id="matricula" name="matricula"  required/>
                                    <label for="matricula"><i class="fa fa-user-o iconos" aria-hidden="true"></i>Matricula</label>
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="text" class="form-control col-12 col-md-10" id="nombreCompleto" name="nombreCompleto"  required/>
                                    <label for="nombreCompleto">Nombre Completo</label>
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="email" class="form-control col-12 col-md-10" id="correo" name="correo"  required/>
                                    <label for="correo">Correo</label>
                                    
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="text" class="form-control col-12 col-md-5 mr-2 validar" id="telefono" name="telefono"  required/>
                                    <label for="telefono">Telefono</label>
                                    <select class="form-control col-12 col-md-5" id="rol">
                                        <option>-- Seleccione un rol --</option>
                                        <option>Profesor</option>
                                        <option>Tutor</option>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <select class="form-control col-12 col-md-10" id="campus">
                                        <option>-- Seleccione el campus al que pertenece --</option>
                                        <option>Campus I</option>
                                        <option>Campus II</option>
                                        <option>Campus III</option>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="password" class="form-control col-12 col-md-10" id="contraseña" name="contraseña" required>
                                    <label for="contraseña">Contraseña</label>
                                </div>
                                <div class="form-group row justify-content-center mx-2">
                                    <input type="password" class="form-control col-12 col-md-10" id="nvacontraseña" name="nvacontraseña" required>
                                    <label for="nvacontraseña">Confirmar Contraseña</label>
                                </div>
                                <div class="form-group row my-2 justify-content-center mx-2">
                                    <input type="submit" value="Registrarse" class="btn btn-iniciarSesion col-12 col-md-5">
                                </div>
                            </form>
                        </div>
                        <div class="form-group row my-2 justify-content-center mx-2">
                                <button type="button" class="btn btn-secondary col-12 col-md-5" id="btnMostrarInicioS">Iniciar Sesión</button>
                        </div>
                    </div> -->
                </div> <!-- Aqui termina la card de registrarse -->
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