<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
if ($mysqli->connect_error) die("Erreur de connexion: " . $mysqli->connect_error);

$sql = "SELECT * FROM etudiants";
$result = $mysqli->query($sql);
if (!$result) die("Erreur SQL: " . $mysqli->error);

echo "<table border='1'><thead><tr>";
while ($field = $result->fetch_field()) {
    echo "<th>" . htmlspecialchars($field->name) . "</th>";
}
echo "</tr></thead><tbody>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $val) echo "<td>" . htmlspecialchars($val) . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";

$mysqli->close();
?>