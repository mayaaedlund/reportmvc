<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardGraphic.
 */
class CardGraphicTest extends TestCase
{
    /**
     * Test that a card can be created.
     */
    public function testCreateCardGraphic()
    {
        $cardGraphic = new CardGraphic();
        $this->assertInstanceOf("\App\Card\CardGraphic", $cardGraphic);
    }

    /**
     * Test that the card graphic representation is returned correctly.
     */
    public function testGetCardGraphicRepresentation()
    {
        $cardGraphic = new CardGraphic();
        $cardValue = $cardGraphic->take();
        $graphicRepresentation = $cardGraphic->getGraphic($cardValue);
        $this->assertIsString($graphicRepresentation);
        $this->assertContains($graphicRepresentation, $cardGraphic->getAllCards());
    }

    /**
     * Test that all cards are returned.
     */
    public function testGetAllCards()
    {
        $cardGraphic = new CardGraphic();
        $cards = $cardGraphic->getAllCards();
        $this->assertIsArray($cards);
        $this->assertCount(52, $cards);
    }

    /**
     * Test that shuffled cards are returned.
     */
    public function testShuffledCards()
    {
        $cardGraphic = new CardGraphic();
        $shuffledCards = $cardGraphic->shuffledCards();
        $this->assertIsArray($shuffledCards);
        $this->assertCount(52, $shuffledCards);
        $this->assertNotEquals($shuffledCards, $cardGraphic->getAllCards());
    }
}
