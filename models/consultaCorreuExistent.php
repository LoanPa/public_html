<?php

    $conn = ConnectaBD();
    $sql = "SELECT COUNT(*) FROM Usuaris WHERE Usuaris.email = :email ;";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue('email',$email);

    $stmt->execute();
    $correu_en_us = $stmt->fetch();
    $conn = null;
?>