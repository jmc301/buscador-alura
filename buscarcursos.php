<?php

require 'vendor/autoload.php';

Teste::metodo();
exit();

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao');

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL ;
}
