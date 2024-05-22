<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardGameControllerTest extends WebTestCase
{
    public function testGame()
    {
        $client = static::createClient();

        $client->request('GET', '/game');

        $this->assertResponseIsSuccessful();
    }

    public function testGameStart()
    {
        $client = static::createClient();

        $client->request('GET', '/game/start');

        $this->assertResponseIsSuccessful();
    }

    public function testResetGame()
    {
        $client = static::createClient();
        $client->request('POST', '/reset-game');

        $this->assertResponseRedirects('/game/start');
    }

    public function testGameDoc()
    {
        $client = static::createClient();
        $client->request('GET', '/game/doc');

        $this->assertResponseIsSuccessful();
    }

    public function testApiGame()
    {
        $client = static::createClient();
        $client->request('GET', '/api/game');

        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());

        $responseData = json_decode($client->getResponse()->getContent(), true);
        $this->assertArrayHasKey('points', $responseData);
        $this->assertArrayHasKey('dealerpoints', $responseData);
    }

    public function testPlayerStay()
    {
        $client = static::createClient();
        $client->request('GET', '/game/player/stay');

        $this->assertResponseRedirects('/game/start');
    }

    public function testDealerStay()
    {
        $client = static::createClient();
        $client->request('GET', '/game/dealer/stay');

        $this->assertResponseRedirects('/game/start');
    }

    public function testMetrics()
    {
        $client = static::createClient();
        $client->request('GET', '/metrics');

        $this->assertResponseIsSuccessful();
    }

}
