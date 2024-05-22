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

}
