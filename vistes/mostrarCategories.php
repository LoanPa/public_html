<?php foreach ($categories as $categoria): ?>
   <a href= <?php echo "?accio=llistar-categories&nom_categoria=".$categoria["nom"]."&id_categoria=".$categoria["id"]?>> <h4> <?php echo $categoria["nom"]?></h4></a>
<?php endforeach; ?>