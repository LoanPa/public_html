<?php

foreach ($albums as $album): ?>
   
   
<<<<<<< HEAD
   <a href="javascript:DetallProducte(<?php echo $album['id'] ?>)"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>
   
=======

   <a href="<?php echo '?accio=detall-album&album_id='.$album['id'] ?>"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>

>>>>>>> aa3f5230c9b6c5d4d77b050ca68cacb1f985dc37

<?php endforeach;?>

<?php die;

<<<<<<< HEAD
// La linia del final es la bona
?> <a href="<?php echo '/public_html/recurs_album.php?album_id='.$album['id'] ?>"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>
=======
// La linia del final crida la funcio JS que fa el AJAX
?>


<a href="javascript:DetallProducte(<?php echo $album['id'] ?>)"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>
>>>>>>> aa3f5230c9b6c5d4d77b050ca68cacb1f985dc37
