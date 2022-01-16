<?php
    $mail = $_POST['Correu'];
    $inputPassword = $_POST['Contraseña'];

    require_once __DIR__."/../models/connectaBD.php";

    require __DIR__."/../models/consultaHashUsuari.php";

    if (password_verify(string $password, string $inputPassword))
    {
        print "Contrsenya... coooorectaaa!!"
    }
    else {
        print "Contrsenya... incorrecta :("
    }
?>