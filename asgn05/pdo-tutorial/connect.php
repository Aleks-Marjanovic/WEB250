<?php
try {
  $db = new PDO('mysql:host=localhost:3306;dbname=ivanades_testdb;charset=utf8', 'ivanades_web250', '3dngEswFU4BPDp7');
  
}

catch(Exception $e) {
  echo "An error has occured";
}

?>