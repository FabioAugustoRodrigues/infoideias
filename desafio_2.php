<?php

function numeroEhPrimo(int $numero): bool
{
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

function primos(int $inicial, int $final): array
{
    $numerosPrimos = array();

    for ($i = $inicial; $i < $final; $i++) {
        if (numeroEhPrimo($i)) {
            array_push($numerosPrimos, $i);
        }
    }

    return $numerosPrimos;
}

var_dump(primos(10, 29));