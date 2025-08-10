<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="flex items-center justify-center flex-col w-dvw h-200">
  <?php
$firstName = $lastName = $email = $password = $confirmPass = "";
$firstErr = $lastErr = $emailErr = $passErr = $confirmPassErr = "";
$samePass = "";
$error = 0;
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(empty($_POST["firstName"])){
            $firstErr = "<p class='text-red-500 font-medium'> !! This field cannot be empty </p>";
            $error++;
        }else{
            $firstName = $_POST["firstName"];
        }
    
    
        if(empty($_POST["lastName"])){
            $lastErr = "<p class='text-red-500 font-medium'> !! This field cannot be empty </p>";
            $error++;
        }else{
            $lastName = $_POST["lastName"];
        }

        if(empty($_POST["email"])){
            $emailErr = "<p class='text-red-500 font-medium'> !! This field cannot be empty </p>";
            $error++;
        }else{
            $emailErr = $_POST["email"];
        }

        if(empty($_POST["password"])){
            $passErr = "<p class='text-red-500 font-medium'> !! This field cannot be empty </p>";
            $error++;
        }else{
            $password = $_POST["password"];
        }

        if(empty($_POST["confirmPass"])){
            $confirmPassErr = "<p class='text-red-500 font-medium'> !! This field cannot be empty </p>";
            $error++;
        }else{
            $confirmPass = $_POST["confirmPass"];
        }
  
if($password !== $confirmPass){
    $samePass = "<p class='font-semibold text-xl text-red-700'> Recheck your password </p>";
    $error++;
}
 if($error === 0){
      $_SESSION["fullName"] = $firstName . " " . $lastName ;
      header("Location: home.php");
    }
    }
  ?>


  <h1 class="font-bold text-2xl my-4">Register Form</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"
    class="flex gap-3 flex-col outline-1 outline-gray-300 px-5 py-10 w-100">
    <div class="flex flex-col gap-1">
      <label for="FirstName">First Name</label>
      <input type="text" name="firstName" class="outline-1 outline-gray-400 px-2 py-1" placeholder="John" />
<?php echo $firstErr; ?>
    </div>
    <div class="flex flex-col gap-1">
      <label for="lastName" class="flex flex-col gap-1">Last Name</label>
      <input type="text" name="lastName" class="outline-1 outline-gray-400 px-2 py-1" placeholder="Doe" />
<?php echo $lastErr;?>
    </div>
    <div class="flex flex-col gap-1">
      <label for="email" class="flex flex-col gap-1">Email</label>
      <input type="email" name="email" class="outline-1 outline-gray-400 px-2 py-1" placeholder="example@example.com" />
<?php echo $emailErr?>
    </div>
    <div class="flex flex-col gap-1">
      <label for="password" class="flex flex-col gap-1">Password</label>
      <input type="password" name="password" class="outline-1 outline-gray-400 px-2 py-1" placeholder="********" />
<?php echo $passErr?>
    </div>
    <div class="flex flex-col gap-1">
      <label for="confirmPass">Confirm Password</label>
      <input type="password" name="confirmPass" class="outline-1 outline-gray-400 px-2 py-1" placeholder="********" />
<?php echo $confirmPassErr?>
    </div>
    <button type="submit"
      class="bg-blue-500 py-1 text-white cursor-pointer hover:bg-blue-700 transition-colors duration-300 ease-in">
      Submit
    </button>

    <?php 
if(!empty($samePass)){
    echo $samePass;
    exit(0);
}

?>
  </form>
  




</body>

</html>