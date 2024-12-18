<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<?php
// Dynamically get the base URL
$path_parts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/')); // Split the path into parts
$project_folder = $path_parts[0]; // First folder after 'localhost'

// Create base URL dynamically
$base_url = '/' . $project_folder . '/views';
?>

<body>
    <?php include '../assets/components/navAuth.php'; ?>

    <!-- Login Form -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
            <h3 class="card-title text-center mb-4 ">Iniciar sesión</h3>
            <form>
                <div class="mb-3 fw-bold">
                    <label for="email" class="form-label">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="password" class="form-label">CONTRASEÑA</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña"
                        required>
                </div>
                <a class="nav-link text-center mt-3" href="<?= $base_url ?>/dashboardClientes" title="Cerrar sesión">
                    <button disabled type="submit" class="btn btn-primary w-100">Ingresar</button>
                </a>

                <a class="nav-link text-center mt-3" href="<?= $base_url ?>/register" title="Cerrar sesión">
                    <i class="fas fa-right-to-bracket"></i> No tienes cuenta? Registarme
                </a>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>