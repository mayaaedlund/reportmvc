<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\MarineProtection;


class MarineProtectionControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/marine/protection');

        $this->assertResponseIsSuccessful();
    }

    public function testCreateMarineProtection()
    {
        $client = static::createClient();

        $client->request('GET', '/marine/create');

        $this->assertResponseIsSuccessful();

        $responseContent = $client->getResponse()->getContent();

        $expectedMessage = 'Saved new marine protection data.';
        $this->assertStringContainsString($expectedMessage, $responseContent);

        $entityManager = $client->getContainer()->get('doctrine')->getManager();
        $repository = $entityManager->getRepository(MarineProtection::class);

        $data = $repository->findAll();
        $this->assertNotEmpty($data);
    }

    public function testShowAllMarine()
    {
        $client = static::createClient();

        $client->request('GET', '/marine/show');

        $this->assertResponseIsSuccessful();

        $data = json_decode($client->getResponse()->getContent(), true);
    }

    public function testDeleteAllMarine()
    {
        $client = static::createClient();

        $client->request('GET', '/marine/delete');

        $this->assertResponseIsSuccessful();

        $responseContent = $client->getResponse()->getContent();

        $expectedMessage = 'All marine protection data has been deleted.';
        $this->assertStringContainsString($expectedMessage, $responseContent);

        $entityManager = $client->getContainer()->get('doctrine')->getManager();
        $repository = $entityManager->getRepository(MarineProtection::class);

        $data = $repository->findAll();
        $this->assertCount(0, $data);
    }


    public function testGetMarineData()
    {
        $client = static::createClient();

        $client->request('GET', '/marine/data');

        $this->assertResponseIsSuccessful();

        $this->assertJson($client->getResponse()->getContent());
    }
}
