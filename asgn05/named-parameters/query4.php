<?php

include 'connect.php';

$stmt = $db->prepare("DELETE FROM birds WHERE common_name = :commonName");

$commonName = "Red Cardinal";

$stmt->bindParam(':commonName', $commonName);
$stmt->execute();

?>