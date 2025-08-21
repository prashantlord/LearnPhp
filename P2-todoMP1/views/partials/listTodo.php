<?php 

$data = $db->listTodos();

?>


<div class="flex flex-col mt-5 gap-2">
  <?php forEach ($data as $item) : ?>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">  

    <div class="flex items-center justify-between px-5 py-2 bg-white w-100 text-black"> 
      <input class="hidden" type="number" value="<?= $item['id'] ?>" name="unqId">
      <h1 class="<?= $item['status'] === true ? 'line-through' : ''; ?>  font-medium "> <?= ($item['todo']) ?> </h1>
      <div class="flex gap-2"> 
      <button type="submit" name="action" value="complete" class="bg-black px-2 py-1 text-white cursor-pointer <?= $item['status'] ? 'hidden' : 'block';  ?>"> Complete </button>
          <button type="submit" name="action" value="delete" class="bg-black px-2 py-1 text-white cursor-pointer">  Delete </button>
      </div>
    </div>
  </form>
  <?php endForEach; ?>
</div>
