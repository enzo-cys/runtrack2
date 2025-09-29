<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4","root","",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
    $row = $pdo->query("SELECT COUNT(*) AS nb_etudiants FROM etudiants")->fetch(PDO::FETCH_ASSOC);
} catch(PDOException $e){ die("Erreur : ".$e->getMessage()); }
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body>
<table border="1">
    <thead><tr><th>nb_etudiants</th></tr></thead>
    <tbody><tr><td><?= htmlspecialchars($row['nb_etudiants'] ?? 0) ?></td></tr></tbody>
</table>
</body>
</html>