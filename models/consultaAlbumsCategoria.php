<?php   
    $conn = ConnectaBD();
    $id_album = $_GET['id_categoria'];
    $sql="SELECT id, foto, alt_foto FROM Album WHERE estil_id= :id;";
    // Preparar consulta
    $stmt = $conn->prepare($sql);
    // Substituir id pel valor del get

    //echo '<pre>';print_r($_GET);

    $stmt->bindValue('id',$id_album);
    // Executar consulta
    $stmt->execute();
    $albums = $stmt->fetchAll();
    // Tancar connexio
    $conn = null;
?>