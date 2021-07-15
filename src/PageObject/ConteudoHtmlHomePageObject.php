<?php

namespace Forseti\SpaceJam\PageObject;

use Forseti\SpaceJam\Enums\URL;

class ConteudoHtmlHomePageObject extends AbstractPageObject
{
    public function getRespostaHome()
    {
        return $this->request('GET',
            URL::PAGINA_INICIAL,
            ['verify' => false], 'Erro na requisição');
    }

    public function getHtmlHome()
    {
        return $this->getRespostaHome()->getBody()->getContents();
    }

}
