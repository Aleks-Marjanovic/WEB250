<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asgn03 Inheritance</title>
</head>
<body>
<h1>Inheritance Examples</h1>

<?php 
    include 'Bird.php';
    
    $bird = new Bird;
    echo '<p>The generic song of any bird is "' . Bird::$song . '".</p>';

    $fly_catcher = new YellowBelliedFlyCatcher;
    echo '<p>The song of the ' . YellowBelliedFlyCatcher::$name . ' on breeding grounds is "' . YellowBelliedFlyCatcher::$song . '".</p>';

    $kiwi = new Kiwi;
    echo "<p>The " . YellowBelliedFlyCatcher::$name . " " . YellowBelliedFlyCatcher::can_fly() . ".</p>";
    echo "<p>The " . Kiwi::$name . " " . Kiwi::can_fly() . ".</p>";    

    echo "<p>Number of birds is " . Bird::$instanceCount . ".</p>";
    echo "<p>Number of yellow-bellied flycatcher is " . YellowBelliedFlyCatcher::$instanceCount . ".<br>";
    echo "<p>Number of kiwis is " . Kiwi::$instanceCount . ".</p>";

    Bird::create();
    YellowBelliedFlyCatcher::create();
    Kiwi::create();

    echo "<p>Number of birds is " . Bird::$instanceCount . ".</p>";
    echo "<p>Number of yellow-bellied flycatcher is " . YellowBelliedFlyCatcher::$instanceCount . ".<br>";
    echo "<p>Number of kiwis is " . Kiwi::$instanceCount . ".</p>";


?>
    </body>
</html>

