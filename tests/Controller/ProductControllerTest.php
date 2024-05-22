<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Product;

class ProductControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $client->request('GET', '/product');

        $this->assertResponseIsSuccessful();
    }

    public function testCreateProduct()
    {
        $client = static::createClient();

        $client->request('GET', '/product/create');

        $this->assertResponseIsSuccessful();
    }

    public function testShowAllProduct()
    {
        $client = static::createClient();

        $client->request('GET', '/product/show');

        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());
    }

    public function testShowProductById()
    {
        $client = static::createClient();

        $client->request('GET', '/product/show/2');

        $this->assertResponseIsSuccessful();
        $this->assertJson($client->getResponse()->getContent());
    }

    public function testViewAllProduct()
    {
        $client = static::createClient();
    
        $client->request('GET', '/product/view');
    
        $this->assertResponseIsSuccessful();
    }

}

