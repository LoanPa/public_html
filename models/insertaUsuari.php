<?php
    // Encriptar contrasenya
    $contrasenya = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT);

    $conn = ConnectaBD();
    $sql = "INSERT INTO `Usuaris` (`id`, `nom`, `direcció`, `cp`, `email`, `passwd`) VALUES (:id, :nom, :addres, :codiPostal, :email, :contrasenya);";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue('id',$newUserID);
    $stmt->bindValue('nom',$_POST['Nom']);
    $stmt->bindValue('addres',$_POST['Address']);
    $stmt->bindValue('codiPostal',$_POST['CodigoPostal']);
    $stmt->bindValue('email',$_POST['Correu']);
    $stmt->bindValue('contrasenya',$contrasenya);

    $stmt->execute();
    $conn = null;
?>