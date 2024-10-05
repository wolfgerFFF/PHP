<?php

function operation($num1, $num2, $operator)
{
        if($operator == "+")
            return $num1 + $num2;
        if($operator == "-")
            return $num1 - $num2;
        if($operator == "*")
            return $num1 * $num2;
        if($operator == "/")
            return $num1 / $num2;
        return "Нет такого оператора";       
    
}

$a = 4;
$b = 5;
$operator = "+";

echo operation($a, $b, $operator);
