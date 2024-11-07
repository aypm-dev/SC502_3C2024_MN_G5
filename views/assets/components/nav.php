<!-- Navbar -->
<style>
    .navbar {
        background-color: #F5CBA7 !important;
    }


    .navbar-nav {
        display: flex;
        justify-content: center;
        width: 100%;
    }

    .navbar-nav .nav-item:last-child {
        margin-left: auto;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand text-black fw-bold" href="/proyect/views/">LESCONNECT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/nosotros">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/contacto">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/soporte">Soporte</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/admin">
                        <strong>
                            ADMIN
                        </strong>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/proyect/views/login" title="Cerrar sesión">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>