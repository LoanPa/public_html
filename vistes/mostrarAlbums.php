<?php

foreach ($albums as $album): ?>
   
   
   <a href="javascript:DetallProducte(<?php echo $album['id'] ?>)"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>
   

<?php endforeach;?>
