<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Repository\SustainableFishRepository;
use App\Entity\SustainableFish;


class SustainableFishControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/sustainable');

        $this->assertResponseIsSuccessful();
    }

    /*
    public function testCreateSustainableFishData()
    {
        $client = static::createClient();

        $client->request('GET', '/sustainable/create');

        $this->assertResponseIsSuccessful();

        $responseContent = $client->getResponse()->getContent();
        $expectedMessage = 'Saved new sustainable fish data.';
        $this->assertStringContainsString($expectedMessage, $responseContent);


        $entityManager = $client->getContainer()->get('doctrine')->getManager();
        $repository = $entityManager->getRepository(SustainableFish::class);
        $data = $repository->findAll();
        $this->assertNotEmpty($data);
    }*/

    /*
    public function testGetSustainableFishData()
    {
        $client = static::createClient();

        $client->request('GET', '/sustainable/data');

        $this->assertResponseIsSuccessful();

        $responseContent = $client->getResponse()->getContent();
        $this->assertJson($responseContent);

        $data = json_decode($responseContent, true);
        $this->assertIsArray($data);
    }*/

    public function testDeleteAllSustainable()
    {
        $client = static::createClient();

        $repository = $this->createMock(SustainableFishRepository::class);
        
        $repository->method('findAll')->willReturn([]);

        $client->getContainer()->set(SustainableFishRepository::class, $repository);

        $client->request('GET', '/sustainable/delete');

        $this->assertResponseIsSuccessful();

        $responseContent = $client->getResponse()->getContent();
        $expectedMessage = 'All sustainable fish data has been deleted.';
        $this->assertStringContainsString($expectedMessage, $responseContent);
    }
}
