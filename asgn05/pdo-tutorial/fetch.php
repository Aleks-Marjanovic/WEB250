<?php

include 'connect.php';

$stmt = $db->query("SELECT * FROM names"); 

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . "<br>";
}

?>