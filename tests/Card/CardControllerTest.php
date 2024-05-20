<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardControllerTest extends WebTestCase
{
    protected function restoreExceptionHandler(): void
    {
        while (true) {
            $previousHandler = set_exception_handler(static fn() => null);

            restore_exception_handler();

            if ($previousHandler === null) {
                break;
            }

            restore_exception_handler();
        }
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->restoreExceptionHandler();
    }

    public function testHomeRoute()
    {
        $client = static::createClient();

        $client->request('GET', '/card');
        $response = $client->getResponse();

        if ($response->getStatusCode() !== 200) {
            // Log the response content for debugging
            echo $response->getContent();
        }

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testApiRoute()
    {
        $client = static::createClient();

        $client->request('GET', '/api');
        $response = $client->getResponse();

        if ($response->getStatusCode() !== 200) {
            // Log the response content for debugging
            echo $response->getContent();
        }

        $this->assertEquals(200, $response->getStatusCode());
    }
}
