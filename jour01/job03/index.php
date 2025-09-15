<?php
$bool = true;
$int = 42;
$string = "Hello";
$float = 3.14;

$variables = [
    ['type' => 'boolean', 'nom' => 'bool', 'valeur' => $bool ? 'true' : 'false'],
    ['type' => 'integer', 'nom' => 'int', 'valeur' => $int],
    ['type' => 'string', 'nom' => 'string', 'valeur' => $string],
    ['type' => 'float', 'nom' => 'float', 'valeur' => $float]
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau des variables</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var): ?>
                <tr>
                    <td><?= htmlspecialchars($var['type']) ?></td>
                    <td><?= htmlspecialchars($var['nom']) ?></td>
                    <td><?= htmlspecialchars($var['valeur']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>