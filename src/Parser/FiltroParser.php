<?php

namespace Forseti\SpaceJam\Parser;

use Forseti\SpaceJam\Iterator\ConteudoHtmlIterator;

class FiltroParser extends AbstractParser
{
    public function getIterator()
    {
        return new ConteudoHtmlIterator($this->crawler->filterXPath('//html/body/center/table'));
    }
}
