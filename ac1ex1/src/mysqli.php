<?php
require_once __DIR__ . '/../config/config.php';

function getUsersOver25_MySQLi()
{
    global $host, $dbname, $username, $password; // Importar variables globales

    // Creamos la conexión
    $conn = new mysqli($host, $username, $password, $dbname);

    // Verificamos conexión
    if ($conn->connect_error) {
        die("Error de conexión MySQLi: " . $conn->connect_error);
    }

    // --- Consulta simple ---
    $sqlSimple = "SELECT * FROM usuaris WHERE edat > 25";
    $resultSimple = $conn->query($sqlSimple);

    $usersSimple = [];
    if ($resultSimple->num_rows > 0) {
        while ($row = $resultSimple->fetch_assoc()) {
            $usersSimple[] = $row;
        }
    }

    // --- Consulta preparada ---
    $sqlPrepared = "SELECT * FROM usuaris WHERE edat > ?";
    $stmt = $conn->prepare($sqlPrepared);
    $edatMinima = 25;
    $stmt->bind_param("i", $edatMinima);
    $stmt->execute();
    $resultPrepared = $stmt->get_result();

    $usersPrepared = [];
    if ($resultPrepared->num_rows > 0) {
        while ($row = $resultPrepared->fetch_assoc()) {
            $usersPrepared[] = $row;
        }
    }

    // Cerramos la conexión
    $conn->close();

    return [
        'simple'    => $usersSimple,
        'prepared'  => $usersPrepared
    ];
}
