<?php

    $mail = $_POST['Correu'];
    $inputPassword = $_POST['Contraseña'];
    require_once __DIR__."/../models/connectaBD.php";

    // Ens torna $password amb el hash emmagatzemat
    require __DIR__."/../models/consultaHashUsuari.php";

    if (password_verify($inputPassword, $password))
    {
        print "Contrsenya... coooorectaaa!!";
    }
    else {
        print "O la contrasenya o el correu introduits son incorrectes :(";
    }
    
?>