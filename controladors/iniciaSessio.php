<?php

    $mail = $_POST['Correu'];
    $inputPassword = $_POST['Contraseña'];
    require_once __DIR__."/../models/connectaBD.php";

    // Ens torna $password amb el hash emmagatzemat
    require __DIR__."/../models/consultaHashUsuari.php";

    // comparacio de la contrassenya entrada i l'emmagatzemada
    if (password_verify($inputPassword, $password))
    {
        print "Contrsenya correcta!!";


        require __DIR__."/../models/consultaUserID.php";

       // echo '<pre>';print_r($userSID);
       // echo '<pre>';print_r($result);
       // echo '<pre>';print_r($userID);

        if (!$userSID)
        {
            // es crea una nova SSID i s'inicia sessio a partir d'aquesta
            $userSID = session_create_id();	
            session_id($userSID);
            session_start();

            //print("\n"."Id: ".$userSID);

            //guardar ssid
            require __DIR__."/../models/desaSID.php";

        }
        else
        {
            // S'inicia sessio a partir de la id guardada
            session_id($userSID);
            session_start();
            print "Welcome Bach!!";

        }

    }
    else { // No s'ha pogut iniciar sessio
        print "O la contrasenya o el correu introduits son incorrectes :(";
    }
    
    //la linia d'abaix ens redirigeix immediatament a index
?>
<p> Sessio iniciada correctament, si d'aqui 3 segons no es redirigit, faci clic <a href= '../index.php'>aqui</a> per a tornar a la pagina principal</p>
<meta http-equiv="Refresh" content="3; url='../index.php'" />

