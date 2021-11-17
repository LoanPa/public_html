<?php   





    $conn = ConnectaBD();

    // Preparar consulta
    $stmt = $conn->prepare("SELECT foto, alt_foto FROM Album;");


    // Executar consulta
    $stmt->execute();


    // Fetch
    $albums = $stmt->fetchAll();

    // Tancar connexio
    $conn = null;


?>