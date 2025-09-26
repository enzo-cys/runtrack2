<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_error) die("Erreur de connexion: " . $mysqli->connect_error);

$sql = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$result = $mysqli->query($sql);
if (!$result) die("Erreur SQL: " . $mysqli->error);

echo "<table border='1'><thead><tr>";
while ($field = $result->fetch_field()) echo "<th>" . htmlspecialchars($field->name) . "</th>";
echo "</tr></thead><tbody>";
$row = $result->fetch_assoc();
echo "<tr><td>" . htmlspecialchars($row['capacite_totale']) . "</td></tr>";
echo "</tbody></table>";

$mysqli->close();
?>