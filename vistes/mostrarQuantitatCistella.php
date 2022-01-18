<?php
    $a = $_SESSION['totalProductes'] ?? null;
    if (!$a)
    {
        echo "0";
    }
    else
    {
        echo "21";//$_SESSION['totalProductes'];
    }
    

?>