<?php

    $producteId = $_GET['album_id'];
    $producteFormat = $_GET['opcio_id'];

    
    if (filter_var($producteId, FILTER_VALIDATE_INT) && filter_var($producteFormat, FILTER_VALIDATE_INT))
    {
        if (empty($_SESSION['totalProductes']))
        {
            $_SESSION['producte1'] = [$producteId, $producteFormat];
            $_SESSION['totalProductes'] = 1;
        }
        else
        {
            $_SESSION['totalProductes'] = $nProds;
            $_SESSION['producte'.$nProds] = [$producteId, $producteFormat];
        }
    }
    print_r($_SESSION);
    
    
?>
