<?php

namespace Battleship;

class Position
{
    /**
     * @var string
     */
    private $column;
    private $row;

    /**
     * Position constructor.
     * @param string $letter
     * @param string $number
     */
    public function __construct($letter, $number)
    {
        $this->column = strtoupper($letter);
        $this->row = $number;
    }

    public function getColumn()
    {
        return $this->column;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function __toString()
    {
        return sprintf("%s%s", $this->column, $this->row);
    }


}