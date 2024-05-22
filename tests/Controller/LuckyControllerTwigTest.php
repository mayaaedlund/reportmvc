<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LuckyControllerTwigTest extends WebTestCase
{
    public function testNumberPage()
    {
        $client = static::createClient();
        $client->request('GET', '/lucky');

        $this->assertResponseIsSuccessful();
    }

    public function testHomePage()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }

    public function testReportPage()
    {
        $client = static::createClient();
        $client->request('GET', '/report');

        $this->assertResponseIsSuccessful();
    }
}
