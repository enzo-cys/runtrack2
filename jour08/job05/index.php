<?php
session_start();

function initialiser_grille() {
    return [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
}

function verifier_victoire($grille, $symbole) {
    // Lignes, colonnes, diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] === $symbole && $grille[$i][1] === $symbole && $grille[$i][2] === $symbole) return true;
        if ($grille[0][$i] === $symbole && $grille[1][$i] === $symbole && $grille[2][$i] === $symbole) return true;
    }
    if ($grille[0][0] === $symbole && $grille[1][1] === $symbole && $grille[2][2] === $symbole) return true;
    if ($grille[0][2] === $symbole && $grille[1][1] === $symbole && $grille[2][0] === $symbole) return true;
    return false;
}

function grille_pleine($grille) {
    foreach ($grille as $ligne)
        foreach ($ligne as $case)
            if ($case === '-') return false;
    return true;
}

// Réinitialiser partie
if (isset($_POST['reset'])) {
    $_SESSION['grille'] = initialiser_grille();
    $_SESSION['tour'] = 'X';
    $_SESSION['message'] = '';
} elseif (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = initialiser_grille();
    $_SESSION['tour'] = 'X';
    $_SESSION['message'] = '';
}

// Jouer
if (isset($_POST['play']) && empty($_SESSION['message'])) {
    $coords = explode(',', $_POST['play']);
    $x = intval($coords[0]);
    $y = intval($coords[1]);
    if ($_SESSION['grille'][$x][$y] === '-') {
        $_SESSION['grille'][$x][$y] = $_SESSION['tour'];
        // Vérifier victoire
        if (verifier_victoire($_SESSION['grille'], $_SESSION['tour'])) {
            $_SESSION['message'] = $_SESSION['tour'] . ' a gagné !';
        } elseif (grille_pleine($_SESSION['grille'])) {
            $_SESSION['message'] = 'Match nul !';
        } else {
            $_SESSION['tour'] = ($_SESSION['tour'] === 'X') ? 'O' : 'X';
        }
    }
    // Si fin de partie: reset automatique après affichage du message
    if (!empty($_SESSION['message'])) {
        $_SESSION['grille'] = initialiser_grille();
        $_SESSION['tour'] = 'X';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 05 - Morpion</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; text-align: center; border: 1px solid #444; }
        button { width: 100%; height: 100%; font-size: 1.5em; }
    </style>
</head>
<body>
    <h2>Morpion</h2>
    <?php if (!empty($_SESSION['message'])): ?>
        <p><?= $_SESSION['message'] ?></p>
    <?php endif; ?>
    <form method="post">
        <table>
            <?php foreach ($_SESSION['grille'] as $i => $ligne): ?>
                <tr>
                <?php foreach ($ligne as $j => $case): ?>
                    <td>
                        <?php if ($case === '-'): ?>
                            <button type="submit" name="play" value="<?= $i . ',' . $j ?>"><?= $case ?></button>
                        <?php else: ?>
                            <?= $case ?>
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>
    <p>Tour du joueur : <?= $_SESSION['tour'] ?></p>
</body>
</html>