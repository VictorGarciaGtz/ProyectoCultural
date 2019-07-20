<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docentes</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilosDocentes.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="shortcut icon" href="img/iconfinder_user_1287507.ico">
</head>
<body>
    <header>
        <div class="logo">
            <span id="button-menu" class="fa fa-bars"></span>
            <img src="img/iconfinder_Resume_Graduate_2316254.png" class="imagenGraduacion">
            <span class="escuela">ReDa</span>
        </div>

        <!-- <button class="sistema btn btn-link">
            Cerrar sesion
        </button> -->
        
    </header>
    <div class="-inline">
        
            <nav class="navegacion fancy-scrollbar" id="navegar">
                <ul class="menu" id="ulmenu">
                    <li class="title-menu">
                        <img src="img/iconfinder_user_1902268.svg" alt="Docente" class="imagenDocente">
                        <p><Strong>Bienvenido:</Strong>@usuario</p>
                    </li>
                    <li><a href="#" class="subrayado"><i class="fa fa-users icon-menu" aria-hidden="true"></i>Mis Grupos <i class="fa fa-angle-down fechaAbajo" aria-hidden="true"></i></a>
                        <ul class="submenu">
                            <li><a href="https://www.facebook.com" class="subrayado"><i class="fa fa-caret-right icon-menu" aria-hidden="true"></i>Grupo 1</a></li>
                            <li><a href="https://www.facebook.com" class="subrayado"><i class="fa fa-caret-right icon-menu" aria-hidden="true"></i>Grupo 2</a></li>
                            <li><a href="https://www.facebook.com" class="subrayado"><i class="fa fa-caret-right icon-menu" aria-hidden="true"></i>Grupo 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="subrayado"><i class="fa fa-check-square icon-menu" aria-hidden="true"></i>Rasgos de evalución</a></li>
                    <li><a href="#" class="subrayado"><i class="fa fa-file-excel-o icon-menu" aria-hidden="true"></i>Descarga/Subida de Plantillas</a></li>
                    <li><a href="#" class="subrayado"><i class="fa fa-question-circle-o icon-menu" aria-hidden="true"></i>Ayuda</a></li>
                </ul>
                
            </nav>
         
        <div class="contenido fancy-scrollbar">
            <?php
                include('html-includes/grupos.html');
                creaTitulo('GRUPOS');
            ?>
           
            <div class="container">
                <p>
                    <strong> What is Lorem Ipsum?</strong> 
                    <br>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


                    <br>
                    <strong> Why do we use it?</strong>
                    <br>

                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
            <?php
                creaTitulo('ALUMNOS');
            ?>
            <div class="container">
                
                <strong> Where does it come from?</strong><br>

                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

                <br><strong>Where can I get some?</strong><br>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                    
                    paragraphs
                    words
                    bytes
                    lists
                        Start with 'Lorem
                ipsum dolor sit amet...'
	
            </div>                   
        </div>  
    </div>  
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docentes.js"></script>
</body>
</html>