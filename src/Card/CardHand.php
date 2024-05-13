<?php

namespace App\Card;

use App\Card\Card;


/**
 * Represents a hand of cards.
 */
class CardHand
{

    /**
     * The cards in the hand.
     *
     * @var Card[]
     */
    private $hand = [];


    /**
     * Adds a card to the hand.
     *
     * @param Card $card The card to add.
     *
     * @return void
     */
    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

   
    /**
     * Adds all cards in order to the hand (52 cards).
     *
     * @return void
     */
    public function addOrderedCards(): void
    {
        for ($i = 1; $i <= 52; $i++) {
            $card = new Card();
            $this->add($card);
        }
    }

    /**
     * Gets the number of cards in the hand.
     *
     * @return int The number of cards.
     */
    public function getNumberCards(): int
    {
        return count($this->hand);
    }


    /**
     * Gets the string representation of each card in the hand.
     *
     * @return array The string representations of the cards.
     */
    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }


    /**
     * Calculates the total points of the hand based on card values.
     *
     * @return int The total points of the hand.
     */
    public function calculatePoints(): int
    {
        $cardPoints = new CardPoints();
        $points = 0;
        foreach ($this->hand as $card) {
            $points += $cardPoints->getPoints($card->getValue());
        }
        return $points;
    }
}
