console.log("Test")

function redirectALlamadaConTraductor(result, id, traductorId) {
    if (result.isConfirmed) {
        // Create URLSearchParams
        const params = new URLSearchParams();
        params.set('id', id);
        params.set('traductorId', traductorId);

        // Redirect to /interraccion with search params
        window.location.href = `./interaccion/index.php?${params.toString()}`;
    }
}

$(document).ready(function () {
    const urlParams = new URLSearchParams(window.location.search);
    const usuarioId = urlParams.get('id');

    $('#historialTable').DataTable({
        "ajax": {
            "url": "../../controllers/VideoLlamadasController.php?op=obtenerLlamadasCliente",  // Replace with the actual path
            "dataSrc": "aaData",  // Matches the key from the JSON response
            "method": "post",
            "data": {
                clienteId: usuarioId
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
        console.log("TEST")
        $.ajax({
            url: '../../controllers/VideoLlamadasController.php?op=obtenerTraductoresDisponibles',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log('Traductores disponibles:', data);
                // Handle and display the fetched data here
                if (data.length > 0) {
                    const traductor = data[0]; // Assuming the first translator in the list
                    Swal.fire({
                        title: 'Conexión Exitosa',
                        html: `
                            <strong>Traductor Conectado:</strong> ${traductor.nombre} <br>
                            <strong>Especialidad:</strong> ${traductor.especialidad} <br>
                            <strong>Correo:</strong> ${traductor.correo} <br>
                            <strong>Disponibilidad:</strong> ${traductor.disponibilidad}
                        `,
                        icon: 'success',
                        confirmButtonText: 'Conectar Con Traductor'
                    }).then((result) => {
                        redirectALlamadaConTraductor(result, usuarioId, traductor.id_usuario)
                    });
                } else {
                    Swal.fire({
                        title: 'Sin traductores disponibles',
                        text: 'No hay traductores disponibles en este momento.',
                        icon: 'info',
                        confirmButtonText: 'Entendido'
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('Error al obtener traductores disponibles:', error);
            }
        });
    });
});