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
            <li><a href="javascript:void(0);" class="text-white" id="link-tutoriales">Experiencias</a></li>
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
            <button type="button" data-bs-target="#carGeoportalHome" data-bs-slide-to="3" aria-label="Slide 4"></button>
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
            <div class="carousel-item">
                <img src="./assets/images/car_4.jpg" class="d-block w-100" alt="...">
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
                        <a href="<?php echo url_mapas; ?>" target="_blank" class="btn btn-outline-light btn-radius px-5">Ingresar</a>
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
                                <iframe width="100%"" height="315" src="https://www.youtube.com/embed/8niSS06qIeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Introducción al mapa para la gestión local</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/8niSS06qIeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Análisis espacial con curvas de nivel</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/8niSS06qIeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Generación de áreas de influencia</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/8niSS06qIeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Detección de nuevas construcciones a partir de imágenes satelitales</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/8niSS06qIeU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Análisis espacial espacial de usos del suelo</p>
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
                                <div class="d-block w-100">
                                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/HsPluFnWjHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p class="text-white mt-4 txts-15 carrousel-text-height">Detección de terrenos baldíos y mejoras edilicias. Actualización de valores fiscales. San Ramón de la Nueva Oran, Salta</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/HsPluFnWjHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Detección de terrenos baldíos y mejoras edilicias. Actualización de valores fiscales.</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/HsPluFnWjHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Detección de terrenos baldíos y mejoras edilicias. Actualización de valores fiscales.</p>
                            </div>
                            <div class="carousel-item">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/HsPluFnWjHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p class="text-white mt-4 txts-15 carrousel-text-height">Detección de terrenos baldíos y mejoras edilicias. Actualización de valores fiscales.</p>
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
                            <small class="text-white text-white-bold">Ministerio del Interior</small>
                            <h3 class="text-white mt-2">Registro Federal de Gobiernos Locales</h3>
                            <p class="text-white mt-3">Si querés conocer más sobre las potencialidades y necesidades de desarrollo local, accede a información político-institucional y estadística complementaria al Geoportal.</p>
                            <div class="text-center">
                                <a href="https://gobiernoslocales.mininterior.gob.ar/" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <small class="text-white text-white-bold">Ministerio de Defensa</small>
                            <h3 class="text-white mt-2">Geoportal Instituto Geográfico Nacional</h3>
                            <p class="text-white mt-3">La información Geográfica del IGN en un solo Lugar. El Instituto Geográfico Nacional produce y distribuye información geoespacial precisa y oportuna, necesaria para el desarrollo del país y el conocimiento del territorio nacional. Accedé a los cursos del
                            <a class="mt-3 text-color-link" href="https://www.ign.gob.ar/AreaServicios/CCCG" target="_blank">Centro de Capacitación en Ciencias Geográficas</a>
                            </p>
                            <div class="text-center">
                                <a href="https://geoportal.ign.gob.ar/" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <small class="text-white text-white-bold">Ministerio de Ciencia, Tecnología e Innovación</small>
                            <h3 class="text-white mt-2">Programa ImpaCT.AR</h3>
                            <p class="text-white mt-3">Informate sobre las posibilidades de acceso de los gobiernos locales a financiamiento para proyectos que requieran de ciencia y tecnología para su resolución. </p>
                            <div class="text-center">
                                <a href="https://www.argentina.gob.ar/ciencia" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <small class="text-white text-white-bold">IDERA</small>
                            <h3 class="text-white mt-2">Infraestructura de Datos Espaciales de la República Argentina</h3>
                            <p class="text-white mt-3">Comunidad de productores y usuarios de información geoespacial integrada por organismos de jurisdicción Nacional, Provincial, Municipal, Consejos Federales, Universidades, Organismos no gubernamentales y empresas de todo el país.</p>
                            <div class="text-center">
                                <a href="https://www.idera.gob.ar/" class="btn btn-outline-light btn-radius mx-auto px-5 mt-3" target="_blank">Leer más</a>
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
                <h6 class="fw-700">Trámites</h6>
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
            <div class="col-12 col-md-3 mt-3 mt-md-0 me-auto">
                <h6 class="fw-700">Contacto</h6>
                <ul class="list-unstyled text-dark mt-3">
                    <li><a target="_blank" class="text-dark">datosmunicipales@mininterior.gob.ar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="container-fluid bg-primary p-5 footer" id="section-contacto">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-md-3 m-0 mt-3 mt-md-0">
                <a href="https://www.argentina.gob.ar/" target="_blank">
                    <img src="./assets/images/logo_presidencia_arg.png" height="56">
                </a>
            </div>
            <div class="col-12 col-md-2 m-0 mt-3 mt-md-0">
                <a href="https://www.argentina.gob.ar/interior/" target="_blank">
                    <img src="./assets/images/minInt.png" height="14">
                </a>
            </div>
            <div class="col-12 col-md-2 m-0 mt-3 mt-md-0">
                <a href="https://www.argentina.gob.ar/ciencia/" target="_blank">
                    <img src="./assets/images/minCyT.png" height="32">
                </a>
            </div>
            <div class="col-12 col-md-2 m-0 mt-4 mt-md-0">
                <a href="https://www.argentina.gob.ar/defensa/" target="_blank">
                    <img src="./assets/images/minDef.png" height="14">
                </a>
            </div>
            <div class="col-12 col-md-3 mt-3 mt-md-0 mt-3 mt-md-0">
                  <div class="d-flex justify-content-end">
                  <!--  <div id="escudo-footer-container" class="escudo-footer-container"> -->
                        <a href="https://www.ign.gob.ar/" target="_blank">
                            <img src="./assets/images/logo-ign-white.png" height="50">
                        </a>
                    </div>
                    <!-- <div id="escudo-footer-container" data-bs-offset="0,20" class="escudo-footer-container" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-html="true" title="<div class=''>Como podemos ayudarte?</div>">
                        <a href="https://www.ign.gob.ar/" target="_blank">
                            <img src="./assets/images/logo-ign-white.png" height="64">
                        </a>
                    </div>
                </div>-->
            </div>
        </div>
    </div>

    <script src="./lib/popper.min.js"></script>
    <script src="./lib/jquery-3.5.1.js"></script>
    <script src="./lib/bootstrap5/js/bootstrap.js"></script>
    <script type="text/javascript">
       /* var exampleEl = document.getElementById('escudo-footer-container')
        var tooltip = new bootstrap.Tooltip(exampleEl, {
            boundary: document.querySelector('#escudo-footer-container'),
            trigger: "manual",
            customClass: "tooltip-light"
        })
        tooltip.show();*/

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
