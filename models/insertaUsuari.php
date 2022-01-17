<?php

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