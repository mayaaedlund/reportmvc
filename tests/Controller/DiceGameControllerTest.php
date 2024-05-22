<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DiceGameControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig');

        $this->assertResponseIsSuccessful();
    }

    public function testTestRollDice()
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/test/roll');

        $this->assertResponseIsSuccessful();
    }

    public function testTestRollDices()
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/test/roll/3');

        $this->assertResponseIsSuccessful();
    }

    public function testTestDiceHand()
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/test/dicehand/4');

        $this->assertResponseIsSuccessful();
    }

    public function testInit()
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/init');

        $this->assertResponseIsSuccessful();
    }

    public function testInitCallback()
    {
        $client = static::createClient();

        $client->request('POST', '/game/pig/init', ['num_dices' => 2]);

        $this->assertResponseRedirects('/game/pig/play');
    }


}
