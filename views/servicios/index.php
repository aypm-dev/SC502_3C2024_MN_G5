<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>

    <?php include '../assets/components/nav.php'; ?>

    <!-- Contenedor principal -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="accordion-item">


                <div class="container px-4 py-5" id="featured-3">
                    <h1 class="pb-2 border-bottom">
                        Servicios Ofrecidos Por Lestconnect
                    </h1>
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#collection"></use>
                                </svg>
                            </div>
                            <h3 class="fs-2 text-body-emphasis">Interpretación en Videollamada</h3>
                            <p>Conéctate con intérpretes en tiempo real a través de videollamadas para garantizar una
                                comunicación fluida y visual en cualquier situación.</p>
                            <a href="#" class="icon-link">
                                Ver mas!
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                            </div>
                            <h3 class="fs-2 text-body-emphasis">Soporte de Urgencia</h3>
                            <p>Accede rápidamente a un intérprete en situaciones de emergencia o necesidad inmediata,
                                disponible en planes avanzados.</p>
                            <a href="#" class="icon-link">
                                Ver mas!
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="feature col">
                            <div
                                class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#toggles2"></use>
                                </svg>
                            </div>
                            <h3 class="fs-2 text-body-emphasis">Mensajería en Tiempo Real</h3>
                            <p>Envía y recibe mensajes instantáneos para resolver consultas rápidas con apoyo de
                                intérpretes, sin necesidad de videollamada.</p>
                            <a href="#" class="icon-link">
                                Ver mas!
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <?php include '../assets/components/footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>