<?php


function ConnectaBD()
{
    $servidor = "localhost";
    $usuari = "root";
    $clau = "";
    // Crear connexio
    try
    {
        
        $conn = new PDO("mysql:host=$servidor;dbname=Botiga;charset=UTF8",
        $usuari, $clau);
    
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {    
        echo"Error: " . $e->getMessage();
    }
    return($conn);
}


?>

