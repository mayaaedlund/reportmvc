<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardControllerTest extends WebTestCase
{
    public function testHomeRoute()
    {
        $client = static::createClient();

        $client->request('GET', '/card');
        $response = $client->getResponse();
        
        if ($response->getStatusCode() !== 200) {
            file_put_contents('php://stderr', $response->getContent());
        }

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testApiRoute()
    {
        $client = static::createClient();

        $client->request('GET', '/api');
        $response = $client->getResponse();
        
        if ($response->getStatusCode() !== 200) {
            file_put_contents('php://stderr', $response->getContent());
        }

        $this->assertEquals(200, $response->getStatusCode());
    }
}
