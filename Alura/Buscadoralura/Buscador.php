<?php
namespace Alura\Buscadoralura;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpClient;
    private $crawler;
    
    public function __construct (ClientInterface $httpClient, Crawler $crawler) {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
        ;
    }
}

