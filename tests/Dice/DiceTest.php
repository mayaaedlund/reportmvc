<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Dice.
 */
class DiceTest extends TestCase
{
    /**
     * Test creating a new Dice object.
     */
    public function testCreateDice()
    {
        // Create a new Dice object
        $die = new Dice();

        // Verify that the object is an instance of Dice
        $this->assertInstanceOf("\App\Dice\Dice", $die);

        // Roll the dice and verify that the value is set within the valid range (1 to 6)
        $value = $die->roll();
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(6, $value);

        // Verify that the getValue method returns the rolled value
        $this->assertEquals($value, $die->getValue());

        // Verify that the getAsString method returns a non-empty string
        $asString = $die->getAsString();
        $this->assertNotEmpty($asString);
    }
}
