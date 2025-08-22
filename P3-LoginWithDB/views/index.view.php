<?php
if(isset($_SESSION['user'])){
  header("Location: /home");
  exit;  
}

require __DIR__ . "/partials/header.php";
require __DIR__ . "/partials/nav.php";
require __DIR__ . "/partials/login.php";
require __DIR__ . "/partials/footer.php";

