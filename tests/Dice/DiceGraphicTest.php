<?php

use PHPUnit\Framework\TestCase;
use App\Dice\DiceGraphic;

class DiceGraphicTest extends TestCase
{
    public function testGetAsString()
    {
        $dice = new DiceGraphic();

        // Testing all possible values
        $expectedResults = ['⚀', '⚁', '⚂', '⚃', '⚄', '⚅'];
        for ($i = 1; $i <= 6; $i++) {
            $dice->setValue($i); // Set the dice value
            $this->assertEquals($expectedResults[$i - 1], $dice->getAsString());
        }
    }
}
