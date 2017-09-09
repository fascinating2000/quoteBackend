<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class QuoteControllerTest extends WebTestCase
{
    public function testQuoteIndex()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        // Send request for get all quotes
        $respnose = $client->request('GET', '/quote/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /quote/");
        $this->assertInternalType('array', $client->getResponse()->getContent());
    }

    public function testAuthorQuoteIndex()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        // Send request for get all quotes for author
        $respnose = $client->request('GET', '/author/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /author/{author_id");
        $this->assertInternalType('array', $client->getResponse()->getContent());
    }

    public function testQuotePull()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        // Send request for get a quote
        $respnose = $client->request('GET', '/quote/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /quote/1");
        $this->assertInternalType('object', $client->getResponse()->getContent());
    }

    public function testQuoteNew()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        $dataSucess = array(
            'authorName' => 'Test',
            'quoteContent' => 'Test'
        );
        // Send request for add quote
        $client->post('/quote', null, json_encode($dataSucess));
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /quote/");

        $dataFail = array(
            'authorName' => 'Test'
        );
        // Send request for add quote
        $client->post('/quote', null, json_encode($dataFail));
        $this->assertEquals(204, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /quote/");
    }

    public function testQuoteEdit()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        $dataSucess = array(
            'authorName' => 'Test',
            'quoteContent' => 'Test'
        );
        // Send request for edit quote
        $client->post('/quote/1', null, json_encode($dataSucess));
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /quote/{quote_id");

        $dataFail = array(
            'authorName' => 'Test'
        );
        // Send request for edit quote
        $client->post('/quote/1', null, json_encode($dataFail));
        $this->assertEquals(204, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /quote/{quote_id}");
    }

    public function testQuoteDelete()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Send request for delete quote
        $client->delete('/quote/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for DELETE /quote/{quote_id}");

        $dataFail = array();
        // Send request for delete quote
        $client->post('/quote/', null, json_encode($dataFail));
        $this->assertEquals(400, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for DELETE /authors/{quote_id");
    }

    public function testQuoteRandom()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        // Send request for get a random quote
        $respnose = $client->request('GET', '/quoteRandom/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /quoteRandom/");
        $this->assertInternalType('object', $client->getResponse()->getContent());
    }
}
