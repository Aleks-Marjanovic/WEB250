<?php

class Bird {
  var $commonName;
  var $food;
  var $nestPlacement;
  var $clutchSize;
  var $conservationLevel;
  var $birdSong;

  function birdSong(){
    return $this->birdSong;
  }
}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'ground';
$bird1->clutchSize = '2 - 6 eggs';
$bird1->conservationLevel = 'low';
$bird1->birdSong = 'drink-your-tea';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, insects, buds';
$bird2->nestPlacement = 'fields and on the edges of the woods, roadsides, and railroad rights-of-way';
$bird2->clutchSize = '3 - 4 eggs';
$bird2->conservationLevel = 'low';
$bird2->birdSong = 'what! what!';

echo "The name of the bird is " . $bird1->commonName . " and it feeds on " . $bird1->food . ". Nest placement is usually " . $bird1->nestPlacement . " where they tend to the average clutch size of " . $bird1->clutchSize . ". The conservation level of these birds is " .$bird1->conservationLevel . ", and their bird song tends to sound like '" . $bird1->birdSong() . "'.<br>";

echo "The name of the bird is " . $bird2->commonName . " and it feeds on " . $bird2->food . ". Nest placement is usually " . $bird2->nestPlacement . " where they tend to the average clutch size of " . $bird2->clutchSize . ". The conservation level of these birds is " .$bird2->conservationLevel . ", and their bird song tends to sound like '" . $bird2->birdSong() . "'.<br>";

?>
