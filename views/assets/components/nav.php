<!-- Navbar -->
<style>
    .navbar {
        background-color: #F5CBA7 !important;
    }


    .navbar-nav {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .navbar-nav .nav-item:last-child {
        margin-left: auto;
    }
</style>

<?php
// Dynamically get the base URL
$path_parts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/')); // Split the path into parts
$project_folder = $path_parts[0]; // First folder after 'localhost'

// Create base URL dynamically
$base_url = '/' . $project_folder . '/views';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-black fw-bold" href="<?= $base_url ?>/">LESCONNECT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/nosotros">Acerca de Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/trabajaconnosotros">Trabaja Con Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/contacto">Contacto</a>
                </li>

                <li class="nav-item">
                    <!-- <a class="nav-link" href="./login" title="Cerrar sesión">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </a> -->

                    <a class="nav-link" href="<?= $base_url ?>/register" title="Cerrar sesión">
                        <i class="fas fa-right-to-bracket"></i> Registrarme
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>