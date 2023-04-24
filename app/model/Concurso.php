<?php

require_once __DIR__ . 'app/model/Sorteio.php';

class Concurso
{
    public function realizaConcurso(): array
    { 
        $sorteio = new Sorteio();
        $sorteio->handle();
        return $sorteio->getnumerosSorteados();
    }

}    