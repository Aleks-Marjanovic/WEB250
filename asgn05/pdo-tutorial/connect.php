<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'root', 'mare270890');
  
}

catch(Exception $e) {
  echo "An error has occured";
}

?>