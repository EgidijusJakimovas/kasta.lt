<?php

// Get the current path from the URL
$path = $_SERVER['REQUEST_URI'];

// Check the path and include the corresponding HTML file
if ($path == '/valymo_irenginiai') {
    include('wastewater_treatment_systems.html');
} elseif ($path == '/tvora') {
    include('fence_installation.html');
} else {
    // Include the content of home.html for the root path and other undefined paths
    include('home.html');
}

?>
