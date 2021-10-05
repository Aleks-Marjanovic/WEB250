<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * from birds WHERE food = :food && habitat = :habitat");
$food = "insects";
$habitat = "open woodlands";
$stmt->bindParam(':food', $food);
$stmt->bindParam(':habitat', $habitat);
$stmt->execute();

while ($row = $stmt->fetch()) {
  $commonName = htmlentities($row['common_name']);
  echo $commonName . ' eats ' . $food . ' and lives in ' . $habitat . ".<br>";
}

?>
