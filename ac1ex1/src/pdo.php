<?php
require_once __DIR__ . '/../config/config.php';

function getUsersOver25_PDO()
{
    try {
        global $host, $dbname, $username, $password; // Importar variables globales

        // Construimos el DSN para PDO
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

        // Creamos la conexión
        $pdo = new PDO($dsn, $username, $password);

        // --- Consulta simple ---
        $sqlSimple = "SELECT * FROM usuaris WHERE edat > 25";
        $stmtSimple = $pdo->query($sqlSimple);
        $resultsSimple = $stmtSimple->fetchAll(PDO::FETCH_ASSOC);

        // --- Consulta preparada ---
        $sqlPrepared = "SELECT * FROM usuaris WHERE edat > :edatMinima";
        $stmtPrepared = $pdo->prepare($sqlPrepared);
        $stmtPrepared->execute(['edatMinima' => 25]);
        $resultsPrepared = $stmtPrepared->fetchAll(PDO::FETCH_ASSOC);

        return [
            'simple'    => $resultsSimple,
            'prepared'  => $resultsPrepared
        ];
    } catch (PDOException $e) {
        echo "Error en PDO: " . $e->getMessage();
        return [];
    }
}
