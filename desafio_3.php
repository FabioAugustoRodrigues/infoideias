<?php

function numerosQueNaoSeRepetem(array $numeros): array
{
    $numerosQueNaoSeRepetem = array();

    for ($i = 0; $i < count($numeros); $i++) {
        $numeroNaoRepete = true;
        for ($j = 0; $j < count($numeros); $j++) {
            if ($numeros[$i] == $numeros[$j] && $i != $j) {
                $numeroNaoRepete = false;
                break;
            }
        }

        if ($numeroNaoRepete) {
            array_push($numerosQueNaoSeRepetem, $numeros[$i]);
        }
    }

    return $numerosQueNaoSeRepetem;
}

var_dump(numerosQueNaoSeRepetem([2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]));