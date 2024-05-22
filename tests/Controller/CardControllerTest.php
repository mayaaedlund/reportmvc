<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $client->request('GET', '/card');

        $this->assertResponseIsSuccessful();
    }

    public function testApi()
    {
        $client = static::createClient();

        $client->request('GET', '/api');

        $this->assertResponseIsSuccessful();
    }

    public function testSession()
    {
        $client = static::createClient();

        $client->request('GET', '/session');

        $this->assertResponseIsSuccessful();
    }

    public function testResetSession()
    {
        $client = static::createClient();

        $client->request('POST', '/reset-session');

        $this->assertResponseRedirects('/session');
    }

    public function testDrawCard()
    {
        $client = static::createClient();

        $client->request('GET', '/card/draw/test');

        $this->assertResponseIsSuccessful();
    }

    public function testDeckCard()
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck');

        $this->assertResponseIsSuccessful();
    }

    public function testShuffleCard()
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck/shuffle');

        $this->assertResponseIsSuccessful();
    }
}
