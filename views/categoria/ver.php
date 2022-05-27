<?php if (isset($categoria)) : ?>
    <h1><?= $categoria->nombre ?></h1>
<?php else : ?>
    <h1>La categoría no existe</h1>
<?php endif; ?>