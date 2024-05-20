<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardControllerTest extends WebTestCase
{
    public function testHomeRoute()
    {
        $client = static::createClient();

        $client->request('GET', '/card');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testApiRoute()
    {
        $client = static::createClient();

        $client->request('GET', '/api');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
