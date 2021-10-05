<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=birddb;charset=utf8', 'root', 'mare270890');
  
}

catch(Exception $e) {
  echo "An error has occured";
}

?>