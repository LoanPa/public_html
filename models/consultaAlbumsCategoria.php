<?php   
    $conn = ConnectaBD();
    $sql="SELECT foto, alt_foto FROM Album WHERE estil_id= :id;";
    // Preparar consulta
    $stmt = $conn->prepare($sql);
    // Substituir id pel valor del get
    $stmt->bindValue('id',$_GET['id']);
    // Executar consulta
    $stmt->execute();
    $albums = $stmt->fetchAll();
    // Tancar connexio
    $conn = null;
?>