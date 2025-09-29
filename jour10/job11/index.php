<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=jour09;charset=utf8mb4","root","",[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
    $row = $pdo->query("SELECT AVG(capacite) AS capacite_moyenne FROM salles")->fetch(PDO::FETCH_ASSOC);
    $val = $row['capacite_moyenne'] ?? 0;
} catch(PDOException $e){ die("Erreur : ".$e->getMessage()); }
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body>
<table border="1">
    <thead><tr><th>capacite_moyenne</th></tr></thead>
    <tbody><tr><td><?= htmlspecialchars(number_format((float)$val,2,',',' ')) ?></td></tr></tbody>
</table>
</body>
</html>