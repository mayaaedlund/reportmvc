<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Library;

class LibraryControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/library');

        $this->assertResponseIsSuccessful();
    }

    public function testViewAllLibrary()
    {
        $client = static::createClient();

        $client->request('GET', '/library/view');

        $this->assertResponseIsSuccessful();
    }

    public function testShowBookById()
    {
        $client = static::createClient();
        $client->request('GET', '/library/show/4');

        $this->assertResponseIsSuccessful();
    }

    public function testLibraryDelete()
    {
        $client = static::createClient();

        $client->request('GET', '/library/delete');

        $this->assertResponseIsSuccessful();
    }

    public function testChangeBook()
    {
        $client = static::createClient();

        $client->request('GET', '/library/change/4');

        $this->assertResponseIsSuccessful();
    }

    public function testLibraryAdd()
    {
        $client = static::createClient();

        $client->request('GET', '/library/create');

        $this->assertResponseIsSuccessful();
    }

    public function testApiLibraryBooks()
    {
        $client = static::createClient();

        $client->request('GET', '/api/library/books');

        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());
    }
}
