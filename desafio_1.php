<?php

function seculoAno(int $ano): int
{
    $anoTerminaComDoisZeros = (substr($ano, -2) == "00");
    $seculo = intval(substr_replace($ano, "", -2)) + ($anoTerminaComDoisZeros ? 0 : 1);
    return $seculo;
}

echo seculoAno(1905);
echo "<br>";
echo seculoAno(1700);