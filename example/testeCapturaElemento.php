<?php

use Forseti\SpaceJam\PageObject\ConteudoHtmlSiteMapPageObject;
use Forseti\SpaceJam\Parser\FiltroParser;

require __DIR__ . '/../vendor/autoload.php';

$criaClasse = new ConteudoHtmlSiteMapPageObject();

$conteudoHtml = new FiltroParser($criaClasse->getHtmlSiteMap());

$objeto = $criaClasse->getParser()->getIterator()->current();

echo $objeto->descricao;
echo $objeto->link;

