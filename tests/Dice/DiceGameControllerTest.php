<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DiceGameControllerTest extends WebTestCase
{
    public function testHomeRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /game/pig-endpointet
        $client->request('GET', '/game/pig');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();
    }

    public function testTestRollDiceRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /game/pig/test/roll-endpointet
        $client->request('GET', '/game/pig/test/roll');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();
    }

    // Du kan fortsätta lägga till fler testmetoder för att testa andra endpoints eller funktionalitet i DiceGameController
}
