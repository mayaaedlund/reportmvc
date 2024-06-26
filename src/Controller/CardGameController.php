<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardGraphic;
use App\Card\CardHand;
use App\Card\CardPoints;
use App\Card\CardPlay;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CardGameController extends AbstractController
{
    /**
     * Renders the game view.
     */
    #[Route("/game", name: "game", methods: ['GET'])]
    public function game(): Response
    {
        return $this->render('card/game.html.twig');
    }


    /**
     * Initializes everuthing that needs for the game to start.
     */
    #[Route("/game/start", name: "gamestart", methods: ['GET'])]
    public function gamestart(SessionInterface $session): Response
    {

        $game = new CardPlay();
        $playerHand = $game->getPlayerHand();
        $dealerHand = $game->getDealerHand();

        $session->set('playerHand', $playerHand);
        $session->set('dealerHand', $dealerHand);


        $deck = $session->get('deck', []);
        $cardGraphic = new CardGraphic();

        if (empty($deck)) {
            $cardGraphic = new CardGraphic();
            $deck = $cardGraphic->getAllNumbers();
            shuffle($deck);
            $session->set('deck', $deck);
        }

        $points = $session->get('points', 0);
        $dealerpoints = $session->get('dealerpoints', 0);

        $dealerCards = $session->get('dealer_cards', []);

        $cardSymbols = [];
        foreach ($dealerCards as $dealerCard) {
            $cardSymbols[] = $cardGraphic->getGraphic($dealerCard);
        }

        $drawnCards = $session->get('drawn_cards', []);

        $cardStrings = [];
        foreach ($drawnCards as $drawnCard) {
            if ($drawnCard !== null) {
                $cardStrings[] = $cardGraphic->getGraphic($drawnCard);
            }
        }

        $playerStopped = $session->get('playerStopped', false);
        $gameOn = $session->get('gameOn', true);

        $data = [
            "deck" => $deck,
            "dealerCards" => $dealerCards,
            "dealerpoints" => $dealerpoints,
            "drawnCards" => $drawnCards,
            "cardSymbols" => $cardSymbols,
            "cardStrings" => $cardStrings,
            "points" => $points,
            "playerStopped" => $playerStopped,
            "gameOn" => $gameOn
        ];

        return $this->render('card/gameplan.html.twig', $data);
    }


    /**
     * Draw Card for player
     */
    #[Route("/game/player", name: "play_card", methods: ['POST', 'GET'])]
    public function playCard(SessionInterface $session, CardPoints $cardPoints, CardPlay $cardPlay): Response
    {
        $playerHand = $session->get('playerHand');
        $deck = $session->get('deck');
        $points = $session->get('points', 0);
        $drawnCards = $session->get('drawn_cards', []); // Retrieve drawn cards from session

        // Dra ett kort från leken
        $drawnCard = array_pop($deck);
        $playerHand->add(new CardGraphic());

        // Lägg till det dragna kortet i sessionen
        $drawnCards[] = $drawnCard;
        $session->set('drawn_cards', $drawnCards);

        $points = $cardPlay->drawCardForPlayer($playerHand, $deck, $cardPoints, $points, $drawnCard);


        // Uppdatera sessionen med spelarens hand och leken
        $session->set('playerHand', $playerHand);
        $session->set('deck', $deck);
        $session->set('points', $points);

        // Kontrollera om spelaren gick över 21
        if ($points > 21) {
            $session->set('playerStopped', true);
            $session->set('gameOn', false);
            $this->addFlash('warning', 'Du gick över 21. Dealern vinner.');
        }

        return $this->redirectToRoute('gamestart');
    }


    /**
     * Draw Card for dealer
     */
    #[Route("/game/dealer", name: "dealer_card", methods: ['POST', 'GET'])]
    public function dealerCard(SessionInterface $session, CardPoints $cardPoints, CardPlay $cardPlay): Response
    {

        $deck = $session->get('deck', []);

        $dealerHand = $session->get('dealerHand', new CardHand());
        $dealerPoints = $session->get('dealerpoints', 0);

        $drawnCard = array_pop($deck);
        $dealerHand->add(new CardGraphic());

        $dealerCards = $session->get('dealer_cards', []);
        $dealerCards[] = $drawnCard;
        $session->set('dealer_cards', $dealerCards);

        $dealerPoints = $cardPlay->drawCardForDealer($cardPoints, $drawnCard, $dealerPoints);

        $session->set('dealerpoints', $dealerPoints);

        $session->set('deck', $deck);

        if ($dealerPoints > 16) {
            $session->set('gameOn', false);
            return $this->redirectToRoute('dealer_stay');
        } else {
            return $this->redirectToRoute('gamestart');
        }

    }


    /**
     * Dealer stays.
     */
    #[Route("/game/dealer/stay", name: "dealer_stay", methods: ['POST', 'GET'])]
    public function dealerStay(SessionInterface $session): Response
    {
        $playerPoints = $session->get('points', 0);
        $dealerPoints = $session->get('dealerpoints', 0);

        $playerDifference = abs(21 - $playerPoints);
        $dealerDifference = abs(21 - $dealerPoints);

        if ($playerPoints > 21 && $dealerPoints > 21) {
            $this->addFlash('warning', 'Både du och dealern gick över 21. Ingen vinner.');
        } elseif ($playerPoints > 21) {
            $this->addFlash('warning', 'Du gick över 21. Dealern vinner.');
        } elseif ($dealerPoints > 21) {
            $this->addFlash('warning', 'Dealern gick över 21. Du vinner.');
        } else {
            // Välj vinnaren baserat på den som är närmast 21
            if ($playerDifference < $dealerDifference) {
                $this->addFlash('warning', 'Du är närmast 21. Du vinner.');
            } elseif ($playerDifference > $dealerDifference) {
                $this->addFlash('warning', 'Dealern är närmast 21. Dealern vinner.');
            } else {
                $this->addFlash('warning', 'Det blev lika, ingen vinner.');
            }

            $session->set('gameOn', false);
        }

        return $this->redirectToRoute('gamestart');
    }

    /**
     * Player stays.
     */
    #[Route("/game/player/stay", name: "player_stay", methods: ['POST', 'GET'])]
    public function playerStay(SessionInterface $session): Response
    {
        $points = $session->get('points', 0);

        if ($points > 0) {
            $this->addFlash(
                'warning',
                'Nu är det dealerns tur!',
            );

            $session->set('playerStopped', true);
        }

        return $this->redirectToRoute('gamestart');
    }


    /**
     * Reset game, clear session.
     */
    #[Route("/reset-game", name: "reset_game", methods: ['POST'])]
    public function resetGame(SessionInterface $session): Response
    {
        $session->clear();

        return $this->redirectToRoute('gamestart');
    }

    /**
     * Game docs.
     */
    #[Route("/game/doc", name: "gamedoc", methods: ['GET'])]
    public function gamedock(): Response
    {

        return $this->render('card/gamedocs.html.twig');
    }

    /**
     * Api game, see leaderboard.
     */
    #[Route("/api/game", name: "api_game", methods: ['POST', 'GET'])]
    public function apigame(SessionInterface $session): Response
    {
        $points = $session->get('points', 0);
        $dealerpoints = $session->get('dealerpoints', 0);

        $response = [
            'points' => $points,
            'dealerpoints' => $dealerpoints,

        ];

        return new JsonResponse($response);
    }

    /**
     * Renders the metrics view.
     */
    #[Route("/metrics", name: "metrics", methods: ['GET'])]
    public function metrics(): Response
    {
        return $this->render('metric/metrics.html.twig');
    }
}
