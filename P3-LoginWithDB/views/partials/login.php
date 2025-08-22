<div class="w-full h-200 flex flex-col justify-center">
  <form method="POST" action="/auth" class="mx-auto flex flex-col gap-4 border-1 border-gray-300 px-5 py-3 rounded-xl"> 
    <h1 class="mx-auto font-semibold text-xl"> LOGIN FORM </h1>
    <div class="flex flex-col gap-2"> 
      <label for="email"> Email </label>
      <input type="email" name="email" placeholder="prashant@gmail.com" class="focus:outline-none border-1 border-gray-400 rounded-md px-4 py-2 "> 
    </div>
      <div class="flex flex-col gap-2"> 
      <label for="password"> Password </label>
      <input type="password" name="password" placeholder="********" class="focus:outline-none border-1 border-gray-400 rounded-md px-4 py-2 "> 
    </div>  
    <button type="submit" class="bg-blue-500 text-white py-2 rounded-xl cursor-pointer hover:bg-blue-700 transition-colors duration-300 "> LOGIN </button>
  </form> 
</div>
  
<div class="fixed top-20 text-white right-0 bg-red-500 px-5 py-2 rounded-l-xl <?= isset($_SESSION['error']) ? 'block' : 'hidden'; ?>"> 
<?php
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
}
?>  
</div>
