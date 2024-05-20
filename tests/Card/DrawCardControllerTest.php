<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DrawCardControllerTest extends WebTestCase
{
    public function testInitRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /card/init-endpointet
        $client->request('GET', '/card/init');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();
    }


}
