<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4","root","",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
    $rows = $pdo->query("
        SELECT prenom, nom, naissance
        FROM etudiants
        WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'
        ORDER BY naissance
    ")->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e){ die("Erreur : ".$e->getMessage()); }
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body>
<table border="1">
    <thead><tr><th>prenom</th><th>nom</th><th>naissance</th></tr></thead>
    <tbody>
    <?php if(!$rows): ?><tr><td colspan="3">Aucune donnée.</td></tr>
    <?php else: foreach($rows as $r): ?>
        <tr>
            <td><?= htmlspecialchars($r['prenom']) ?></td>
            <td><?= htmlspecialchars($r['nom']) ?></td>
            <td><?= htmlspecialchars($r['naissance']) ?></td>
        </tr>
    <?php endforeach; endif; ?>
    </tbody>
</table>
</body>
</html>