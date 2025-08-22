<?php
class Database {
  public $pdo;
  public function __construct($conf,$user = "myuser", $password = "mypassword" ){
    try{
   $dsn = 'pgsql:' . http_build_query($conf, "", ";");
   $this->pdo = new PDO($dsn, $user, $password, [
     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
   ]);
    }catch(PDOException $e){
        dd($e->getMessage());
    }
  }

 public function getuser($email){ 
    $stmt = $this->pdo->prepare("SELECT email,password FROM users WHERE email = :email");
    $stmt->execute([':email' => "$email"]);  
    $data = $stmt->fetch();
    return $data;
 }

}
$conf = require "config.php";
$db = new Database($conf['database']);
