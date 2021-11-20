<?php
    $conn = ConnectaBD();
    $sql="SELECT max(id) FROM Usuaris;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    $newUserID = ++$result[0];
    $conn = null;
?>

