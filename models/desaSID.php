<?php

    $conn = ConnectaBD();
    $sql = "UPDATE `Usuaris` SET `sesion_id` = :sess_id WHERE `Usuaris`.`id` = :id;";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue('id',$userID);
    $stmt->bindValue('sess_id',$userSID);

    $stmt->execute();
    $conn = null;
?>