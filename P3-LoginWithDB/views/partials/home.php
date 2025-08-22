<?php

?>
<div class="w-full h-200 flex items-center gap-2 flex-col justify-center bg-black text-white">
  <h1 class="mx-auto font-bold text-2xl"> Logged in as <?= $_SESSION['user'] ?></h1>
  <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <button name="action" type="submit" class="bg-white text-black px-5 py-2 rounded-md"> LOGOUT </button>      
  </form>


</div>
