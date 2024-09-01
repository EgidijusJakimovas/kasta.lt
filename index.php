<?php
// Get the current path from the URL, trimming any trailing slashes
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Debug: Check what path is being captured (optional)
// echo "Path: $path<br>";

// Determine which file to include based on the path
switch ($path) {
    case 'valymo_irenginiai':
        include('wastewater_treatment_systems.html');
        break;
    case 'tvora':
        include('fence_installation.html');
        break;
    default:
        // Include home.html for root and undefined paths
        include('home.html');
        break;
}
?>
