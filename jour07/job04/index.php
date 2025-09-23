<?php
function calcule($a, $operation, $b) {
    if ($operation === "+") {
        return $a + $b;
    } 
    elseif ($operation === "-") {
        return $a - $b;
    } 
    elseif ($operation === "*") {
        return $a * $b;
    } 
    elseif ($operation === "/") {
        return $b != 0 ? $a / $b : "Division by zero error";
    } 
    elseif ($operation === "%") {
        return $b != 0 ? $a % $b : "Division by zero error";
    } 
    else {
        return "Invalid operation";
    }
}

// Exemple 
echo calcule(5, "+", 3); // 8
?>