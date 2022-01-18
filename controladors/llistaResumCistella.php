<?php
    //CONSULTAR PREU BASE DE DADES
    $quantitat = 0;
    $preu = 0;

    for ($i=1; $i <= $_SESSION['nLinies'] ; $i++)
    { 
        $quantitat += $_SESSION['linia'.$_SESSION['nLinies']]['quantitat_0'] + $_SESSION['linia'.$_SESSION['nLinies']]['quantitat_1'] + $_SESSION['linia'.$_SESSION['nLinies']]['quantitat_2'];
    }
    require __DIR__."/../vistes/mostrarResumCistella.php";    
?>