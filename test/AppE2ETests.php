<?php

use PHPUnit\Framework\TestCase;

final class AppE2ETests extends TestCase
{
    public function testPlayGameShotHits()
    {
        $input = "a1\na2\na3\na4\na5\nb1\nb2\nb3\nb4\nc1\nc2\nc3\nd1\nd2\nd3\ne1\ne2\nb4\n";
        ob_start();
        try {
            system("echo \"$input\" | composer run game 2>&1");
        } catch (Exception $exception) {
        }
        $out = ob_get_contents();
        ob_end_clean();
        $this->assertStringContainsString("Welcome to Battleship", $out);
        $this->assertStringContainsString("Yeah ! Nice hit !", $out);
    }

    public function testPlayGameShotMisses()
    {
        $input = "a1\na2\na3\na4\na5\nb1\nb2\nb3\nb4\nc1\nc2\nc3\nd1\nd2\nd3\ne1\ne2\ne4\n";

        ob_start();
        try {
            system("echo \"$input\" | composer run game 2>&1");
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
        $out = ob_get_contents();
        ob_end_clean();
        $this->assertStringContainsString("Welcome to Battleship", $out);
        $this->assertStringContainsString("Miss", $out);
    }

}
