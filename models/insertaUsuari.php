<?php
    // Encriptar contrasenya
    $contrasenya = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT);

    $conn = ConnectaBD();
    $sql = "INSERT INTO `Usuaris` (`id`, `nom`, `direcció`, `cp`, `email`, `passwd`) VALUES (:id, :nom, :address, :codiPostal, :email, :contrasenya);";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue('id',$newUserID);
    $stmt->bindValue('nom',$nom);
    $stmt->bindValue('address',$address);
    $stmt->bindValue('codiPostal',$codi_postal);
    $stmt->bindValue('email',$email);
    $stmt->bindValue('contrasenya',$contrasenya);

    $stmt->execute();
    $conn = null;
?>