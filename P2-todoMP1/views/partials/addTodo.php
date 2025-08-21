

<form class="flex flex-col items-center  gap-3" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> 
  <label class="font-medium text-xl"> Enter Your Task </label>
  <input name="task" for="text" class="border-1 px-2 py-1 border-white focus:outline-none" placeholder="Task......." autofocus> 
  <button type="submit" class="bg-white border-none px-2 py-1 text-black"> Add </button>
</form>
