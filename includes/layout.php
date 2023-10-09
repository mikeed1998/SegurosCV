<?php
    require('conexion.php');

    $headGNRL = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Capacitación de seguros</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.1/js/uikit.min.js" integrity="sha512-2h0v5F1K1AmpL86yy1DmpzJULAxvBz0mt3uTZE+g6Y4tSl3/3X6ua9ISpJnIH1AnZsF7z9aFaPI7M/PwwvSDQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.1/css/uikit.min.css" integrity="sha512-Ldvt5qSfHrGryGMPkWmeNRmBx/esGpyLORxecCCMCeGF69knfA6pjXdJ+Z5KWsXcf1KJUd0r9ZdB+0FANOvECw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.17.1/js/uikit-icons.min.js" integrity="sha512-B/YQzlgjX9J41cEEKYYyPZCnp3lXgq7J7WLHKqBFS0CgRY7Y3DSOsfUjBN6YyuH4xE+tAChgN3o2L01fIQJP8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>   
            <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
            <link href="css/style.css" rel="stylesheet">
            
        </head>
        <body style="font-family: \'Blinker\', sans-serif;">
    ';

    $header = '
        <header class="menu-grande border bg-light">
            <div class="row">
                <div class="col fs-3 fw-bolder mt-4 text-center">
                    <a href="index.php" class="text-dark" style="text-decoration: none;">
                        INICIO
                    </a>
                </div>
                <div class="col fs-3 fw-bolder mt-4 text-center">
                    <a href="nosotros.php" class="text-dark" style="text-decoration: none;">
                        NOSOTROS
                    </a>
                </div>
                <div class="col fs-3 fw-bolder mt-4 text-center">
                    <a href="seguros.php" class="text-dark" style="text-decoration: none;">
                        SEGUROS
                    </a>
                </div>
                <div class="col fs-3 text-center">
                    <img src="img/logo.jpg" class="img-fluid w-100"/>
                </div>
                <div class="col fs-3 fw-bolder mt-4 text-center">
                    <a href="capacitacion.php" class="text-dark" style="text-decoration: none;">
                        CAPACITACIÓN
                    </a>
                </div>
                <div class="col fs-3 fw-bolder mt-4 text-center">
                    <a href="contacto.php" class="text-dark" style="text-decoration: none;">
                        CONTACTO
                    </a>
                </div>
                <div class="col fs-3 fw-normal mt-4 text-success text-start">
                    <ul class="row" style="list-style-type: none; padding-left: 0;">
                        <li class="dropdown col-6" style="list-style-type: none; padding-left: 0;">
                            <a href="#" class="dropdown-toggle fs-3 fw-bolder" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: black;">AYUDA</a>       
                            <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                <li class="dropdown-item fs-4"><a href="" style="text-decoration: none; color: black;">Preguntas Frecuentes</a></li>
                                <li class="dropdown-item fs-4"><a href="" style="text-decoration: none; color: black;">Aviso de Privacidad</a></li>
                            </ul>
                        </li>
                    </ul> 
                </div>
            </div>
        </header>   

        <header class="menu-movil">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-12 text-center bg-light">
                    <div class="boton-md bg-light">
                        <img src="img/logo.jpg" class="img-fluid w-50 bg-light"/>
                    </div>
                    <div class="boton-xs">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 col-12 text-center bg-light">
                    <!-- Botón para colapsar/mostrar las columnas -->
                    <div class="boton-md">
                        <button class="btn btn-outline border-dark mt-md-4 mt-sm-4 mt-xs-4 mt-0" data-bs-toggle="collapse" data-bs-target="#miColapso"><span uk-icon="icon: menu; ratio: 2;"></span></button>
                    </div>
                    <div class="boton-xs">
                        <button class="btn-link btn-outline bg-white border-0 mt-md-4 mt-sm-4 mt-xs-4 mt-0" data-bs-toggle="collapse" data-bs-target="#miColapso" style="text-decoration: none;"><img src="img/logo.jpg" class="img-fluid w-50"/></button>
                    </div>
                        <!-- <button class="btn-link w-100 btn-outline border-0 bg-white m-0 btn-p-0" data-bs-toggle="collapse" data-bs-target="#miColapso"><img src="img/logo.png" class="img-fluid" style=""/></button> -->
                </div>
                <div class="col-12">
                    <!-- Elemento colapsable que contiene las columnas -->
                    <div id="miColapso" class="collapse">
                        <div class="row">
                            <div class="col-12 fs-3 fw-bolder mt-4 text-center">
                                <a href="" class="text-dark" style="text-decoration: none;">
                                    INICIO
                                </a>
                            </div>
                            <div class="col-12 fs-3 fw-bolder mt-4 text-center">
                                <a href="" class="text-dark" style="text-decoration: none;">
                                    TIENDA
                                </a>
                            </div>
                            <div class="col-12 fs-3 fw-bolder mt-4 text-center">
                                <a href="" class="text-dark" style="text-decoration: none;">
                                    SOLUCIONES
                                </a>
                            </div>
                            <div class="col-12 fs-3 fw-bolder mt-4 text-center">
                                <a href="" class="text-dark" style="text-decoration: none;">
                                    NOSOTROS
                                </a>
                            </div>
                            <div class="col-12 fs-3 fw-bolder mt-4 text-center">
                                <a href="" class="text-dark" style="text-decoration: none;">
                                    CONTACTO
                                </a>
                            </div>
                            <div class="col fs-3 fw-normal mt-4  text-center">
                                <ul class="row" style="list-style-type: none; padding-left: 0;">
                                    <li class="dropdown col-6 mx-auto" style="list-style-type: none; padding-left: 0;">
                                        <a href="#" class="dropdown-toggle fs-3 fw-normal" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: black;">AYUDA</a>
                                        <ul class="dropdown-menu" style="list-style-type: none; padding-left: 0;">
                                            <li class="dropdown-item fs-4"><a href="" style="text-decoration: none; color: black;"></a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item fs-4"><a href="" style="text-decoration: none; color: black;">Aviso de Privacidad</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>  
    ';

    $footerGNRL = '
        <footer>
            <div class="container-fluid bg-black">
                <div class="row py-5">
                    <div class="col-11 mx-auto">
                        <div class="row py-3">
                            <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 col-11 mx-auto mt-3">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/logo.jpg" alt="" class="img-fluid"/>
                                    </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-xxl-1 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-4 text-start rounded-circle">
                                            <a href="https://wa.me/" target="_blank">
                                                <img src="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-xxl-1 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-4 text-start">
                                            <a href="{{ $data->facebook }}" target="_blank">
                                                <img src="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col-xxl-1 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2 col-4 text-start">
                                            <a href="" target="_blank">
                                                <img src="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 col-11 mx-auto text-white mt-xxl-1 mt-xl-1 mt-lg-1 mt-md-5 mt-sm-3 mt-xs-3 mt-3">
                                    <div class="row">
                                        <div class="col-md-4 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-xs-3 mt-3 mt-3 text-start">
                                            <div class="row">
                                                <div class="col-12 py-0 mb-3 fs-4 fw-bolder">
                                                    NAVEGACIÓN
                                                </div>
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Inicio</a>
                                                </div>
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Tienda</a>
                                                </div>
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Soluciones</a>
                                                </div>
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Nosotros</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-xs-3 mt-3 text-start">
                                            <div class="row">
                                                <div class="col py-0 mb-3 fs-4 fw-bolder">
                                                    AYUDA
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Preguntas Frecuentes</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Aviso de Privacidad</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    <a href="" style="text-decoration: none; color: #BCBCB0;">Métodos de Pago</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-3 mt-xs-3 mt-3 mt-3 text-start">
                                            <div class="row">
                                                <div class="col py-0 mb-3 fs-4 fw-bolder">
                                                    CONTACTO
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-1" style="color: #BCBCB0;">
                                                    Tel. 3322932239
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 py-1" style="color: #BCBCB0;">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col py-3 text-center bg-dark text-white fw-bolder">
                            Test para Felamedia LCC, por Michael Eduardo Sandoval Pérez
                        </div>
                    </div>
                </div>
            </footer>
        </body>
        </html>
    ';
?>