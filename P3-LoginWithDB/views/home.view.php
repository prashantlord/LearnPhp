<?php
if(!isset($_SESSION['user'])){ 
    header("Location: /");
    exit;
}

require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/nav.php";
require __DIR__ . "/partials/home.php";
require __DIR__ . "/partials/footer.php";

