<?php
    $conn = ConnectaBD();
    $sql="SELECT id FROM Usuaris where email = :mail";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindValue('mail',$mail);
    
    $stmt->execute();
    $userID = $stmt->fetch();
    $userID = $userID[0];
    $conn = null;

?>