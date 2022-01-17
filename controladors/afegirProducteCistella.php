<?php

    $producte['id'] = $_GET['album_id'];
    $producte['format'] = $_GET['opcio_id'];
    //$unitats = $_GET['Unitats'];
    if (empty($_SESSION['carro']))
    {
        $_SESSION['carro'] = $producte;
    }
    else
    {
        $_SESSION['carro'] += $producte;
    }

    print_r($_SESSION['carro'])
    
?>
