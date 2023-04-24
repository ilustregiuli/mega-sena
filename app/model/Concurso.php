<?php

namespace App\Model;

use App\Model\Sorteio;

class Concurso
{
    public function realizaConcurso(): array
    {
        require __DIR__ . '/view/index.php';
        $sorteio = new Sorteio();
        $sorteio->handle();
        return $sorteio->getnumerosSorteados();
    }

}    