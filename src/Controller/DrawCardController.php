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

class DrawCardController extends AbstractController
{
    /**
     * Renders the card view.
     */
    #[Route("/card/init", name: "card_init_get", methods: ['GET'])]
    public function init(): Response
    {
        return $this->render('card/init.html.twig');
    }

    /**
     * Initialize the session for the card deck.
     */
    #[Route("/card/init", name: "card_init_post", methods: ['POST'])]
    public function initCallback(
        SessionInterface $session,
        CardGraphic $cardGraphic
    ): Response {
        // Skapa ett nytt deck och spara det i sessionen om det inte redan finns
        if (!$session->has('deck')) {
            $deck = $cardGraphic->getAllNumbers(); // Hämta alla kortnummer
            $session->set('deck', $deck);
        }

        $hand = new CardHand();

        // Sparar den tomma handen i sessionen
        $session->set('hand', $hand);

        return $this->redirectToRoute('card_draw');
    }


    /**
     * Draw card to deck.
     */
    #[Route("/card/deck/draw", name: "card_draw", methods: ['GET'])]
    public function start(SessionInterface $session, CardGraphic $cardGraphic): Response
    {
        $hand = $session->get('hand', new CardHand());

        $deck = $session->get('deck', []);

        if (empty($deck)) {
            $deck = $cardGraphic->getAllNumbers();
            shuffle($deck);
            $session->set('deck', $deck);
        }

        if ($hand->getNumberCards() === 0) {
            $hand->add(new CardGraphic());
        }

        $drawnCards = $session->get('drawn_cards', []);
        $cardsLeft = count($deck);

        $cardStrings = array_map(function ($drawnCard) use ($cardGraphic) {
            return $cardGraphic->getGraphic($drawnCard);
        }, $drawnCards);

        $data = compact('deck', 'drawnCards', 'cardsLeft', 'cardStrings');

        return $this->render('card/play.html.twig', $data);
    }



    /**
     * Add card to deck.
     */
    #[Route("/card/draw/add", name: "add_card", methods: ['POST'])]
    public function addCard(SessionInterface $session): Response
    {
        $deck = $session->get('deck', []);

        if (count($deck) < 1) {
            $this->addFlash(
                'warning',
                'Not enough cards in deck'
            );
            return $this->redirectToRoute('card_draw');
        }

        $randomKey = array_rand($deck);
        $drawnCard = $deck[$randomKey];

        unset($deck[$randomKey]);

        $session->set('deck', $deck);

        $drawnCards = $session->get('drawn_cards', []);
        $drawnCards[] = $drawnCard;
        $session->set('drawn_cards', $drawnCards);

        return $this->redirectToRoute('card_draw');
    }


    /**
     * Draw a number of cards.
     */
    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_multiple")]
    public function draw_multiple(int $num, SessionInterface $session, CardGraphic $cardGraphic): Response
    {
        if (!$session->has('deck')) {
            $deck = $cardGraphic->getAllNumbers();
            $session->set('deck', $deck);
        }

        $deck = $session->get('deck', []);

        if (count($deck) < $num) {
            $this->addFlash(
                'warning',
                'Not enough cards in deck'
            );
        }

        if ($num > 52) {
            throw new \Exception("Can not draw more than 52 cards!");
        }

        $drawnCards = $session->get('drawn_cards', []);

        for ($i = 0; $i < $num; $i++) {
            if (empty($deck)) {
                break;
            }

            $randomKey = array_rand($deck);
            $drawnCard = $deck[$randomKey];
            unset($deck[$randomKey]);
            $drawnCards[] = $drawnCard;

        }

        $session->set('deck', $deck);
        $session->set('drawn_cards', $drawnCards);

        // Räkna antalet kort kvar i kortleken
        $cardsLeft = count($deck);

        $cardStrings = [];

        foreach ($drawnCards as $drawnCard) {
            $cardStrings[] = $cardGraphic->getGraphic($drawnCard);
        }

        $data = [
            "deck" => $deck,
            "drawnCards" => $drawnCards,
            "cardsLeft" => $cardsLeft,
            "cardStrings" => $cardStrings,
        ];

        return $this->render('card/multiple.html.twig', $data);
    }
}
