<div class="border border-dark rounded-3 bg-light p-3 mb-3">
    <h5>Minutos de llamadas restantes:</h5>
    <p id="counter" class="display-4 mb-0"><span id="contadorMinutos">0</span> Minutos</p>
</div>

<script async="false" defer>
    $(document).ready(obtenerMinutos)

    function obtenerMinutos() {
        const usuarioId = <?php echo json_encode($_SESSION['user']['id_usuario']); ?>;
        console.log(getBaseURL())

        $.ajax({
            url: getBaseURL() + "/controllers/UserController.php?op=obtenerClienteMinutos",
            method: "POST",
            data: {
                id_usuario: usuarioId
            },
            success: function (response) {
                console.log("CONTADOR MINUTOS", response)
                $("#contadorMinutos").text(response)
            },
            error: function (data) {
                console.log(data)
                alert("Error obteniendo minutos del servidor.");
            }
        });
    }

    function getBaseURL() {
        const pathParts = window.location.pathname.split('/').filter(part => part); // Split and remove empty parts
        const projectFolder = pathParts[0]; // First folder
        return `/${projectFolder}/`;
    }

</script>