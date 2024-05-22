<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DrawCardControllerTest extends WebTestCase
{
    public function testInit()
    {
        $client = static::createClient();

        $client->request('GET', '/card/init');

        $this->assertResponseIsSuccessful();
    }

    public function testStart()
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck/draw');

        $this->assertResponseIsSuccessful();
    }

    public function testDrawMultiple()
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck/draw/5');

        $this->assertResponseIsSuccessful();
    }
}

