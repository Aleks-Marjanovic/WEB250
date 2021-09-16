<?php

class Bird {
    public static $habitat;
    public static $food;
    public static $nesting = "tree";
    public static $conservation;
    public static $song = "chirp";
    public static $flying = true;
    public static $instanceCount = 0;
    public static $eggNum = 0;  

    public static function create(){
        $className = get_called_class();
        $obj = new $className;
        self::$instanceCount++;
        return $obj;
    }

    public static function can_fly() {
        return $flying_string = static::$flying ? 'can fly' : 'is stuck on the ground';
    }

}

class YellowBelliedFlyCatcher extends Bird {
    public static $name = "yellow-bellied flycatcher";
    public static $diet = "mostly insects.";
    public static $song = "flat chilk";
    public static $eggNum = "3-4, sometimes 5";
}

class Kiwi extends Bird {
    public static $name = "kiwi";
    public static $diet = "omnivorous";
    public static $flying = false;
}
