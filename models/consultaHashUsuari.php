<?php
    $conn = ConnectaBD();
    $sql="SELECT passwd FROM Usuaris where passwd = :pass;";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindValue('pass',$password);
    
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
?>