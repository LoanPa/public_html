<?php   





    $conn = ConnectaBD();

    $sql="SELECT foto, alt_foto FROM Album WHERE estil_id= :id;";
    // Preparar consulta
    $stmt = $conn->prepare($sql);

    $stmt->bindValue('id',$_GET['id']);

    // Executar consulta
    $stmt->execute();


    // Fetch
    $albums = $stmt->fetchAll();

    // Tancar connexio
    $conn = null;


?>