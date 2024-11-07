<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Llamadas del Agente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/agentes.css">

</head>

<body>

    <div class="content">
        <?php include '../assets/components/nav.php'; ?>

        <!-- Contenedor principal -->
        <div class="container my-5">
            <h1 class="text-center mb-4">Historial de Videollamadas</h1>
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Cliente</th>
                        <th>Duración (min)</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024-11-01</td>
                        <td>10:30 AM</td>
                        <td>Juan Pérez</td>
                        <td>15</td>
                        <td>Completada</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-11-01</td>
                        <td>11:00 AM</td>
                        <td>María López</td>
                        <td>20</td>
                        <td>Completada</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2024-11-02</td>
                        <td>02:15 PM</td>
                        <td>Carlos García</td>
                        <td>10</td>
                        <td>No Contestada</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php include '../assets/components/footer.php'; ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>