<?php



    $producteId = $_GET['album_id'];
    $producteFormat = $_GET['opcio_id'];
    //$producteUnitats = $GET['unitats'];
    
    if (filter_var($producteId, FILTER_VALIDATE_INT) && filter_var($producteFormat, FILTER_VALIDATE_INT))
    {
        if (empty($_SESSION['nLinies']))
        {
            $_SESSION['nLinies'] = 1;
            $_SESSION['linia1'] = [$producteId, $producteFormat];
        }
        else
        {
            $_SESSION['nLinies']++;
            $_SESSION['linia'.$_SESSION['nLinies']] = [$producteId, $producteFormat];
        }
    }
 
    
?>
