<?php
    $conn = ConnectaBD();
    $sql = "SELECT MAX(id) from `Comandes`;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch();
    $conn = null;
?>

