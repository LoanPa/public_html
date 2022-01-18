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
    $codi_postal = htmlentities($_POST['CodigoPostal'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

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
        else{
            //echo '<pre>';print_r($newUserID);

            require __DIR__."/../models/insertaUsuari.php";
            ?> <p> Usuari registrat correctament, si d'aqui 3 segons no es redirigit, faci clic <a href= '../index.php'>aqui</a> per a tornar a la pagina principal </p><?php
        }
    }

?>

<meta http-equiv="Refresh" content="10; url='../index.php'" />