<?php

class Guitar {
  var $material = "wood";
  var $numberOfStrings = 6;
  var $usesAmplifier = false;
  var $usesPick = true;
  var $stringType;

  function distortion(){
    if ($this->usesAmplifier) {
      $distortionString = "can produce distortion";
    } else {
      $distortionString = "can't produce distortion";
    }
    return $distortionString;
  }
}

class Classical extends Guitar{
  var $stringType = "nylon";
  var $usesPick = false;
}

class Acoustic extends Guitar {
  var $stringType = "bronze";
  var $usesAmplifier = true;
}

class Electric extends Guitar {
  var $stringType = "metal";
  var $usesAmplifier = true;
}

$cordoba = new Classical;
echo "<p>This guitar " . $cordoba->distortion() . "</p>";

$taylor = new Acoustic;
echo "<p>This guitar " . $taylor->distortion() . "</p>";
$martin = new Acoustic;
$martin->usesAmplifier = false;
echo "<p>This guitar " . $martin->distortion() . "</p>";

$fender = new Electric;
echo "<p>This guitar " . $fender->distortion() . "</p>";

?>
