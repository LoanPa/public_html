<?php foreach ($categories as $categoria): ?>
   <a href= <?php echo "recurs_categories.php?nom=".$categoria["nom"]."&id=".$categoria["id"]?>> <h4> <?php echo $categoria["nom"]?></h4></a>
<?php endforeach; ?>