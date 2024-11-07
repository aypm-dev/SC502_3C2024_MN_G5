<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .blurredbackground {
            backdrop-filter: blur(8px);
        }
    </style>

</head>

<body>

    <?php include '../../assets/components/navDashboard.php'; ?>

    <div class="container-fluid mt-4 mb-4">
        <div class="row ">
            <!-- Meeting Screen (left column) -->
            <div class="col-lg-9 col-md-9 col-sm-12 h-100 ">
                <div class="border border-black rounded-3 rounded-3 overflow-hidden position-relative">
                    <img src="../../assets/img/meeting-example.jpg" alt="" class="w-100  object-fit-cover">

                    <span style="top: 0.5rem; left: 0.5rem;" class="position-absolute d-flex gap-2 text-white">
                        <div class="blurredbackground rounded-3 bg-dark p-1 px-2 shadow-sm"
                            style="--bs-bg-opacity: .5;">

                            <i class="bi bi-person"></i>
                            Maria Suarez
                        </div>
                        <button class="blurredbackground rounded-3 bg-dark p-1 px-2 border-0 text-white shadow-sm"
                            style="--bs-bg-opacity: .5;">
                            <i class="bi bi-heart"></i>
                        </button>
                    </span>


                    <span
                        style="top: 0.5rem; left: auto; transform: translate(calc(-100% - 0.5rem), 0px); text-wrap: nowrap; --bs-bg-opacity: .5;"
                        class="position-absolute blurredbackground rounded-3 bg-dark p-1 px-2 shadow-sm text-white">
                        Español -> Lesco
                        <i class="bi bi-hand-thumbs-up"></i>
                    </span>
                </div>

            </div>

            <!-- Right Column (controls and chat) -->
            <div class="col-lg-3 col-md-3 col-sm-12  d-flex flex-column">
                <!-- Meeting Controls (top section of the right column) -->
                <div class="d-flex gap-2 mb-2">
                    <button type="button" class="btn btn-danger">
                        <i class="bi bi-telephone-fill"></i>
                        Terminar
                    </button>

                    <button style="margin-left: auto;" type="button" class="btn btn-primary"><i
                            class="bi bi-camera-fill"></i></button>
                    <button type="button" class="btn btn-primary"><i class="bi bi-headphones"></i></button>
                </div>

                <!-- Chat (bottom section of the right column) -->
                <div class="d-flex flex-column border border-black rounded-3 gap-1 bg-light p-3 h-100">
                    <h6>
                        Chat De La Interraccion
                    </h6>

                    <section class="h-100 d-flex flex-column-reverse">


                        <span class="opacity-50">
                            (Conectado con Maria Suarez, saluda <i class="bi bi-emoji-laughing"></i>!)
                        </span>
                    </section>

                    <div class="d-flex gap-2 align-items-end mt-auto">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="(Mandar un mensaje)" class="w-100">

                        <button type="button" class="btn btn-outline-secondary">
                            <i class="bi bi-emoji-smile"></i>
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="bi bi-send"></i>
                        </button>
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