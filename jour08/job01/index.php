<?php
session_start();

// Réinitialiser
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

// Compteur
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 1;
} else if (!isset($_POST['reset'])) {
    $_SESSION['nbvisites']++;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 01 - Session nbvisites</title>
</head>
<body>
    <p>Nombre de visites (session) : <?= $_SESSION['nbvisites'] ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>