<?php foreach ($categories as $categoria): ?>
   <a href="javascript:Categoria(<?php echo $categoria['id']?>)"> <h4><?php echo htmlentities($categoria["nom"], ENT_QUOTES | ENT_HTML5, 'UTF-8')?></h4></a>

<?php endforeach; ?>