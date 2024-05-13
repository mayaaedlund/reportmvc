<?php

namespace App\Card;

use App\Card\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand.
 */
class CardHandTest extends TestCase
{
    /**
     * Test that a card hand can be created.
     */
    public function testCreateCardHand()
    {
        $cardHand = new CardHand();
        $this->assertInstanceOf("\App\Card\CardHand", $cardHand);
    }


    /**
     * Test getting the number of cards in the hand.
     */
    public function testGetNumberCards()
    {
        $cardHand = new CardHand();
        $cardHand->addOrderedCards();
        $this->assertEquals(52, $cardHand->getNumberCards());
    }

    /**
     * Test getting the string representation of the cards in the hand.
     */
    public function testGetStringRepresentation()
    {
        $cardHand = new CardHand();
        $cardHand->addOrderedCards();
        $strings = $cardHand->getString();
        $this->assertCount(52, $strings);
        foreach ($strings as $string) {
            $this->assertIsString($string);
        }
    }

    /**
     * Test calculating the points of the cards in the hand.
     */
    public function testCalculateSumOfCardValues()
    {
        $cardPoints = new CardPoints();
        $sum = 0;
        for ($i = 1; $i <= 52; $i++) {
            $sum += $cardPoints->getPoints($i);
        }
        $expectedSum = 364; // Summan av kortvärdena från 1 till 52
        $this->assertEquals($expectedSum, $sum);
    }
}
