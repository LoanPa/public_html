<?php
    require_once __DIR__."/../models/connectaBD.php";
    // Necessari per a que les IDs siguin incrementades
    require __DIR__."/../models/consultaMaxIdUsuari.php";

    // Filtrar i validar dades
    $nom = htmlentities($_POST['Nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $address = htmlentities($_POST['Address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $codi_postal = htmlentities($_POST['CodigoPostal'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $email = htmlentities($_POST['Correu'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid email address:'$email_a'.\n";
    }
    elseif (!filter_var($codi_postal, FILTER_VALIDATE_INT)){
            echo "Invalid postal code: '$email_a'.\n";
    }
    
    else{
            // Afegir inserir usuari a la base de dades
    require __DIR__."/../models/insertaUsuari.php";  
    }





?>