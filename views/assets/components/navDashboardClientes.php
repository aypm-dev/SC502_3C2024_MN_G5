<!-- Navbar -->
<style>
    .navbar {
        background-color: #c57945 !important;
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

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to login page if session doesn't exist
    header("Location: " . $base_url . "/login/");
    exit();
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-black fw-bold" href="<?= $base_url ?>/dashboardClientes/">LESCONNECT DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/">Pantalla de inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= $base_url ?>/dashboardClientes/comprarminutos">Comprar Mas Minutos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/login" title="Cerrar sesión">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>