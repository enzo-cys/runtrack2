<?php
$prenom = '';
// Déconnexion
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    $_COOKIE['prenom'] = '';
}

// Connexion
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, time() + 3600);
    $_COOKIE['prenom'] = $prenom;
} elseif (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 04 - Connexion par cookie</title>
</head>
<body>
    <?php if (!empty($prenom)): ?>
        <p>Bonjour <?= $prenom ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom">
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>