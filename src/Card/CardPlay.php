<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardHand;
use App\Card\CardGraphic;
use App\Card\CardPoints;

/**
 * Class CardPlay represents the game logic for playing cards.
 */
class CardPlay
{
    /**
     * The player's hand.
     *
     * @var CardHand
     */
    private $playerHand = [];

    /**
     * The dealer's hand.
     *
     * @var CardHand
     */
    private $dealerHand = [];

    /**
     * Constructor. Initializes player's and dealer's hands.
     */
    public function __construct()
    {
        $this->playerHand = new CardHand();
        $this->dealerHand = new CardHand();
    }

    /**
     * Get the player's hand.
     *
     * @return CardHand The player's hand.
     */
    public function getPlayerHand(): CardHand
    {
        return $this->playerHand;
    }

    /**
     * Get the dealer's hand.
     *
     * @return CardHand The dealer's hand.
     */
    public function getDealerHand(): CardHand
    {
        return $this->dealerHand;
    }

    /**
     * Update player's points.
     *
     * @param CardHand $playerHand The player's hand.
     * @param array $deck The deck of cards.
     * @param CardPoints $cardPoints The points associated with each card.
     * @param int $points The current points of the player.
     * @param mixed $drawnCard The drawn card.
     *
     * @return int The updated points of the player.
     */
    public function drawCardForPlayer(/** @scrutinizer ignore-unused */ CardHand $playerHand, /** @scrutinizer ignore-unused */ array &$deck, CardPoints $cardPoints, int $points, $drawnCard): int
    {
        // Calculate points for the drawn card
        $pointsForDrawnCard = $cardPoints->getPoints($drawnCard);

        // Update player's points
        $points += $pointsForDrawnCard;

        // Return updated points
        return $points;
    }

    /**
     * Update dealer's points.
     *
     * @param CardPoints $cardPoints The points associated with each card.
     * @param mixed $drawnCard The drawn card.
     * @param int $dealerPoints The current points of the dealer.
     *
     * @return int The updated points of the dealer.
     */
    public function drawCardForDealer(CardPoints $cardPoints, $drawnCard, int $dealerPoints): int
    {
        // Calculate points for the drawn card
        $pointsForDrawnCard = $cardPoints->getPoints($drawnCard);

        // Update dealer's points
        $dealerPoints += $pointsForDrawnCard;

        // Return updated points for the dealer
        return $dealerPoints;
    }
}
