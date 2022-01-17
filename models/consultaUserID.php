<?php
    $conn = ConnectaBD();
    $sql="SELECT id, sesion_id FROM Usuaris where email = :mail";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindValue('mail',$mail);
    
    $stmt->execute();
    $result = $stmt->fetch();
    $userID = $result["id"];
    $userSID = $result["sesion_id"];
    $conn = null;

?>