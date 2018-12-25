<?php

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            return avg($arg1, $arg2);
        case '-':
            return red($arg1, $arg2);
        case '*':
            return mul($arg1, $arg2);
        case '/':
            return dif($arg1, $arg2);
    }
}

function avg($arg1, $arg2){
    $avg = $arg1 + $arg2;
    return $avg;
}
function red($arg1, $arg2){
    $red = $arg1 - $arg2;
    return $red;
}
function mul($arg1, $arg2){
    $mul = $arg1 * $arg2;
    return $mul;
}
function dif($arg1, $arg2){
    $dif = $arg1 / $arg2;
    return $dif;
}
echo mathOperation(4,5, '+') . "<br>";
echo mathOperation(4,5, '-') . "<br>";
echo mathOperation(4,5, '*') . "<br>";
echo mathOperation(4,5, '/');

?>