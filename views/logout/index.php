<?php
// Dynamically get the base URL
$path_parts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/')); // Split the path into parts
$project_folder = $path_parts[0]; // First folder after 'localhost'

// Create base URL dynamically
$base_url = '/' . $project_folder . '/views';
?>

<?php
session_start(); // Start or resume the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Optionally, redirect the user to a login or home page
header("Location: " . $base_url . "/login/");
exit();
?>