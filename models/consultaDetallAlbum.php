<?php   

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    // TODO: Magia amb AJAX; IMPORTANT, passar la id de l'album

    $conn = ConnectaBD();
    $sql="SELECT Album.nom, descripcio, foto, alt_foto, artista, data_publicacio, segell, preu_vinil, preu_cd, preu_mp3, Estil.nom AS nom_estil
    FROM
    Album
    INNER JOIN Estil ON Estil.id = Album.estil_id
    WHERE Album.id = :id;";
    // Preparar consulta
    $stmt = $conn->prepare($sql);
    // Substituir id pel valor del get
    $stmt->bindValue('id',$_GET['album_id']);
    // Executar consulta
    $stmt->execute();
    $album = $stmt->fetch();

    $nom = $album[0];
    $descripcio = $album[1];
    $foto = $album[2];
    $alt_foto = $album[3];
    $artista = $album[4];
    $data_publicacio = $album[5];
    $segell = $album[6];
    $preu_vinil = $album[7];
    $preu_cd = $album[8];
    $preu_mp3 = $album[9];
    $estil = $album[10];



    // Tancar connexio
    $conn = null;
?>
