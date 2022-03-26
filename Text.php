<?php

class Text {

    private static $suffix = " $";

    const DIRHAM = " DHs";

    public static function publicWithZero($number){
        return self::withZero($number);
    }

    private static function withZero($number){
        if($number < 10){
            return '0'. $number . self::$suffix;
        } else {
            return $number . self::DIRHAM;
        }
    }
}