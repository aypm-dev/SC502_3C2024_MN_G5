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

                <h1>
                    Planes Lestconnect
                </h1>

                <p>
                    Letsconnect ofrece una seria de planes que se adaptan a las necesidades de su empresa, ofreciendo
                    servicio al cliente de calidad
                </p>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Plan Básico
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>Precio: 12,000
                                    Descripción: Ideal para quienes necesitan asistencia de interpretación de forma
                                    ocasional, cubriendo necesidades puntuales de comunicación.
                                    Características:
                                    Acceso a intérpretes en horario limitado (8 am - 6 pm).
                                    Hasta 10 horas de interpretación al mes.
                                    Soporte básico en caso de problemas técnicos.
                                    Comunicación solo por videollamadas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Plan Profesional
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Precio: 15,000
                                Descripción: Pensado para quienes requieren un servicio de interpretación regular con
                                mayor flexibilidad y horas de cobertura.
                                Características:
                                Acceso a intérpretes en horario extendido (6 am - 10 pm).
                                Hasta 20 horas de interpretación al mes.
                                Soporte técnico prioritario.
                                Opción de comunicación por videollamadas y llamadas de voz.
                                Función de contacto urgente en situaciones específicas.

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Plan Premium
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Precio: 24,000
                                Descripción: Perfecto para usuarios que necesitan asistencia continua y un nivel máximo
                                de flexibilidad y soporte.
                                Características:
                                Acceso a intérpretes 24/7.
                                Horas de interpretación ilimitadas al mes.
                                Soporte técnico inmediato y dedicado.
                                Comunicación por videollamadas, llamadas de voz y mensajería instantánea.
                                Funciones avanzadas, como prioridad de conexión en eventos de emergencia.

                            </div>
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