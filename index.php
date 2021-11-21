<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



        $accio = $_GET['accio'];

       
            switch ($accio)
            {
                case 'llistar-categories':
                    include __DIR__.'/recurs_categories.php';
                    break;
                case 'detall-album':
                    include __DIR__.'/recurs_album.php';
                    break;
                default:
                    include __DIR__.'/recurs_portada.php';
                    break;
            }
    
    
    ?>