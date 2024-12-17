<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>

    <?php include './assets/components/nav.php'; ?>

    <!-- Contenedor principal -->
    <div class="container my-5">

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-4 text-primary">Bienvenidos a Lesconect</h1>
                <p class="lead">
                    En Lesconect, contamos con años de experiencia brindando soluciones efectivas para romper las
                    barreras de comunicación entre personas sordas y oyentes. Nuestra plataforma ofrece acceso a
                    intérpretes de LESCO de manera rápida, eficiente y profesional, para que la comunicación nunca sea un
                    obstáculo.
                </p>
                <p>
                    Nos enorgullece ayudar a miles de usuarios a tener una comunicación fluida, segura y sin
                    limitaciones. Únete a nuestra comunidad y disfruta de un servicio accesible en cualquier momento y
                    lugar.
                </p>
            </div>
            <div class="col-md-6">
                <img src="./assets/img/landing.jpg" alt="Video llamada" class="img-fluid rounded shadow-lg" data-aos="fade-left">
            </div>
        </div>

        <!-- Sección de registro con animación -->
        <div class="row my-5 align-items-center">
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="text-success">¡Únete a Lesconect hoy mismo!</h2>
                <p>
                    Regístrate ahora y empieza a disfrutar de la comodidad de tener intérpretes de LESCO disponibles
                    al instante. No importa dónde estés, siempre tendrás acceso a la ayuda que necesitas para mejorar
                    tu comunicación.
                </p>
                <a href="registro.php" class="btn btn-lg btn-danger shadow-sm">Regístrate ahora</a>
            </div>
            <div class="col-md-6">
                <img src="./assets/img/register.png" alt="Registro" class="img-fluid rounded-circle shadow-lg" data-aos="zoom-in">
            </div>
        </div>

        <!-- Beneficios con iconos -->
        <div class="row text-center my-5">
            <h2 class="mb-4">¿Por qué elegirnos?</h2>
            <div class="col-md-4">
                <i class="fas fa-users fa-3x text-primary"></i>
                <h4 class="mt-3">Comunidad Global</h4>
                <p>Conectamos personas de diferentes países y culturas, asegurando una comunicación inclusiva.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-clock fa-3x text-warning"></i>
                <h4 class="mt-3">Disponible 24/7</h4>
                <p>Accede a nuestros intérpretes en cualquier momento, sin importar la hora o el lugar.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-shield-alt fa-3x text-success"></i>
                <h4 class="mt-3">Confianza y Seguridad</h4>
                <p>Disfruta de una experiencia segura y confiable, con altos estándares de privacidad y calidad.</p>
            </div>
        </div>

        <hr class="featurette-divider">

    </div>

    <?php include './assets/components/footer.php'; ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
    
<!-- AOS Animations Script -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
