<?php

namespace Forseti\SpaceJam\PageObject;

use Forseti\SpaceJam\Enums\URL;
use Forseti\SpaceJam\Parser\FiltroParser;

class ConteudoHtmlSiteMapPageObject extends AbstractPageObject
{
    public function getRespostaSiteMap()
    {
        return $this->request('GET',
            URL::SITE_MAP,
            ['verify' => false], 'Erro na requisição');
    }

    public function getHtmlSiteMap()
    {
        return $this->getRespostaSiteMap()->getBody()->getContents();
    }

    public function getParser()
    {
        return new FiltroParser($this->getHtmlSiteMap());
    }

}