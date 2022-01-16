<?php //insertausuari


    // Validacio dades
    $nom = htmlentities($_POST['Nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $address = htmlentities($_POST['Address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $codi_postal = htmlentities($_POST['CodigoPostal'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $email = htmlentities($_POST['Correu'], ENT_QUOTES | ENT_HTML5, 'UTF-8');



    // Encriptar contrasenya
    $contrasenya = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT);

    $conn = ConnectaBD();
    $sql = "INSERT INTO `Usuaris` (`id`, `nom`, `direcció`, `cp`, `email`, `passwd`) VALUES (:id, :nom, :addres, :codiPostal, :email, :contrasenya);";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue('id',$newUserID);
    $stmt->bindValue('nom',$nom);
    $stmt->bindValue('addres',$address);
    $stmt->bindValue('codiPostal',$codi_postal);
    $stmt->bindValue('email',$email);
    $stmt->bindValue('contrasenya',$contrasenya);

    $stmt->execute();
    $conn = null;



    //=========================================================================================
?>

<?php //registre.php

    echo '<pre>';print_r($GET);
    require_once __DIR__."/../models/connectaBD.php";
    // Necessari per a que les IDs siguin incrementades
    require __DIR__."/../models/consultaMaxIdUsuari.php";
    // Incrementa el maxim id que tenim guardat per a obtenir el nou userID
    $newUserID = ++$result[0];
    // Filtrar i validar dades
    $nom = htmlentities($_POST['Nom'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $address = htmlentities($_POST['Address'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $codi_postal = htmlentities($_POST['CodigoPostal'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $email = $_POST['Correu'];

    //echo '<pre>';print_r($test);

    // Comprovem si el correu es valid
    if (!var_dump(filter_var($email, FILTER_VALIDATE_EMAIL))){
        print "Invalid email address: '$email'\n";
    }
    else{
        // Comprovem si el correu ja es troba en us
        require __DIR__."/../models/consultaCorreuExistent.php";
        if (!$correu_en_us){
            print "Address already in use: $email\n";
        }
        /* Sembla ser que a Canada tenen lleetres al codi postal...
        if (!filter_var($codi_postal, FILTER_VALIDATE_INT)){
            echo "Invalid postal code: $codi_postal.\n";
        }
        */

        // Tot es valid, inserir usuari a la base de dades
        else{
            require __DIR__."/../models/insertaUsuari.php";  
        }
    }
    






?>
