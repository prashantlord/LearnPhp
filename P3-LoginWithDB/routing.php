<?php
$routes = [
  '/' => __DIR__ . "/views/index.view.php",
  '/home' => __DIR__ . "/views/home.view.php",
  '/auth' => __DIR__ . "/views/partials/auth.php"
];
$currentPg = currentPg();
if(array_key_exists($currentPg, $routes)){
require $routes["$currentPg"];
}
