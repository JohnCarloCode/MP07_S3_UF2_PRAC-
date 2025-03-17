<?php
require_once __DIR__ . '/../src/pdo.php';
require_once __DIR__ . '/../src/mysqli.php';
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2 - Consultes avançades</title>
    <style>
        table { width: 50%; margin: 20px auto; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #ddd; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Resultats amb PDO</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Producte</th>
        <th>Preu (€)</th>
    </tr>
    <?php foreach ($resultats_pdo as $fila): ?>
        <tr>
            <td><?= htmlspecialchars($fila['nom']) ?></td>
            <td><?= htmlspecialchars($fila['producte']) ?></td>
            <td><?= number_format($fila['preu'], 2) ?> €</td>
        </tr>
    <?php endforeach; ?>
</table>

<h2 style="text-align:center;">Resultats amb MySQLi</h2>
<table>
    <tr>
        <th>Nom</th>
        <th>Producte</th>
        <th>Preu (€)</th>
    </tr>
    <?php foreach ($resultats_mysqli as $fila): ?>
        <tr>
            <td><?= htmlspecialchars($fila['nom']) ?></td>
            <td><?= htmlspecialchars($fila['producte']) ?></td>
            <td><?= number_format($fila['preu'], 2) ?> €</td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
