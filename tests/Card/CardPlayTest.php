<?php

namespace App\Tests\Card;
namespace App\Card;

use App\Card\CardPlay;
use App\Card\Card;
use PHPUnit\Framework\TestCase;
use App\Card\CardPoints;
use App\Card\CardHand;

class CardPlayTest extends TestCase
{
    public function testConstructor()
    {
        $cardPlay = new CardPlay();
        $this->assertInstanceOf(CardHand::class, $cardPlay->getPlayerHand());
        $this->assertInstanceOf(CardHand::class, $cardPlay->getDealerHand());
    }

    public function testDrawCardForPlayer()
    {
        $cardPointsMock = $this->createMock(CardPoints::class);
        $cardPointsMock->expects($this->once())
            ->method('getPoints')
            ->willReturn(10); // Mock the points for the drawn card

        $playerHand = new CardHand();
        $deck = [];
        $points = 0;
        $drawnCard = '9'; // Mock the drawn card

        $cardPlay = new CardPlay();
        $updatedPoints = $cardPlay->drawCardForPlayer($playerHand, $deck, $cardPointsMock, $points, $drawnCard);

        $this->assertEquals(10, $updatedPoints);
    }

    public function testDrawCardForDealer()
    {
        $cardPointsMock = $this->createMock(CardPoints::class);
        $cardPointsMock->expects($this->once())
            ->method('getPoints')
            ->willReturn(10); // Mock the points for the drawn card

        $dealerPoints = 0;
        $drawnCard = '9'; // Mock the drawn card

        $cardPlay = new CardPlay();
        $updatedDealerPoints = $cardPlay->drawCardForDealer($cardPointsMock, $drawnCard, $dealerPoints);

        $this->assertEquals(10, $updatedDealerPoints);
    }
}



