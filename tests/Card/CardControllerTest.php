<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardControllerTest extends WebTestCase
{
    public function testHomeRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /card-endpointet
        $client->request('GET', '/card');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();
    }

    public function testApiRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /api-endpointet
        $client->request('GET', '/api');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();
    }

    public function testSessionRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /session-endpointet
        $client->request('GET', '/session');

        // Kontrollera att förfrågan har lyckats
        $this->assertResponseIsSuccessful();
    }

    public function testResetSessionRoute()
    {
        $client = static::createClient();

        // Gör en förfrågan till /reset-session-endpointet
        $client->request('POST', '/reset-session');

        // Kontrollera att förfrågan resulterade i en omdirigering
        $this->assertResponseRedirects('/session');
    }

    // Fortsätt att lägga till testmetoder för de andra endpoints i CardController som du vill testa.
}
