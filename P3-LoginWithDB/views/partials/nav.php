<header class="flex items-center justify-between border-b-1 borde-gray-400 px-5 py-5">
  <h1 class="font-semibold text-2xl"> Prash LTD. </h1>
  <nav class="flex gap-5"> 
    <a href="/home" class="font-medium hover:text-blue-500 transition-colors duration-300 cursor-pointer"> HOME </a>
    
<?php if(!isset($_SESSION['user'])){
echo "<a href='/' class='font-medium hover:text-blue-500 transition-colors duration-300 cursor-pointer'> LOGIN </a>";
}
?>

  </nav>

</header>
