<?php

include 'connect.php';

$stmt = $db->prepare("DELETE FROM names WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Jenny');
$stmt->execute();

?>