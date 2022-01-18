<?php

    if(!session_id())
    { 
        session_start(); 
    } 

    $producteId = $_GET['album_id'];
    $quantitatFormat0 = $_GET['quantitat_0'];
    $quantitatFormat1 = $_GET['quantitat_1'];
    $quantitatFormat2 = $_GET['quantitat_2'];
    
    // Empty() es necessari, en cas contrari 0 -> false
    if (!empty(filter_var($producteId, FILTER_VALIDATE_INT)) &&
        !empty(filter_var($quantitatFormat0, FILTER_VALIDATE_INT &&
        !empty(filter_var($quantitatFormat1, FILTER_VALIDATE_INT &&
        !empty(filter_var($quantitatFormat2, FILTER_VALIDATE_INT)))
    {
        if (empty($_SESSION['nLinies']))
        {
            $_SESSION['nLinies'] = 1;
            $_SESSION['linia1'] = [$producteId, $producteFormat];
        }
        else
        {
            $_SESSION['nLinies']++;
            $_SESSION['linia'.$_SESSION['nLinies']] = array('id' => $producteId, 'format' => $producteFormat);
        }
    } 
    
?>
