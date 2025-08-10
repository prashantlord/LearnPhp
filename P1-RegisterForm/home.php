<?php session_start(); 
    if(empty($_SESSION["fullName"])){
            header("Location: index.php");
    }

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $_SESSION["fullName"] = "";
        session_unset();
        session_destroy();
        header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    Hello
 <?php echo $_SESSION["fullName"]; ?>
</h1>    
<p>Welcome to the home page after registration.</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP-SELF"]) ?>" method="post">
<button type="submit">Logout</button>
</form>

</body>
</html>