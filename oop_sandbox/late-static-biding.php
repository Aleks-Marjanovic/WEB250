<?php


class Bicycle {
    protected static $wheels = 2;

    // change self to static to demonstrate late static binding

    public static function wheel_details() {
        $wheel_string = self::$wheels == 1 ? "1 wheel" : self::$wheels . " wheels";
        return "It has " . $wheel_string . ".";
    }
}

    class Unicycle extends Bicycle {
        protected static $wheels = 1;
    }


echo Bicycle::wheel_details() . "<br>";
echo Unicycle::wheel_details() . "<br>";