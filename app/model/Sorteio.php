<?php

class Sorteio
{
    private $numerosSorteados = [];

    public function getnumerosSorteados(): array
    {
        return $this->numerosSorteados;
    }

    public function handle()
    {
        for($i = 0; $i < 6; $i++)
        {
            $numeroSorteado = rand(1,60);
            array_push($numerosSorteados,$numeroSorteado);

            for($j = 1; $j <= count($numerosSorteados); $j++)
            {
                if ($numeroSorteado === $numerosSorteados[$j - 1])
                {
                    $numerosSorteados[$j - 1] = rand(1,60);
                }
            }
        } 
    }
}    
    