<?php
require_once __DIR__ . '/../config/config.php';

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    $sql = "SELECT usuaris.nom, comandes.producte, comandes.preu 
            FROM usuaris 
            INNER JOIN comandes ON usuaris.id = comandes.usuari_id";
    $stmt = $pdo->query($sql);
    $resultats_pdo = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error de connexió PDO: " . $e->getMessage());
}
?>
