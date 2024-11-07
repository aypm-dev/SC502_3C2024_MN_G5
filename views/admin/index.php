<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
    <?php include '../assets/components/navAdmin.php'; ?>

    <!-- Contenedor principal -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-4">LESCONNECT ADMIN</h1>
                <p class="lead">
                    Bienvenido al panel de administración de LESCONECT. Aquí puedes gestionar usuarios, revisar informes
                    y realizar configuraciones del sistema.
                </p>
            </div>
            <div class="col-md-6">
                <img src="../assets/img/videocall.jpg" alt="Video llamada" class="img-fluid rounded">
            </div>
        </div>
    </div>

    <?php include '../assets/components/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>