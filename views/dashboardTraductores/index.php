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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>



<body>
    <?php include '../assets/components/navDashboardTraductores.php'; ?>

    <!-- Contenedor principal -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-md-5 p-3">
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Historial de llamadas</h5>
                    <div class="table-responsive" style="min-height: 150px;">
                        <table id="historialTable" class="table table-striped table-bordered w-100"
                            style="table-layout: fixed;">
                            <thead>
                                <tr>
                                    <th style="width: 30%;">Nombre Ciente</th>
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

            </aside>

            <!-- Main Section -->
            <main class="col-md-7 p-3">
                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h2 class="mb-4">Administra tu Cuenta de Traductor</h2>
                    <p>En esta sección puedes gestionar tus videollamadas, ver el historial y consultar los minutos
                        que has traducido. Y mantenerte como disponible para ofrecer traducciones.</p>
                </div>

                <div class="border border-dark rounded-3 bg-light p-3 mb-3">
                    <h5>Marcar como disponible.</h5>
                    <p>Marcar como disponible, para recibir llamadas de clientes, tienes unos minutos para prepararte y dar el servicio de traducción!</p>
                    <button id="fetchTranslators" class="btn btn-success btn-block">Disponible</button>
                </div>
|        </div>
    </div>

    <?php include '../assets/components/footer.php'; ?>
</body>


<!-- Scripts -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    console.log("Test 22")

    function redirectALlamadaConTraductor(result, id, traductorId) {
        // Redirect to /interraccion with search params
        window.location.href = `./interaccion/index.php`;
    }

    $(document).ready(function () {
        const usuarioId = <?php echo json_encode($_SESSION['user']['id_usuario']); ?>;

        $('#historialTable').DataTable({
            "ajax": {
                "url": "../../controllers/VideoLlamadasController.php?op=obtenerLlamadasTraductor",  // Replace with the actual path
                "dataSrc": "aaData",  // Matches the key from the JSON response
                "method": "post",
                "data": {
                    traductorId: usuarioId
                }
            },
            "columns": [
                { "data": "nombre_traductor" },
                { "data": "fecha" },
                { "data": "duracion" },
                { "data": "estado" }
            ],
            pageLength: 5,
            lengthChange: false,
            searching: false,
        });

        $('#fetchTranslators').on('click', function () {
            redirectALlamadaConTraductor()
            // console.log("TEST")
            // $.ajax({
            //     url: '../../controllers/VideoLlamadasController.php?op=obtenerTraductoresDisponibles',
            //     type: 'GET',
            //     dataType: 'json',
            //     success: function (data) {
            //         console.log('Traductores disponibles:', data);
            //         // Handle and display the fetched data here
            //         if (data.length > 0) {
            //             const traductor = data[0]; // Assuming the first translator in the list
            //             Swal.fire({
            //                 title: 'Conexión Exitosa',
            //                 html: `
            //                     <strong>Traductor Conectado:</strong> ${traductor.nombre} <br>
            //                     <strong>Especialidad:</strong> ${traductor.especialidad} <br>
            //                     <strong>Correo:</strong> ${traductor.correo} <br>
            //                     <strong>Disponibilidad:</strong> ${traductor.disponibilidad}
            //                 `,
            //                 icon: 'success',
            //                 confirmButtonText: 'Conectar Con Traductor'
            //             }).then((result) => {
            //                 redirectALlamadaConTraductor(result, usuarioId, traductor.id_usuario)
            //             });
            //         } else {
            //             Swal.fire({
            //                 title: 'Sin traductores disponibles',
            //                 text: 'No hay traductores disponibles en este momento.',
            //                 icon: 'info',
            //                 confirmButtonText: 'Entendido'
            //             });
            //         }
            //     },
            //     error: function (xhr, status, error) {
            //         console.error('Error al obtener traductores disponibles:', error);
            //     }
            // });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>

<!-- SWEAT ALERT  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>