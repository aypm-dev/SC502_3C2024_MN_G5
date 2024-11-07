<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Pagos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/pagos.css">
</head>

<body>
    <?php include '../../assets/components/navDashboard.php'; ?>

    <!-- Pantalla de Pagos -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Formulario de Pago</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="fullName"
                                    placeholder="Ingresa tu nombre completo" required>
                            </div>

                            <div class="mb-3">
                                <label for="cardNumber" class="form-label">Número de Tarjeta</label>
                                <input type="text" class="form-control" id="cardNumber"
                                    placeholder="1234 5678 9876 5432" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label">Fecha de Expiración</label>
                                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="123" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="amount" class="form-label">Monto a Pagar</label>
                                <input type="text" class="form-control" id="amount" placeholder="$0.00" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Pagar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include '../../assets/components/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>