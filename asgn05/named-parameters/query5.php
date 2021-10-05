<?php

include 'connect.php';

$stmt = $db->prepare("SELECT * FROM birds WHERE backyard_tips LIKE :backyardTips");

$backyardTips = "%bird feeder%";
$stmt->bindParam(':backyardTips', $backyardTips);
$stmt->execute();

$results = $stmt->fetchAll();
foreach($results as $row) {
  $commonName = htmlentities($row['common_name']);
  echo $commonName . ' has bird feeder mentioned in its backyard tips.<br>';
}


?>