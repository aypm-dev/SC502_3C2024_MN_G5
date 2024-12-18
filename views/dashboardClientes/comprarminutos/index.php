<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparar Minutos - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
    <?php include '../../assets/components/navDashboardClientes.php'; ?>

    <!-- Contenedor principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-4 p-3">
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Paquetes de minutos</h5>
                    <div class="table-responsive">
                        <table id="paquetesTable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre del Paquete</th>
                                    <th>Minutos</th>
                                    <th>Precio (CRC)</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-minutos="75" data-paquete="Paquete Básico">
                                    <td>Paquete Básico</td>
                                    <td>75 minutos</td>
                                    <td>₡6,000</td>
                                    <td><button class="btn btn-info btn-sm comparar">Comprar</button></td>
                                </tr>
                                <tr data-minutos="120" data-paquete="Paquete Intermedio">
                                    <td>Paquete Intermedio</td>
                                    <td>120 minutos</td>
                                    <td>₡10,000</td>
                                    <td><button class="btn btn-info btn-sm comparar">Comprar</button></td>
                                </tr>
                                <tr data-minutos="300" data-paquete="Paquete Avanzado">
                                    <td>Paquete Avanzado</td>
                                    <td>5 horas</td>
                                    <td>₡20,000</td>
                                    <td><button class="btn btn-info btn-sm comparar">Comprar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>

            <!-- Main Section -->
            <main class="col-md-8 p-3">
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h2 class="mb-4">Comparación de Paquetes de Minutos</h2>
                    <p>En esta sección, puedes comparar los paquetes de minutos disponibles y seleccionar el que mejor
                        se ajuste a tus necesidades. Todos los paquetes ofrecen llamadas ilimitadas siempre que tengas
                        minutos disponibles en tu cuenta.</p>
                </div>

                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Comparar Paquetes</h5>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Paquete Seleccionado</h5>
                            <p class="card-text">A continuación, verás una tabla comparativa con los diferentes paquetes
                                de minutos disponibles. Cada paquete incluye minutos ilimitados y puedes realizar tantas
                                llamadas como desees, siempre que tengas minutos en tu cuenta.</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Paquete</th>
                                        <th>Minutos</th>
                                        <th>Precio (CRC)</th>
                                        <th>Beneficios</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Paquete Básico</td>
                                        <td>80 minutos</td>
                                        <td>₡6,000</td>
                                        <td>Llamadas ilimitadas mientras tengas minutos disponibles.</td>
                                    </tr>
                                    <tr>
                                        <td>Paquete Intermedio</td>
                                        <td>120 minutos</td>
                                        <td>₡10,000</td>
                                        <td>Llamadas ilimitadas mientras tengas minutos disponibles.</td>
                                    </tr>
                                    <tr>
                                        <td>Paquete Avanzado</td>
                                        <td>5 horas</td>
                                        <td>₡20,000</td>
                                        <td>Llamadas ilimitadas mientras tengas minutos disponibles.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="comprar_minutos.html" class="btn btn-success">Comprar Paquete</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php include '../../assets/components/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/dashboardClientes/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            // Manejar el clic en el botón "Comparar"
            $(".comparar").click(function () {
                var minutos = $(this).closest('tr').data('minutos');
                var paquete = $(this).closest('tr').data('paquete');
                var id_usuario = 2; // Esto debe obtenerse dinámicamente, por ejemplo, del ID del usuario logueado

                // Llamada AJAX al controlador
                $.ajax({
                    url: "../../../controllers/UserController.php?op=agregarminutosdiponibles",
                    method: "POST",
                    data: {
                        minutos: minutos,
                        id_usuario: id_usuario
                    },
                    success: function (response) {
                        console.log(response)
                        if (response === "1") {
                            // Mostrar una alerta de éxito
                            alert("¡Se han agregado " + minutos + " minutos al usuario para el paquete " + paquete + "!");
                        } else {
                            // Mostrar una alerta de error si la respuesta no es "true"
                            alert("Hubo un error al agregar los minutos.");
                        }
                    },
                    error: function (data) {
                        console.log(data)
                        alert("Error en la conexión con el servidor.");
                    }
                });
            });
        });
    </script>
</body>

</html>