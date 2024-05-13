<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DiceGraphic.
 */
class DiceGraphicTest extends TestCase
{
    /**
     * Test the getAsString method.
     */
    public function testGetAsString()
    {
        // Test for each possible value of the dice
        for ($i = 1; $i <= 6; $i++) {
            // Create a DiceGraphic object with a specific value
            $dice = new DiceGraphic($i);

            // Check if the string representation matches the expected representation
            $this->assertEquals($dice->getAsString(), $dice->representation[$i - 1]);
        }
    }
}
