<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);

    if(empty($email) || empty($password)){
        $_SESSION['error'] = "ERROR: Input field cannot be empty";
        header("Location: /");
        exit;
    }else{
      
        $data = $db->getUser( $email); 

        if($data === false ){
          $_SESSION['error'] = "ERROR: Account Doesnt Exist";
          header("Location: /");
          exit;
        }
        else{
          if( password_verify($password, $data['password'])){
            $_SESSION['user'] = $email;
            header("Location: /home");        
            exit;      
          }else{
             $_SESSION['error'] = "ERROR: Your Password Doesnt Match";
             header("Location: /");
             exit; 
          }
        }
    }
}else{
    header("Location: /");
    exit;
}
