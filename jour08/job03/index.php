<?php
session_start();

// Initialiser la variable de session
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajout d'un prénom
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

// Réinitialiser la liste
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03 - Liste de prénoms</title>
</head>
<body>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom">
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <h3>Liste des prénoms :</h3>
    <ul>
    <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
        <li><?= $prenom ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>