<?php

    $mail = $_POST['Correu'];
    $inputPassword = $_POST['Contraseña'];
    require_once __DIR__."/../models/connectaBD.php";

    // Ens torna $password amb el hash emmagatzemat
    require __DIR__."/../models/consultaHashUsuari.php";

    // comparacio de la contrassenya entrada i l'emmagatzemada
    if (password_verify($inputPassword, $password))
    {
        print "Contrsenya... coooorrrrectaaa!!";
        session_start();
        print "1\n";

        require __DIR__."/../models/consultaUserID.php";
        print "2\n";
        $_SESSION['user'] = $userID;

        if (empty($_SESSION['count'.$_SESSION['user']])) {
            $_SESSION['count'.$_SESSION['user']] = 1;
            } else {
                $_SESSION['count'.$_SESSION['user']]++;
                }
                ?>
                <p>
                Hello visitor, you have seen this page <?php echo $_SESSION['count'.$_SESSION['user']]; ?> times.
        </p><?php
        var_dump($_SESSION);

    }
    else {
        print "O la contrasenya o el correu introduits son incorrectes :(";
    }
    
    //la linia d'abaix ens redirigeix immediatament a index
?>
<p> Sessio iniciada correctament, si d'aqui 3 segons no es redirigit, faci clic <a href= '../index.php'>aqui</a> per a tornar a la pagina principal</p>

<meta http-equiv="Refresh" content="3; url='../index.php'" />