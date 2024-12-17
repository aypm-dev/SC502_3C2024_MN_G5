console.log("Test")

$(document).ready(function () {
    console.log($('#clientesTabla'))
    const urlParams = new URLSearchParams(window.location.search);
    const clienteId = urlParams.get('id');

    console.log(clienteId)

    $('#historialTable').DataTable({
        "ajax": {
            "url": "../../controllers/VideoLlamadasController.php?op=obtenerLlamadasCliente",  // Replace with the actual path
            "dataSrc": "aaData",  // Matches the key from the JSON response
            "method": "post",
            "data": {
                clienteId
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
});