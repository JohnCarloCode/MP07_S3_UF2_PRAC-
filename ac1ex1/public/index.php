<?php
require_once __DIR__ . '/../src/pdo.php';
require_once __DIR__ . '/../src/mysqli.php';

// Obtenemos resultados con PDO
$pdoResults = getUsersOver25_PDO();
// Obtenemos resultados con MySQLi
$mysqliResults = getUsersOver25_MySQLi();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercici 1 - Consultas Básicas</title>
</head>
<body>
    <h1>Resultados con PDO</h1>
    <h2>Consulta Simple</h2>
    <ul>
        <?php foreach ($pdoResults['simple'] as $user): ?>
            <li><?= $user['nom'] . " - " . $user['email'] . " (Edat: " . $user['edat'] . ")" ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Consulta Preparada</h2>
    <ul>
        <?php foreach ($pdoResults['prepared'] as $user): ?>
            <li><?= $user['nom'] . " - " . $user['email'] . " (Edat: " . $user['edat'] . ")" ?></li>
        <?php endforeach; ?>
    </ul>

    <hr>

    <h1>Resultados con MySQLi</h1>
    <h2>Consulta Simple</h2>
    <ul>
        <?php foreach ($mysqliResults['simple'] as $user): ?>
            <li><?= $user['nom'] . " - " . $user['email'] . " (Edat: " . $user['edat'] . ")" ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Consulta Preparada</h2>
    <ul>
        <?php foreach ($mysqliResults['prepared'] as $user): ?>
            <li><?= $user['nom'] . " - " . $user['email'] . " (Edat: " . $user['edat'] . ")" ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
