<?php   

    $albumID;
    $format0;

    $conn = ConnectaBD();

    $sql = "SELECT preu_vinil, preu_cd, preu_mp3 FROM `Album` WHERE id = :id;";
    // Preparar consulta
    $stmt = $conn->prepare($sql);
    // Substituir id pel valor del get

    //echo '<pre>';print_r($_GET);

    $stmt->bindValue('id',$albumID);
    // Executar consulta
    $stmt->execute();
    $preus = $stmt->fetchAll();
    // Tancar connexio
    $conn = null;
?>