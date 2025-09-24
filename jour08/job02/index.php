<?php
// Réinitialiser
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + 3600);
    $_COOKIE['nbvisites'] = 0;
}

// Initialiser
if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 1, time() + 3600);
    $nbvisites = 1;
} else if (!isset($_POST['reset'])) {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbvisites, time() + 3600);
} else {
    $nbvisites = 0;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 02 - Cookie nbvisites</title>
</head>
<body>
    <p>Nombre de visites (cookie) : <?= $nbvisites ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>