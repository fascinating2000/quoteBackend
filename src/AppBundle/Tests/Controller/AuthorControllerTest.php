<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bridge\PhpUnit;

class AuthorControllerTest extends WebTestCase
{
    public function testAuthorIndex()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        // Send request for get all authors
        $respnose = $client->request('GET', '/authors/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /authors/");
        $this->assertInternalType('array', $client->getResponse()->getContent());
    }

    public function testAuthorShow()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        // Send request for exact author
        $client->request('GET', '/authors/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /authors/{author_id}");
        $this->assertInternalType('object', $client->getResponse()->getContent());
    }

    public function testAuthorNew()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        $dataSucess = array(
          'authorName' => 'Test'
        );
        // Send request for add author
        $client->post('/authors', null, json_encode($dataSucess));
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /authors/");

        $dataFail = array();
        // Send request for add author
        $client->post('/authors', null, json_encode($dataFail));
        $this->assertEquals(204, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /authors/");
    }

    public function testAuthorEdit()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        $dataSucess = array(
            'authorName' => 'Test'
        );
        // Send request for edit author
        $client->post('/authors/1', null, json_encode($dataSucess));
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /authors/{author_id");

        $dataFail = array();
        // Send request for edit author
        $client->post('/authors/1', null, json_encode($dataFail));
        $this->assertEquals(204, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for POST /authors/{author_id");
    }

    public function testAuthorDelete()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Send request for delete author
        $client->delete('/authors/1');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for DELETE /authors/{author_id");

        $dataFail = array();
        // Send request for delete author
        $client->post('/authors/', null, json_encode($dataFail));
        $this->assertEquals(400, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for DELETE /authors/{author_id");
    }
}
