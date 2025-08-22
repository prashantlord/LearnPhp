<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if($_SERVER["REQUEST_METHOD"] === "POST"){
  if(isset($_POST['action'])) {
    $_SESSION['user'] = "";
    session_unset();
    session_destroy();
    header("Location: /");
    exit();
  }
}

require __DIR__ . "/functions.php";
require __DIR__ . "/DB/Database.php";
require __DIR__ . "/routing.php";



