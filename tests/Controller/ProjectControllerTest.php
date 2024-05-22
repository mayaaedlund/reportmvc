<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $client->request('GET', '/proj');

        $this->assertResponseIsSuccessful();
    }

    public function testAbout()
    {
        $client = static::createClient();

        $client->request('GET', '/proj/about');

        $this->assertResponseIsSuccessful();
    }

    public function testStatistic()
    {
        $client = static::createClient();

        $client->request('GET', '/proj/statistic');

        $this->assertResponseIsSuccessful();
    }

    public function testProjApi()
    {
        $client = static::createClient();

        $client->request('GET', '/proj/api');

        $this->assertResponseIsSuccessful();
    }

    public function testDatabase()
    {
        $client = static::createClient();

        $client->request('GET', '/proj/about/database');

        $this->assertResponseIsSuccessful();
    }
}

