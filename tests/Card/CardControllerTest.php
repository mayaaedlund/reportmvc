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

        $crawler = $client->request('GET', '/card');

        // Kontrollera att <h1> elementet innehåller texten 'Card game'
        $this->assertSelectorTextContains('h1', 'Card game');
    }
}
