<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assitivel;

class Assistidor
{
    public function assitir(Assitivel $video)
    {
        $video->assistir();
    }


}
