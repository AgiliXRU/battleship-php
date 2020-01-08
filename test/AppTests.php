<?php


use Battleship\Position;
use PHPUnit\Framework\TestCase;


class AppTests extends TestCase
{

    public function testParsePosition()
    {
        $actual = App::parsePosition("A1");
        $expected = new Position('A', 1);
        $this->assertEquals($expected, $actual);
    }

    public function testParsePosition2()
    {
        //given
        $expected = new Position('B', 1);
        //when
        $actual = App::parsePosition("B1");
        //then
        $this->assertEquals($expected, $actual);
    }

}