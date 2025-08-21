<?php
require "/var/www/html/todoMP1/db/Database.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){
  if(isset($_POST["task"])){ 
    $task = htmlspecialchars($_POST["task"]);

    if(strlen($task) === 0 ){ 
      header("Location:" . $_SERVER['PHP_SELF']); 
      exit;
    }
      $db->create($task);
      header("Location: /todoMP1/ ");
  } else {
        $action = $_POST['action'];
        $unqId = $_POST['unqId'];

        switch($action){
          case "complete":
            $db->complete($unqId);
            break;

          case "delete":
            $db->delete($unqId);
            break;

          default:
            break;
        }
        $data = $db->listTodos(); 
        header("Location: /todoMP1/"); 
  }
}  

require "partials/header.php";
require "partials/addTodo.php";
require "partials/listTodo.php";
require "partials/footer.php";
