<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MovieControllerTest extends WebTestCase
{
    private $client;

    public function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testSomething(): void
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h2', 'All selections. In one place');
    }

    public function testMovieDetail(): void
    {
        $crawler = $this->client->request('GET', '/1');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'Memento');

        $crawler = $this->client->request('GET', '/3');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('h1', 'The Dark Knight');
    }

}
