<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/index.css">
</head>

<body>

    <?php include '../assets/components/nav.php'; ?>

    <!-- Contenedor principal -->
    <div class="container my-5">
        <div class="row align-items-center">

            <h1>
                Como contactar Lesconnect
            </h1>

            <p>
                Contactanos por medio de nuestro correo, nuestras redes sociales, o por nuestro formulario!

                <br><br>
                <a href="">

                    contacto@lesconnect.com
                </a>
                <br>
                <br>
            </p>

            <div class="d-flex gap-2 mb-4">
                <i class="fab fa-facebook fa-2xl"></i>
                <i class="fab fa-twitter fa-2xl"></i>
                <i class="fab fa-instagram fa-2xl"></i>
            </div>

            <hr class="mt-2 ">


            <h3>Formulario De Contacto</h3>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                <button type="button" class="btn btn-primary mt-2 " style="--bs-btn-font-size: .75rem;">
                    Enviar mensaje!
                </button>
            </div>
        </div>
    </div>

    <?php include '../assets/components/footer.php'; ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>