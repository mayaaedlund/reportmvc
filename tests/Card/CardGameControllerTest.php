<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardGameControllerTest extends WebTestCase
{
    public function testGameStart()
    {
        $client = static::createClient();
        
        // Gör en förfrågan till /game/start-endpointet
        $client->request('GET', '/game/start');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();


        // Du kan även kontrollera andra aspekter av svaret, t.ex. sessionens status, renderade data etc.
    }
}
