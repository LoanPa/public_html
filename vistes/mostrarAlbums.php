<?php

foreach ($albums as $album): ?>
   
   

   <a href="<?php echo '/public_html/recurs_album.php?album_id='.$album['id'] ?>"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>


<?php endforeach;?>

<?php die;

// La linia del final es la bona
?>


<a href="javascript:DetallProducte(<?php echo $album['id'] ?>)"><img src=<?php echo $album['foto'] ?> alt=<?php echo $album['alt_foto'] ?>></a>