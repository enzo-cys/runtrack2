<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4","root","",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
    $rows = $pdo->query("
        SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
        FROM salles
        JOIN etage ON salles.id_etage = etage.id
        ORDER BY etage.nom, salles.nom
    ")->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e){ die("Erreur : ".$e->getMessage()); }
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body>
<table border="1">
    <thead><tr><th>nom_salle</th><th>nom_etage</th></tr></thead>
    <tbody>
    <?php if(!$rows): ?><tr><td colspan="2">Aucune donnée.</td></tr>
    <?php else: foreach($rows as $r): ?>
        <tr>
            <td><?= htmlspecialchars($r['nom_salle']) ?></td>
            <td><?= htmlspecialchars($r['nom_etage']) ?></td>
        </tr>
    <?php endforeach; endif; ?>
    </tbody>
</table>
</body>
</html>