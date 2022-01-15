<?php foreach ($categories as $categoria): ?>
   <a href="javascript:Categoria(<?php echo $categoria['id']?>)"> <h4><?php echo $categoria["nom"]?></h4></a>

<?php endforeach; ?>
