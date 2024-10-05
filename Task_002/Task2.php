<?php

function  mathOperation($arg1, $arg2, $operation)
{
    switch ($operation)
    {
        case "+":
            return $arg1 + $arg2;
            break;
        case "-":
            return $arg1 - $arg2;
            break;
        case "*":
            return $arg1 * $arg2;
            break;
        case "/":
            return $arg1 / $arg2;
            break;
        default:
            return "Нет такого оператора";
    }
}

$a = 4;
$b = 5;
$operation = "+";

echo mathOperation($a, $b, $operation);
