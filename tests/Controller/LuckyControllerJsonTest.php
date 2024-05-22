<?php

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyControllerJsonTest extends WebTestCase
{
    public function testInit()
    {
        $client = static::createClient();
        $client->request('GET', '/api');
        $this->assertResponseIsSuccessful();
    }

    public function testJsonNumber()
    {
        $client = static::createClient();
        $client->request('GET', '/api/lucky/number');
        $this->assertResponseIsSuccessful();
    }

    public function testGetQuote()
    {
        $client = static::createClient();
        $client->request('GET', '/api/quote');
        $this->assertResponseIsSuccessful();
    }

    public function testDeck()
    {
        $client = static::createClient();
        $client->request('GET', '/api/deck');
        $this->assertResponseIsSuccessful();
    }
}
