<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Lesconect</title>
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
                <h1 class="display-4 text-primary mb-4 animated fadeInLeft">Bienvenidos a Lesconect</h1>
                <p class="lead mb-4 animated fadeInRight" style="animation-delay: 0.5s;">
                    En Lesconect, contamos con años de experiencia ayudando a personas sordas y oyentes a conectarse sin barreras. 
                    Con nuestra plataforma, tendrás acceso inmediato a intérpretes de LESCO para cualquier situación.
                </p>
                <p class="animated fadeInRight" style="animation-delay: 1s;">
                    ¡Con Lesconect, la comunicación es más fácil que nunca! Únete a nuestra comunidad y rompe las barreras de la comunicación.
                </p>
                <a href="registro.php" class="btn btn-lg btn-danger mt-3 animated fadeInUp" style="animation-delay: 1.5s;">Regístrate ahora</a>
            </div>
            <div class="col-md-6">
                <!-- Imagen principal con efecto parallax -->
                <img src="./assets/img/landing.jpg" alt="Video llamada" class="img-fluid rounded shadow-lg" data-aos="fade-left">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Sección de Beneficios -->
        <div class="row text-center my-5">
            <h2 class="mb-4">¿Por qué elegir Lesconect?</h2>
            <div class="col-md-4">
                <i class="fas fa-users fa-4x text-primary"></i>
                <h4 class="mt-3">Comunidad Global</h4>
                <p>Conectamos personas de diferentes partes del mundo para una comunicación inclusiva y sin fronteras.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-clock fa-4x text-warning"></i>
                <h4 class="mt-3">Disponible 24/7</h4>
                <p>Accede a nuestros intérpretes en cualquier momento, sin importar la hora del día o tu ubicación.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-shield-alt fa-4x text-success"></i>
                <h4 class="mt-3">Confianza y Seguridad</h4>
                <p>Tu seguridad es nuestra prioridad. Disfruta de una experiencia confiable con altos estándares de privacidad.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Sección de Testimonios -->
        <div class="row my-5">
            <h2 class="text-center mb-4">Lo que dicen nuestros usuarios</h2>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="./assets/img/clientes1.jpg" class="card-img-top" alt="Usuario 1">
                    <div class="card-body">
                        <h5 class="card-title">jasmin Pérez</h5>
                        <p class="card-text">"Lesconect ha cambiado mi vida. Ahora puedo comunicarme fácilmente con mis amigos sordos, sin ningún tipo de barrera."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="./assets/img/clientes2.jpg" class="card-img-top" alt="Usuario 2">
                    <div class="card-body">
                        <h5 class="card-title">Ana Rodríguez</h5>
                        <p class="card-text">"Es increíble tener acceso a intérpretes de LESCO en cualquier lugar. La calidad es excelente y la plataforma es muy fácil de usar."</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="./assets/img/clientes3.jpeg" class="card-img-top" alt="Usuario 3">
                    <div class="card-body">
                        <h5 class="card-title">amanda vegas</h5>
                        <p class="card-text">"Gracias a Lesconect, he podido conectar con muchas personas. ¡Totalmente recomendable!"</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Llamada a la acción para registrarse -->
        <div class="row text-center">
            <div class="col">
                <h2>¡No esperes más, regístrate hoy y empieza a conectarte!</h2>
                <a href="registro.php" class="btn btn-lg btn-success mt-4">¡Regístrate ahora!</a>
            </div>
        </div>

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

<!-- Animaciones adicionales -->
<script>
    // Agrega animaciones para los elementos de la página
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.animated').forEach(function(element) {
            element.classList.add('animate__animated', 'animate__fadeIn');
        });
    });
</script>

</html>
