<?php

namespace Battleship;

class Letter
{

    public static $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');

    public static function value($index)
    {
        return self::$letters[$index];
    }
}