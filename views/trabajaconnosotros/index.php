<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Por qué nuestros socios son los mejores | Lesconect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <style>
        /* Estilo para que todas las imágenes tengan la misma altura */
        .card-img-top {
            height: 250px;
            /* Ajusta la altura a lo que desees */
            object-fit: cover;
        }
    </style>
</head>

<?php
// Dynamically get the base URL
$path_parts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/')); // Split the path into parts
$project_folder = $path_parts[0]; // First folder after 'localhost'

// Create base URL dynamically
$base_url = '/' . $project_folder . '/views';
?>

<body>

    <?php include '../assets/components/nav.php'; ?>

    <!-- Contenedor principal -->
    <div class="container my-5">
        <!-- Título Principal -->
        <div class="row text-center mb-5">
            <div class="col">
                <h1 class="display-4 text-primary animated fadeInLeft">¿Por qué nuestros socios son los mejores?</h1>
                <p class="lead mt-3 mb-4 animated fadeInRight" style="animation-delay: 0.5s;">
                    En Lesconect, trabajamos con los mejores socios del sector, comprometidos con brindar un servicio
                    excepcional y accesible para todos. Gracias a ellos, estamos en la vanguardia de la inclusión y
                    comunicación.
                </p>
                <p class="animated fadeInRight" style="animation-delay: 1s;">
                    Nuestros socios comparten nuestros valores y están dedicados a crear experiencias inolvidables para
                    las personas sordas y oyentes por igual.
                </p>
            </div>
        </div>

        <!-- Imagen Principal -->
        <div class="row mb-5">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <img src="../assets/img/socios.jpg" alt="Socios" class="card-img-top img-fluid rounded shadow-lg"
                    data-aos="fade-left">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Beneficios de ser socio -->
        <div class="row text-center my-5">
            <h2 class="col-12 mb-4">Beneficios de ser socio de Lesconect</h2>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-light">
                    <div class="card-body">
                        <i class="fas fa-handshake fa-4x text-primary mb-3"></i>
                        <h4 class="card-title">Compromiso y Confianza</h4>
                        <p class="card-text">Los socios de Lesconect están comprometidos con la inclusión social y la
                            confianza mutua, lo que asegura una relación estable y beneficiosa para todos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-light">
                    <div class="card-body">
                        <i class="fas fa-trophy fa-4x text-warning mb-3"></i>
                        <h4 class="card-title">Calidad y Excelencia</h4>
                        <p class="card-text">Trabajamos solo con socios que ofrecen los más altos estándares de calidad
                            en sus servicios, garantizando una experiencia impecable para nuestros usuarios.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-light">
                    <div class="card-body">
                        <i class="fas fa-globe fa-4x text-success mb-3"></i>
                        <h4 class="card-title">Alcance Global</h4>
                        <p class="card-text">Lesconect y nuestros socios están presentes en diversas regiones, lo que
                            permite expandir nuestras oportunidades a nivel mundial.</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Testimonios -->
        <div class="row my-5">
            <h2 class="col-12 text-center mb-4">Lo que dicen nuestros socios</h2>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="../assets/img/traductor3.avif" class="card-img-top" alt="Socio 1">
                    <div class="card-body">
                        <h5 class="card-title">Carlos Méndez</h5>
                        <p class="card-text">"Ser parte de Lesconect ha sido una experiencia increíble. La visión de la
                            empresa y su dedicación a la inclusión son inspiradoras." </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="../assets/img/traductor2.jpg" class="card-img-top" alt="Socio 2">
                    <div class="card-body">
                        <h5 class="card-title">Marío Gómez</h5>
                        <p class="card-text">"Lesconect no solo es un socio, sino un aliado estratégico. Su plataforma
                            es innovadora, y su impacto es real en la comunidad." </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="../assets/img/traductor1.jpg" class="card-img-top" alt="Socio 3">
                    <div class="card-body">
                        <h5 class="card-title">Luis Pérez</h5>
                        <p class="card-text">"El trabajo conjunto con Lesconect ha mejorado nuestra visibilidad y nos ha
                            permitido llegar a nuevas audiencias con impacto positivo." </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Llamada a la acción para contactar o unirse -->
        <div class="row text-center">
            <div class="col">
                <h2 class="mb-4">¡Únete a nuestra red de socios y marca la diferencia!</h2>
                <a href="<?= $base_url ?>/register?tipoUsuario=traductor"
                    class="btn btn-lg btn-success mt-4">¡Convertirse en socio!</a>
            </div>
        </div>

    </div>

    <?php include '../assets/components/footer.php'; ?>

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
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.animated').forEach(function (element) {
                element.classList.add('animate__animated', 'animate__fadeIn');
            });
        });
    </script>

</body>

</html>