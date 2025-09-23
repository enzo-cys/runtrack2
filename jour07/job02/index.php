<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } 
    else {
        echo "Bonsoir";
    }
}

// Exemple
bonjour(true);
echo "<br>";
bonjour(false);
?>