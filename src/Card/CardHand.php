<?php

namespace App\Card;

use App\Card\Card;

class CardHand
{
    private $hand = [];

    public function add(Card $card): void
    {
        $this->hand[] = $card;
    }

    // Metod för att lägga till alla kort i ordning i handen
    public function addOrderedCards(): void
    {
        for ($i = 1; $i <= 52; $i++) {
            $card = new Card();
            $this->add($card);
        }
    }

    public function getNumberDices(): int
    {
        return count($this->hand);
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }

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
