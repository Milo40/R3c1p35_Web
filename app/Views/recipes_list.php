<br>
<div class="w-100 mt-2 mb-3 bg-gray-400 p-5 flex flex-row" id="banner">
    <div class="basis-1/2 items-start">
    <b class="text-2xl text-white">Liste des recettes disponibles</b>
    </div>
    <div class="basis-1/2">
        <button class="bg-green-400 hover:bg-white hover:text-black w-1/3 p-3 float-right text-white"><i class="fa">&#xf0fe;</i>&nbsp Ajouter</button>
    </div>
</div>

<div class="w-100 p-3 grid grid-cols-3 gap-4 justify-items-center">
<?php if (! empty($recipes) && is_array($recipes)): ?>

    <?php foreach ($recipes as $recipe_item): ?>

 <div class="max-w-sm rounded overflow-hidden shadow-lg bg-green-300">
  <img class="w-full" src="<?= esc($img_path.$recipe_item['recipe_img']) ?>" alt="<?= esc($recipe_item['recipe_name']) ?>" title="<?= esc($recipe_item['recipe_name']) ?>">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?= esc($recipe_item['recipe_name']) ?></div>
    <p class="text-gray-700 text-base">
      <?= esc($recipe_item['recipe_description']) ?>
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <button class="inline-block bg-blue-500 rounded-full py-2 text-sm font-semibold text-white mr-2 mb-2 w-1/5"><i class="fa">&#xf06e;</i></button>
    <button class="inline-block bg-yellow-500 rounded-full py-2 text-sm font-semibold text-white mr-2 mb-2 w-1/5"><i class="fa">&#xf14b;</i></button>
    <button class="inline-block bg-red-500 rounded-full py-2 text-sm font-semibold text-white mr-2 mb-2 w-1/5"><i class="fa">&#xf146;</i></button>
  </div>
</div>

    <?php endforeach; ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
</div>