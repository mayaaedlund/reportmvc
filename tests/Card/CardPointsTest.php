<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardPoints.
 */
class CardPointsTest extends TestCase
{
    /**
     * Test that card points can be found.
     */
    public function testGetCardPoints()
    {
        $cardPoints = new CardPoints();

        // Test för varje kortvärde från 1 till 52
        for ($i = 1; $i <= 52; $i++) {
            $points = $cardPoints->getPoints($i);
            // Kontrollera att poängen är inom det förväntade intervallet (1-13)
            $this->assertGreaterThanOrEqual(1, $points);
            $this->assertLessThanOrEqual(13, $points);
        }
    }
}
