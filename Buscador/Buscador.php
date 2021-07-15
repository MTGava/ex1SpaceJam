<?php

namespace Forseti\SpaceJam;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpClient;
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar($url)
    {
        $resposta = $this->httpClient->request('GET', $url);

        $html = $resposta->getBody();

        $this->crawler->addHtmlContent($html);

        $filtro = $this->crawler->filter('center');

        $conteudo = [];

        foreach ($filtro as $item) {
            $conteudo[] = $item->textContent;
        }

        return $conteudo;
    }
}
