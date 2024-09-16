<?php
// Enable HTTP caching for dynamic content
header("Cache-Control: max-age=3600, must-revalidate");

// Example router functionality: handle different paths or routes
$request_uri = $_SERVER['REQUEST_URI'];

// Simulate routing by checking the URL and loading the appropriate file
switch ($request_uri) {
    case '/':
    case '/index':
        include 'wastewater_treatment_systems.html'; // Default home page
        break;
    default:
        // Serve a 404 page if no route matches
        http_response_code(404);
        include '404.html';
        break;
}
?>
