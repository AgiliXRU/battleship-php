<?php

//use Battleship\Color;

class Console
{
    function resetForegroundColor()
    {
        echo(Battleship\Color::DEFAULT_GREY);
    }

    function setForegroundColor($color)
    {
        echo($color);
    }

    function println($line = "")
    {

//        fwrite(STDERR, "$line\n");
        echo "$line\n";
    }
}