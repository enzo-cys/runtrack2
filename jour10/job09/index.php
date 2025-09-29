<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4","root","",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
    $rows = $pdo->query("SELECT * FROM salles ORDER BY capacite DESC")->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e){ die("Erreur : ".$e->getMessage()); }
$cols = $rows ? array_keys($rows[0]) : [];
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body>
<table border="1">
    <thead><tr><?php foreach($cols as $c) echo "<th>".htmlspecialchars($c)."</th>"; ?></tr></thead>
    <tbody>
    <?php if(!$rows): ?><tr><td colspan="<?= count($cols) ?: 1 ?>">Aucune donnée.</td></tr>
    <?php else: foreach($rows as $r): ?>
        <tr><?php foreach($cols as $c): ?><td><?= htmlspecialchars($r[$c]) ?></td><?php endforeach; ?></tr>
    <?php endforeach; endif; ?>
    </tbody>
</table>
</body>
</html>