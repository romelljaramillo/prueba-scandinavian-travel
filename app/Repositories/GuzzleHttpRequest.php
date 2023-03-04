<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest 
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;   
    }

    protected function get(string $url)
    {
        $renponse = $this->client->request('GET', $url);
        $content =  json_decode($renponse->getBody()->getContents());

        return $content->data;
    }
}
