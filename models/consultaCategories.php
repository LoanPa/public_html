<?php
    $conn = ConnectaBD();
    // Preparar consulta
    $stmt = $conn->prepare("SELECT nom, id FROM Estil;");
    // Executar consulta
    $stmt->execute();
    $categories = $stmt->fetchAll();
    // Tancar connexio
    $conn = null;
?>