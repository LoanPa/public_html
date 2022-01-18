<?php
    //CONSULTAR PREU BASE DE DADES
    require_once __DIR__."/../models/connectaBD.php";
    
    $quantitat = 0;
    $preu = 0;

    for ($i=1; $i <= $_SESSION['nLinies'] ; $i++)
    { 
        $albumID=$_SESSION['linia'.$_SESSION['nLinies']]['id'];
        $format0 = $_SESSION['linia'.$_SESSION['nLinies']]['quantitat_0'];
        $format1 = $_SESSION['linia'.$_SESSION['nLinies']]['quantitat_1'];
        $format2 = $_SESSION['linia'.$_SESSION['nLinies']]['quantitat_2'];

        $quantitat +=  + $format0 + $format1 + $format2;
        
        require __DIR__."/../models/consultaPreuProducte.php";
        $preu += $preus[0]*$format0 + $preus[1]*$format1 + $preus[2]*$format2;
    
    }
    require __DIR__."/../vistes/mostrarResumCistella.php";    
?>