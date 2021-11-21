<?php

foreach ($albums as $album): ?>
   
   

   <a href="<?php echo '?accio=detall-album&album_id='.$album['id'] ?>"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>


<?php endforeach;?>

<?php die;

// La linia del final crida la funcio JS que fa el AJAX
?>


<a href="javascript:DetallProducte(<?php echo $album['id'] ?>)"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>