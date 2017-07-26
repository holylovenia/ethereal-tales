<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EtherealTalesTest extends TestCase
{
    public function testInputNewEtherealTale()
    {
        $response = $this->json('POST', '/api/v1/etherealtales', ['author' => 'test', 'subject' => 'test subject', 'tale' => 'test tale']);
        $response->assertResponseStatus(200);
    }

    public function testFetchEtherealTales()
    {
        $response = $this->json('GET', '/api/v1/etherealtales');
        $response->assertResponseStatus(200);
    }
}
