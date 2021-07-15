<?php

use Forseti\SpaceJam\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

require 'vendor/autoload.php';

$client = new Client(['base_uri' => 'https://www.spacejam.com/1996/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$conteudo = $buscador->buscar('/1996/cmp/tunes/tunesframes.html');

print_r($conteudo);
