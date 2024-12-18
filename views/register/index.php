<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/register.css">
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

    <!-- Register Form -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
            <h3 class="card-title text-center mb-4">Registrarse</h3>
            <form>
                <div class="mb-3 fw-bold">
                    <label for="username" class="form-label">NOMBRE DE USUARIO</label>
                    <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario"
                        required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="email" class="form-label">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="password" class="form-label">CONTRASEÑA</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña"
                        required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="confirm-password" class="form-label">CONFIRMAR CONTRASEÑA</label>
                    <input type="password" class="form-control" id="confirm-password"
                        placeholder="Confirma tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-register w-100">Registrarse</button>
                <a class="nav-link text-center mt-3" href="<?= $base_url ?>/login" title="Cerrar sesión">
                    <i class="fas fa-right-to-bracket"></i> ¿Ya tienes cuenta? Inicia sesión
                </a>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $("form").on("submit", function (e) {
            e.preventDefault();

            // Get form values
            const nombre = $("#username").val();
            const correo = $("#email").val();
            const contraseña = $("#password").val();
            const confirmarContraseña = $("#confirm-password").val();

            // Check if passwords match
            if (contraseña !== confirmarContraseña) {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Las contraseñas no coinciden. Por favor, verifica.",
                });
                return;
            }

            // Check for "tipoUsuario" in URL params
            const urlParams = new URLSearchParams(window.location.search);
            const tipoUsuario = urlParams.get("tipoUsuario") || "cliente";

            // Send data to controller via AJAX
            $.ajax({
                url: "../../controllers/LoginController2.php?op=registrarUsuario",
                method: "POST",
                data: {
                    nombre: nombre,
                    correo: correo,
                    contraseña: contraseña,
                    tipo_usuario: tipoUsuario,
                },
                dataType: "json",
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            icon: "success",
                            title: "Registro Exitoso",
                            text: "¡Usuario registrado correctamente!",
                        }).then(() => {
                            // Redirect or refresh after success

                            window.location.href = getBaseURL() + "views/login";
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "Ocurrió un error al registrar el usuario.",
                        });
                    }
                },
                error: function () {
                    Swal.fire({
                        icon: "error",
                        title: "Error",
                        text: "No se pudo conectar al servidor.",
                    });
                },
            });
        });
    });

    function getBaseURL() {
        const pathParts = window.location.pathname.split('/').filter(part => part); // Split and remove empty parts
        const projectFolder = pathParts[0]; // First folder
        return `/${projectFolder}/`;
    }
</script>

</html>