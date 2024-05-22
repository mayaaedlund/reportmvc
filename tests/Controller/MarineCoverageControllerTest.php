<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\MarineCoverage;

class MarineCoverageControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/marine/coverage');

        $this->assertResponseIsSuccessful();
    }

    public function testCreateMarineCoverageData()
    {
        $client = static::createClient();

        $client->request('GET', '/coverage/create');

        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString('Saved new marine coverage data.', $client->getResponse()->getContent());
    }


    public function testShowMarineCoverageData()
    {
        $client = static::createClient();

        $client->request('GET', '/coverage/show');

        $this->assertResponseIsSuccessful();

        $data = json_decode($client->getResponse()->getContent(), true);
    }

    public function testDeleteAllMarineCoverage()
    {
        $client = static::createClient();

        $client->request('GET', '/coverage/delete');

        $this->assertResponseIsSuccessful();
    }

    public function testGetMarineData()
    {
        $client = static::createClient();

        $client->request('GET', '/coverage/data');

        $this->assertResponseIsSuccessful();

        $this->assertJson($client->getResponse()->getContent());
    }
}
