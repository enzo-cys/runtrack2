<?php
echo '<pre>';

$hauteur = 5;

for ($ligne = 0; $ligne < $hauteur; $ligne += 1) { 
    $padding = $hauteur - $ligne - 1; 
    echo str_repeat(' ', $padding); 

    if ($ligne === 0) { 
        echo '/' . '\\';
    } elseif ($ligne === $hauteur - 1) { 
        echo '/' . str_repeat('_', $ligne * 2) . '\\'; 
    } else { 
        echo '/' . str_repeat(' ', $ligne * 2) . '\\'; 
    }

    echo "\n";
}

echo "</pre>";