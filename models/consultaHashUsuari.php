<?php
    $conn = ConnectaBD();
    $sql="SELECT passwd FROM Usuaris where email = :mail";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindValue('mail',$mail);
    
    $stmt->execute();
    $password = $stmt->fetch();
    $password = $password[0];
    $conn = null;
?>