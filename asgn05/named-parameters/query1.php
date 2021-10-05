<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * from birds WHERE food = :food");
$food = "insects";
$stmt->bindParam(':food', $food);
$stmt->execute();

while ($row = $stmt->fetch()) {
  $commonName = htmlentities($row['common_name']);
  echo $commonName . ' eats ' . $food . ".<br>";
}

?>
