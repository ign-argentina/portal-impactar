<?php

include("./conf.urls.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geoportal Federal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@100;300;400;500;600;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- CSS -->

    <link rel="stylesheet" href="./lib/bootstrap5/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/hamburguer.css" type="text/css">
    <link rel="stylesheet" href="./assets/css/bootstrap_add.css" type="text/css">

</head>

<body>

    <nav id="navbar-main" class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="navbar-brand d-flex align-items-center">
                <img src="./assets/images/escudo.png" height="32" class="d-inline-flex">
                <h1 class="d-inline-flex text-white ms-2 m-0">
                    <a href="https://argentina.gob.ar/" class="text-white" target="_blank">Argentina.gob.ar</a>
                </h1>
            </div>
            <div id="hamburguer" class="me-0 me-md-3">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <div id="navbar-content" class="col-12 col-md-3 bg-primary p-1 pb-5 collapse">
        <ul>
            <li><a href="<?php echo url_mapas; ?>" target="_blank">Visor de mapas</a></li>
            <li><a href="javascript:void(0);" class="text-white" id="link-experiencias">Experiencias</a></li>
            <li><a href="javascript:void(0);" class="text-white" id="link-tutoriales">Tutoriales</a></li>
            <li><a href="javascript:void(0);" class="text-white" id="link-enlaces">Enlaces</a></li>
            <li><a href="javascript:void(0);" class="text-white" id="link-contacto">Contacto</a></li>
        </ul>
    </div>

    <!-- Carousel -->
    <div id="carGeoportalHome" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carGeoportalHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carGeoportalHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carGeoportalHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/car_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-flex flex-column">
                    <h1 class="bg-primary d-inline-block mx-auto">Geoportal Federal para la Gestión Local</h1>
                    <h3 class="bg-primary d-inline-block mx-auto">Una herramienta de análisis territorial para municipios</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/car_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-flex flex-column">
                    <h1 class="bg-primary d-inline-block mx-auto">Geoportal Federal para la Gestión Local</h1>
                    <h3 class="bg-primary d-inline-block mx-auto">Una herramienta de análisis territorial para municipios</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./assets/images/car_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-flex flex-column">
                    <h1 class="bg-primary d-inline-block mx-auto">Geoportal Federal para la Gestión Local</h1>
                    <h3 class="bg-primary d-inline-block mx-auto">Una herramienta de análisis territorial para municipios</h3>
                </div>
            </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carGeoportalHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carGeoportalHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button> -->
    </div>

    <!-- Welcome -->

    <div class="container-fluid bg-warning p-5">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto text-center">
                <p class="p-home-1">Te damos la bienvenida al <b>Geoportal Federal para la Gestión Local,</b> una plataforma web especialmente diseñada para los gobiernos locales, con el <b>objetivo de democratizar el acceso de los equipos municipales a las herramientas de análisis territorial,</b> facilitando y potenciando la planificación estratégica y el <b>mejor diseño de políticas públicas a nivel local.</b></p>
            </div>
        </div>
    </div>

    <!-- Presentation -->

    <div class="container-fluid bg-light p-5">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto text-center">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-2">
                        <img src="./assets/images/manos.png" width="100%">
                    </div>
                    <div class="col-10 text-start mt-5 ps-5 mt-md-0">
                        <p class="p-home-1">La iniciativa, desarrollada conjuntamente por los <b>Ministerios de Defensa, Interior y Ciencia Tecnología e Innovación,</b> busca aportar a la configuración de un <b>Estado inteligente que diseña políticas públicas a medida de las necesidades de cada territorio.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Visor de Mapas -->

    <div class="container-fluid bg-primary p-5">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto text-center">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-md-4 d-flex justify-content-start">
                        <img src="./assets/images/lupa.png" width="80%">
                    </div>
                    <div class="col-8 text-start p-0">
                        <h2 class="fw-700 mb-3">Visor de Mapas</h2>
                        <ul>
                            <li class="text-white fw-700 txts-125 mb-1">Accedé a información geográfica local e imágenes satelitales</li>
                            <li class="text-white fw-700 txts-125 mb-1">Realizá y descargá análisis territoriales en línea</li>
                            <li class="text-white fw-700 txts-125 mb-4">Descargá información estratégica de tu municipio</li>
                        </ul>
                        <a href="/mapa" target="_blank" class="btn btn-outline-light btn-radius px-5">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Videos -->

    <div class="container-fluid bg-light py-2 p-0" id="section-experiencias-tutoriales">
        <div class="row m-0">
            <div class="col-12 col-md-6 text-center py-md-5 ps-md-2 pe-md-1">
                <div class="bg-secondary py-5">
                    <h3 class="text-white fw-700 txts-25">Tutoriales</h3>
                    <div id="carTutoriales" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" style="bottom:-35px;">
                            <button type="button" data-bs-target="#carTutoriales" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carTutoriales" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carTutoriales" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carTutoriales" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>

                        <div class="carousel-inner p-2 p-md-5">

                            <div class="carousel-item active">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/SCcsJpnKP1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Node JS, Express & Bootstrap</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/rfscVS0vtbw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Phyton para principiantes</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/uDBvifRi4Bc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Binance 2021 como operar en Argentina</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gsxCopOjGZo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Excel, Tablas y Fórmulas profesionales</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 text-center py-md-5 p-md-2 ps-md-1 mt-1 mt-md-0">
                <div class="bg-secondary py-5">
                    <h3 class="text-white fw-700 txts-25">Experiencias</h3>
                    <!-- Carousel -->
                    <div id="carExperiencias" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" style="bottom:-35px;">
                            <button type="button" data-bs-target="#carExperiencias" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carExperiencias" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carExperiencias" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carExperiencias" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner p-2 p-md-5">

                            <div class="carousel-item active">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/2OTJzu8qP5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Review curso de Node JS de Fernando Herrera</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/kqzFTErJzY8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Node JS está matando a Phyton y PHP?</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gMMD58IbjIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Que está pasando con Binance? Está seguro mi dinero allí?</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/jtHPwXheRXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15">Opiniones Excel 2022</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Footer -->

    <div class="container-fluid bg-success p-5" id="carSuccessContainer">
        <div class="row">

            <div class="d-none col-md-2 mx-auto d-flex justify-content-start align-items-center">
                <button class="carousel-control-prev position-relative" type="button" data-bs-target="#carSuccess" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
            </div>
            <div class="col-12 col-md-8 mx-md-auto p-0">
                <div id="carSuccess" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators" style="bottom:-35px;">
                        <button type="button" data-bs-target="#carSuccess" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carSuccess" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carSuccess" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carSuccess" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner py-5">

                        <div class="carousel-item active">
                            <small class="text-white">Ministerio del Interior</small>
                            <h3 class="text-white mt-2">Registro Federal de Gobiernos Locales</h3>
                            <p class="text-white mt-3">Una herramienta que facilita el acceso público a la información territorial y una mayor comprensión sobre las potencialidades y necesidades de desarrollo local</p>
                            <div class="text-center">
                                <a href="https://gobiernoslocales.mininterior.gob.ar/" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <small class="text-white">Instituto Geográfico Nacional</small>
                            <h3 class="text-white mt-2">Geoportal IGN</h3>
                            <p class="text-white mt-3">La información Geográfica del IGN en un solo Lugar. El Instituto Geográfico Nacional produce y distribuye información geoespacial precisa y oportuna, necesaria para el desarrollo del país y el conocimiento del territorio nacional
                            </p>
                            <div class="text-center">
                                <a href="https://geoportal.ign.gob.ar/" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <small class="text-white">IDERA</small>
                            <h3 class="text-white mt-2">Infraestructura de Datos Espaciales de la República Argentina</h3>
                            <p class="text-white mt-3">Nuevos horizontes, nuevos desafíos.</p>
                            <div class="text-center">
                                <a href="https://www.idera.gob.ar/" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <small class="text-white">MinCyT</small>
                            <h3 class="text-white mt-2">Ministerio de Ciencia, Tecnología e Innovación</h3>
                            <p class="text-white mt-3">Financiamos la investigación, proveemos infraestructura, promovemos el vínculo armónico entre los sistemas académico y productivo y divulgamos los conocimientos producidos por el quehacer científico-tecnológico y sus aplicaciones en la sociedad.</p>
                            <div class="text-center">
                                <a href="https://www.argentina.gob.ar/ciencia" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none col-md-2 mx-auto d-flex justify-content-end align-items-center">
                <button class="carousel-control-next position-relative" type="button" data-bs-target="#carSuccess" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Slider Footer -->

    <div class="container-fluid bg-light p-5 list-footer" id="section-enlaces">
        <div class="row">
            <div class="col-12 col-md-3 mt-3 mt-md-0">
                <h6 class="fw-700">Trámites.</h6>
                <ul class="list-unstyled text-dark mt-3">
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/turnos" target="_blank">Turnos</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/jefatura/innovacion-publica/innovacion-administrativa/tramites-distancia-tad" target="_blank">Trámites a Distancia</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/miargentina/mesadeayuda" target="_blank">Atención al Ciudadano</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3 mt-3 mt-md-0">
                <h6 class="fw-700">Acerca de la República Argentina</h6>
                <ul class="list-unstyled text-dark mt-3">
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/pais" target="_blank">Nuestro País</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/normativa" target="_blank">Leyes Argentinas</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/organismos" target="_blank">Organismos</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/jefatura/mapa-del-estado" target="_blank">Mapa del Estado</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3 mt-3 mt-md-0 me-auto">
                <h6 class="fw-700">Acerca de Argentina.gob.ar</h6>
                <ul class="list-unstyled text-dark mt-3">
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/acerca" target="_blank">Acerca de este sitio</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/terminos-y-condiciones" target="_blank">Términos y condiciones</a></li>
                    <li><a target="_blank" class="text-dark" href="https://www.argentina.gob.ar/sugerencias" target="_blank">Sugerencias</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="container-fluid bg-primary p-5 footer" id="section-contacto">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-3 m-0">
                <a href="https://www.argentina.gob.ar/" target="_blank">
                    <img src="./assets/images/argentina.png" height="64">
                </a>
            </div>
            <div class="col-12 col-md-2 mt-3 mt-md-0">
                <!-- <a href="" class="text-dark">Ministerio de Ciencia, <br>Tecnología e Innovación</a> -->
            </div>
            <div class="col-12 col-md-2 mt-3 mt-md-0">
                <!-- <a href="" class="text-dark">Ministerio del Interior</a> -->
            </div>
            <div class="col-12 col-md-2 mt-3 mt-md-0">
                <!-- <a href="" class="text-dark">Ministerio de Defensa</a> -->
            </div>
            <div class="col-12 col-md-3 mt-3 mt-md-0">
                <div class="d-flex justify-content-end">
                    <div id="escudo-footer-container" class="escudo-footer-container">
                        <a href="https://www.ign.gob.ar/" target="_blank">
                            <img src="./assets/images/logo-ign-white.png" height="64">
                        </a>
                    </div>
                    <!-- <div id="escudo-footer-container" data-bs-offset="0,20" class="escudo-footer-container" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-html="true" title="<div class=''>Como podemos ayudarte?</div>">
                        <a href="https://www.ign.gob.ar/" target="_blank">
                            <img src="./assets/images/logo-ign-white.png" height="64">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="./lib/popper.min.js"></script>
    <script src="./lib/jquery-3.5.1.js"></script>
    <script src="./lib/bootstrap5/js/bootstrap.js"></script>
    <script type="text/javascript">
        var exampleEl = document.getElementById('escudo-footer-container')
        var tooltip = new bootstrap.Tooltip(exampleEl, {
            boundary: document.querySelector('#escudo-footer-container'),
            trigger: "manual",
            customClass: "tooltip-light"
        })
        tooltip.show();

        $("#link-experiencia,#link-tutoriales").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#section-experiencias-tutoriales").offset().top
            }, 1000);
        });

        $("#link-enlaces").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#section-enlaces").offset().top
            }, 1500);
        });

        $("#link-contacto").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#section-contacto").offset().top
            }, 2000);
        });

        $("#navbar-content").css("top", $("#navbar-main").height() + 15 + "px");
        $("#hamburguer").on("click", function() {
            $(this).toggleClass('open');
            $("#navbar-content").slideToggle('fast');
        });

        let wce = $("#carExperiencias").find("iframe:visible").width();
        let wct = $("#carTutoriales").find("iframe:visible").width();

        $("#carExperiencias").find("iframe").each(function(i, v) {

            let w = wce;
            nh = ((parseInt(w) / 4) * 3);

            $(v).attr("height", nh);

        });

        $("#carTutoriales").find("iframe").each(function(i, v) {

            let w = wct;
            nh = ((parseInt(w) / 4) * 3);

            $(v).attr("height", nh);

        });

        $("#carSuccess").on('slide.bs.carousel', function (e) {

            $("#carSuccessContainer").removeClass("slide-pair");
            $("#carSuccessContainer").removeClass("slide-unpair");

            if((e.to%2)==0) {
                
                $("#carSuccessContainer").addClass("slide-pair");

            }else{
                
                $("#carSuccessContainer").addClass("slide-unpair");

            }

        });

        let h = $("#carSuccess .carousel-item.active").height();

        $("#carSuccess .carousel-item").height(h);
        

    </script>

</body>

</html>