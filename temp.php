<?php


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
?>