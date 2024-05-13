<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class Card.
 */
class CardTest extends TestCase
{
    /**
     * Test that a card can be created.
     */
    public function testCreateCard()
    {
        $card = new Card();
        $this->assertInstanceOf("\App\Card\Card", $card);
    }

    /**
     * Test that the card value is within expected range when taking a card.
     */
    public function testTakeCard()
    {
        $card = new Card();
        $value = $card->take();
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(52, $value);
    }

    /**
     * Test that the card value is returned correctly.
     */
    public function testGetCardValue()
    {
        $card = new Card();
        $card->take();
        $value = $card->getValue();
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(52, $value);
    }

    /**
     * Test that the card value is returned as a string.
     */
    public function testGetCardAsString()
    {
        $card = new Card();
        $card->take();
        $asString = $card->getAsString();
        $this->assertIsString($asString);
    }

    /**
     * Test that all numbers from 1 to 52 are returned.
     */
    public function testGetAllNumbers()
    {
        $card = new Card();
        $numbers = $card->getAllNumbers();
        $this->assertIsArray($numbers);
        $this->assertCount(52, $numbers);
        $this->assertEquals(range(1, 52), $numbers);
    }
}
