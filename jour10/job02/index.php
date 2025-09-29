<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4","root","",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
    $rows = $pdo->query("SELECT nom, capacite FROM salles")->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e){ die("Erreur : ".$e->getMessage()); }
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body>
<table border="1">
    <thead><tr><th>nom</th><th>capacite</th></tr></thead>
    <tbody>
    <?php if(!$rows): ?><tr><td colspan="2">Aucune donnée.</td></tr>
    <?php else: foreach($rows as $r): ?>
        <tr><td><?= htmlspecialchars($r['nom']) ?></td><td><?= htmlspecialchars($r['capacite']) ?></td></tr>
    <?php endforeach; endif; ?>
    </tbody>
</table>
</body>
</html>