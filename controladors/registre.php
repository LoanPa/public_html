<?php //registre.php

    require_once __DIR__."/../models/connectaBD.php";
    // Necessari per a que les IDs siguin incrementades
    require __DIR__."/../models/consultaMaxIdUsuari.php";
    // Incrementa el maxim id que tenim guardat per a obtenir el nou userID
    $newUserID = ++$result[0];
    // Filtrar i validar dades
    $nom = htmlentities($_POST['Nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $address = htmlentities($_POST['Address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $email = $_POST['Correu'];
    $codi_postal = $_POST['CodigoPostal'];

    // Rebre i encriptar contrasenya
    $contrasenya = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT);


    // Comprovem si el correu es valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        print "Invalid email address: '$email'\n";
    }
    else{
        // Comprovem si el correu ja es troba en us
        require __DIR__."/../models/consultaCorreuExistent.php";
        //echo '<pre>';print_r($correu_en_us[0]);
        if ($correu_en_us[0] > 0){
            print "Address already in use: $email, $correu_en_us[0] cops\n";
        }
        // Sembla ser que a Canada tenen lletres al codi postal... Sorry Canada :(
        elseif (!filter_var($codi_postal, FILTER_VALIDATE_INT, array("options" => array("min_range"=>0, "max_range"=>99999)))){
            echo "Invalid postal code: $codi_postal.\nSi el teu codi postal te lletres, substitueix-les per '0' \n";
        }
        // Tot es valid, inserir usuari a la base de dades
        else{
            ?> <p> Usuari registrat correctament, si d'aqui 3 segons no es redirigit, faci clic <a href= '../index.php'>aqui</a> per a tornar a la pagina principal </p><?php
            require __DIR__."/../models/insertaUsuari.php";
        }
    }

?>

<meta http-equiv="Refresh" content="3; url='../index.php'" />
