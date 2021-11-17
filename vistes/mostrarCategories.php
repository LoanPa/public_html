<?php foreach ($categories as $categoria): ?>
   <a href= <?php echo "categorias/categorias.html?cat_nom=".$categoria["nom"]?>> <h4> <?php echo $categoria["nom"]?></h4></a>
<?php endforeach; ?>