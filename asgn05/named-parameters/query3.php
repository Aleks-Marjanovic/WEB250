<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO birds (common_name, habitat, food, conservation_id, backyard_tips) VALUES (:commonName, :habitat, :food, :conservationID, :backyardTips)");

$commonName = "Red Cardinal";
$habitat = "open woodlands";
$food = "seeds";
$conservationID = 1;
$backyardTips = "easy to lure with seeds in your bird feeder.";

$stmt->bindParam(':commonName', $commonName);
$stmt->bindParam(':habitat', $habitat);
$stmt->bindParam(':food', $food);
$stmt->bindParam(':conservationID', $conservationID);
$stmt->bindParam(':backyardTips', $backyardTips);
$stmt->execute();

?>