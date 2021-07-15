<?php

namespace Forseti\SpaceJam\Iterator;

class ConteudoHtmlIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();
        $objeto = new \stdClass();
        $objeto->descricao = $node->getElementsByTagName('td')->item(1)->textContent;
        $objeto->link = $node->getElementsByTagName('td')->item(2)->textContent;

        return $objeto;
    }
}
