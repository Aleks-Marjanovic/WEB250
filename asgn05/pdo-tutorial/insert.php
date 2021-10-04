<?php

include 'connect.php';

$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES (:firstname, :lastname, :postcode)");

$stmt->bindValue(':firstname', 'Jenny');
$stmt->bindValue(':lastname', 'Jodpers');
$stmt->bindValue(':postcode', 'JJ22 9JJ');
$stmt->execute();

?>