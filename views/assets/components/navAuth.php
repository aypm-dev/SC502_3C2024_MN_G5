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

<?php
// Dynamically get the base URL
$path_parts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/')); // Split the path into parts
$project_folder = $path_parts[0]; // First folder after 'localhost'

// Create base URL dynamically
$base_url = '/' . $project_folder . '/views';
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-black fw-bold" href="<?= $base_url ?>/">LESCONNECT</a>
    </div>
</nav>