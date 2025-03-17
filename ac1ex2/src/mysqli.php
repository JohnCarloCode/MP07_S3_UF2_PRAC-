<?php
require_once __DIR__ . '/../config/config.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Error de connexió MySQLi: " . $conn->connect_error);
}

$sql = "SELECT usuaris.nom, comandes.producte, comandes.preu 
        FROM usuaris 
        INNER JOIN comandes ON usuaris.id = comandes.usuari_id";
$result = $conn->query($sql);

$resultats_mysqli = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultats_mysqli[] = $row;
    }
}

$conn->close();
?>
