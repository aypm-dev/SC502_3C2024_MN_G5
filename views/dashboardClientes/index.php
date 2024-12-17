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
    <?php include '../assets/components/navDashboard.php'; ?>

    <!-- Contenedor principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-5 p-3">
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Historial de llamadas</h5>
                    <div class="table-responsive" style="min-height: 150px;">
                        <table id="historialTable" class="table table-striped table-bordered w-100" style="table-layout: fixed;">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Nombre Traductor</th>
                                    <th style="width: 30%;">Fecha</th>
                                    <th style="width: 20%;">Duración</th>
                                    <th style="width: 20%;">Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Minutos de llamadas restantes:</h5>
                    <p id="counter" class="display-4 mb-0">120 Minutos</p>
                </div>
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Compra mas minutos</h5>
                    <a href="comprar_minutos.html" class="btn btn-primary btn-block">Comprar más minutos</a>
                </div>
            </aside>

            <!-- Main Section -->
            <main class="col-md-7 p-3">
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h2 class="mb-4">Sección Principal</h2>
                    <p>En esta sección puedes gestionar tus videollamadas, ver el historial y consultar los minutos
                        restantes y comprar más minutos. O solicitar un servicio de traducción con uno de nuestros
                        traductores.</p>
                </div>

                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Solicitar servicio de traducción.</h5>
                    <button id="fetchTranslators" class="btn btn-success btn-block">Solicitar Traducción</button>
                </div>
            </main>
        </div>
    </div>

    <?php include '../assets/components/footer.php'; ?>
</body>


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/dashboardClientes/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>

<!-- SWEAT ALERT  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>