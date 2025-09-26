<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_error) die("Erreur de connexion: " . $mysqli->connect_error);

$sql = "SELECT prenom, nom, naissance FROM etudiants 
        WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'
        ORDER BY naissance";
$result = $mysqli->query($sql);
if (!$result) die("Erreur SQL: " . $mysqli->error);

echo "<table border='1'><thead><tr>";
while ($field = $result->fetch_field()) echo "<th>" . htmlspecialchars($field->name) . "</th>";
echo "</tr></thead><tbody>";
if ($result->num_rows === 0) {
    echo "<tr><td colspan='3'>Aucun étudiant dans cet intervalle.</td></tr>";
} else {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $val) echo "<td>" . htmlspecialchars($val) . "</td>";
        echo "</tr>";
    }
}
echo "</tbody></table>";

$mysqli->close();
?>