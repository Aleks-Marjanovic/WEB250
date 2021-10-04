<?php

include 'connect.php';

$stmt = $db->prepare("UPDATE names set postcode = :postcode WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Jenny');
$stmt->bindValue(':postcode', 'UI89 7TY');
$stmt->execute();

?>