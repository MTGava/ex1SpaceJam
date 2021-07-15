<?php

use Forseti\SpaceJam\PageObject\ConteudoHtmlHomePageObject;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/conteudoCss.php';

$criaClasse = new ConteudoHtmlHomePageObject();

$conteudoHtml = $criaClasse->getHtmlHome();

var_dump($conteudoHtml);
