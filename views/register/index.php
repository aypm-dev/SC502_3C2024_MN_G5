<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/register.css"> 
</head>
<body>
    <?php include '../assets/components/navAuth.php';?>

    <!-- Register Form -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-lg" style="width: 100%; max-width: 400px;">
            <h3 class="card-title text-center mb-4">Registrarse</h3>
            <form>
                <div class="mb-3 fw-bold">
                    <label for="username" class="form-label">NOMBRE DE USUARIO</label>
                    <input type="text" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario" required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="email" class="form-label">CORREO ELECTRONICO</label>
                    <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="password" class="form-label">CONTRASEÑA</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                </div>
                <div class="mb-3 fw-bold">
                    <label for="confirm-password" class="form-label">CONFIRMAR CONTRASEÑA</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Confirma tu contraseña" required>
                </div>
                <button type="submit" class="btn btn-register w-100">Registrarse</button>
                <div class="text-center mt-3">
                    <a href="login.html">¿Ya tienes cuenta? Inicia sesión</a>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
