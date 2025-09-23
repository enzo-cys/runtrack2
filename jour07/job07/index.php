<?php
function gras($str) {
    $words = explode(' ', $str);
    $result = "";
    foreach ($words as $word) {
        if (isset($word[0]) && $word[0] >= 'A' && $word[0] <= 'Z') {
            $result .= "<b>$word</b> ";
        } else {
            $result .= "$word ";
        }
    }
    return trim($result);
}

function cesar($str, $decalage = 2) {
    $result = "";
    for ($i = 0; isset($str[$i]); $i++) {
        $char = $str[$i];
        if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
            $base = ($char >= 'a') ? 'a' : 'A';
            $result .= chr((ord($char) - ord($base) + $decalage) % 26 + ord($base));
        } else {
            $result .= $char;
        }
    }
    return $result;
}

function plateforme($str) {
    $words = explode(' ', $str);
    $result = "";
    foreach ($words as $word) {
        $len = 0;
        while (isset($word[$len])) {
            $len++;
        }
        if ($len >= 2 && $word[$len-2] === 'm' && $word[$len-1] === 'e') {
            $result .= $word . "_ ";
        } else {
            $result .= $word . " ";
        }
    }
    return trim($result);
}

$str = isset($_POST['str']) ? $_POST['str'] : '';
$fonction = isset($_POST['fonction']) ? $_POST['fonction'] : '';
$decalage = isset($_POST['decalage']) ? (int)$_POST['decalage'] : 2;
$resultat = "";

if ($str && $fonction) {
    if ($fonction === 'gras') {
        $resultat = gras($str);
    } elseif ($fonction === 'cesar') {
        $resultat = cesar($str, $decalage);
    } elseif ($fonction === 'plateforme') {
        $resultat = plateforme($str);
    }
}
?>

<form method="post">
    <input type="text" name="str" placeholder="Votre texte" value="<?php echo htmlspecialchars($str); ?>">
    <select name="fonction">
        <option value="gras" <?php if ($fonction === 'gras') echo "selected"; ?>>Gras</option>
        <option value="cesar" <?php if ($fonction === 'cesar') echo "selected"; ?>>Cesar</option>
        <option value="plateforme" <?php if ($fonction === 'plateforme') echo "selected"; ?>>Plateforme</option>
    </select>
    <input type="number" name="decalage" min="1" value="<?php echo $decalage; ?>" style="width:60px;">
    <button type="submit">Valider</button>
</form>
<?php
if ($resultat) {
    echo "<p>Résultat : $resultat</p>";
}
?>