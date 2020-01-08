<?php

namespace Battleship;

use InvalidArgumentException;

class Letter
{

    public static $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');

    public static function value($index)
    {
        return self::$letters[$index];
    }

    public static function validate($letter) : string
    {
        if(!in_array($letter, self::$letters))
        {
            throw new InvalidArgumentException("Letter not exist");
        }

        return $letter;
    }
}