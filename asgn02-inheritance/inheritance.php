<?php

class Guitar {
  private $material = "wood";
  private $numberOfStrings = 6;
  protected $usesAmplifier = false;
  protected $usesPick = true;
  protected $stringType;
  
  public function setAmplifier($value) {
    $this->usesAmplifier = $value;
  }

  public function distortion(){
    if ($this->usesAmplifier) {
      $distortionString = "can produce distortion";
    } else {
      $distortionString = "can't produce distortion";
    }
    return $distortionString;
  }

}

class Classical extends Guitar{
  protected $stringType = "nylon";
  protected $usesPick = false;
}

class Acoustic extends Guitar {
  protected $stringType = "bronze";
  protected $usesAmplifier = true;
}

class Electric extends Guitar {
  protected $stringType = "metal";
  protected $usesAmplifier = true;
}

$cordoba = new Classical;
echo "<p>This guitar " . $cordoba->distortion() . "</p>";

$taylor = new Acoustic;
echo "<p>This guitar " . $taylor->distortion() . "</p>";
$martin = new Acoustic;
$martin->setAmplifier(false);
echo "<p>This guitar " . $martin->distortion() . "</p>";

$fender = new Electric;
echo "<p>This guitar " . $fender->distortion() . "</p>";

?>
