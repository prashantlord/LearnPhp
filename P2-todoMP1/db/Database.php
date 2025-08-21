<?php
require "/var/www/html/todoMP1/function.php";

class Database {
    public $pdo;
    public function __construct ($conf, $user = "myuser", $password = "mypassword"){
          $dsn = "pgsql:" . http_build_query($conf, '', ';');
      try{
        $this->pdo = new PDO($dsn, $user, $password,[
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
      }catch(PDOException $e){
          dd("$e->getMessage()");
      }
    } 

  public function listTodos (){
      $stmt = $this->pdo->prepare("SELECT id,todo,status FROM todos;");
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data;
  }

  public function create($task){
      $stmt = $this->pdo->prepare("INSERT INTO todos (todo) VALUES (:task)");
      $stmt->execute([':task' => "$task"]);
  }

  public function complete($unqId){
      $stmt = $this->pdo->prepare("UPDATE todos SET status = true WHERE id = :unqId");
      $stmt->execute([':unqId' => "$unqId"]);    
  }

  public function delete($unqId){
      $stmt = $this->pdo->prepare("DELETE FROM todos WHERE id = :unqId");
      $stmt->execute([':unqId' => "$unqId" ]);
  }
}

$conf = require "config.php";
$db = new Database($conf['database']);
$db->listTodos();
