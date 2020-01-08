<?php

use Battleship\Color;
use Battleship\GameController;
use Battleship\Position;
use Battleship\Ship;
use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;


/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private Ship $ship;
    private bool $validationResult;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a :arg1 ship with :arg2 positions
     * @param $size
     * @param $positions
     */
    public function iHaveAShipWithPositions($size, $positions)
    {
        $this->ship = new Ship("test", 0, Color::RED);

        $this->ship->setSize($size);
        for ($i = 0; $i < $positions; $i++) {
            array_push($this->ship->getPositions(), new Position('A', $i));
        }
    }

    /**
     * @When I check if the ship is valid
     */
    public function iCheckIfTheShipIsValid()
    {
        $this->validationResult = GameController::isShipValid($this->ship);
    }

    /**
     * @Then the result should be true
     */
    public function theResultShouldBeTrue()
    {
        Assert::assertTrue($this->validationResult);
    }

    /**
     * @Then the result should be false
     */
    public function theResultShouldBeFalse()
    {
        Assert::assertFalse($this->validationResult);
    }
}
