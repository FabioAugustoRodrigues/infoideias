<?php

function arrayEhCrescente(array $numeros): bool
{
    for ($i = 1; $i < count($numeros); $i++) {
        if ($numeros[$i - 1] >= $numeros[$i]) {
            return false;
        }
    }

    return true;
}

function SequenciaCrescente(array $numeros): bool
{
    for ($i = 0; $i < count($numeros); $i++) {
        $arrayComElementoRemovido = $numeros;
        unset($arrayComElementoRemovido[$i]);
        
        if (arrayEhCrescente(array_values($arrayComElementoRemovido))) {
            return true;
        }
    }

    return false;
}

var_dump(SequenciaCrescente([1, 3, 2, 1]));
echo "<br>";
var_dump(SequenciaCrescente([1, 3, 2]));
echo "<br>";
var_dump(SequenciaCrescente([1, 2, 1, 2]));
echo "<br>";
var_dump(SequenciaCrescente([3, 6, 5, 8, 10, 20, 15]));
echo "<br>";
var_dump(SequenciaCrescente([1, 1, 2, 3, 4, 4]));
echo "<br>";
var_dump(SequenciaCrescente([1, 4, 10, 4, 2]));
echo "<br>";
var_dump(SequenciaCrescente([10, 1, 2, 3, 4, 5]));
echo "<br>";
var_dump(SequenciaCrescente([1, 1, 1, 2, 3]));
echo "<br>";
var_dump(SequenciaCrescente([0, -2, 5, 6]));
echo "<br>";
var_dump(SequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]));
echo "<br>";
var_dump(SequenciaCrescente([40, 50, 60, 10, 20, 30]));
echo "<br>";
var_dump(SequenciaCrescente([1, 1]));
echo "<br>";
var_dump(SequenciaCrescente([1, 2, 5, 3, 5]));
echo "<br>";
var_dump(SequenciaCrescente([1, 2, 5, 5, 5]));
echo "<br>";
var_dump(SequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]));
echo "<br>";
var_dump(SequenciaCrescente([1, 2, 3, 4, 3, 6]));
echo "<br>";
var_dump(SequenciaCrescente([1, 2, 3, 4, 99, 5, 6]));
echo "<br>";
var_dump(SequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45] ));
echo "<br>";
var_dump(SequenciaCrescente([3, 5, 67, 98, 3]));