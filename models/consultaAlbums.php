<?php 
    $conn = ConnectaBD();
    // Preparar consulta
    $stmt = $conn->prepare("SELECT id, foto, alt_foto FROM Album;");
    // Executar consulta
    $stmt->execute();
    $albums = $stmt->fetchAll();
    // Tancar connexio
    $conn = null;
?>