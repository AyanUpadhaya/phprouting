<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path']; 

$routes = [
    "/phprouting/" => "controllers/index.php",
    "/phprouting/contact" => "controllers/contact.php",
    "/phprouting/about" => "controllers/about.php",
    "/phprouting/notes" => "controllers/notes.php",
    "/phprouting/note" => "controllers/note.php",
];

if (strpos($uri, "/phprouting/note") !== false && isset($_GET['id'])) {
    require "controllers/note.php";
} elseif (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    require "views/404.php";
}