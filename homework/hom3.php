<?php

function operation($arr = [], $op)
{
    if (!function_exists(checkNumber)) {
        function checkNumber($num) //проверка, что это целое или вещественное число, иначе возврвщает единицу - вторая проверка
        {
            if (is_int($num) || is_float($num))
                return $num;
            else return 1;
        }
    }
    switch ($op)
    {
        case '+': $func = function ($a, $b){
            return $a + $b;
        };
            break;
        case '-': $func = function ($a, $b){
            return $a - $b;
        };
            break;
        case '*': $func = function ($a, $b){
            return $a * $b;
        };
            break;
        case '/': $func = function ($a,$b) {
            return $a / $b;
        };
            break;
        default: $func = function (){
            return 'Nevernaya operacia';
        };

    }

    for($i = 1,$resNum = checkNumber($arr[0]),$res = (string)$arr[0]; $i < count($arr); $i++) {
        $res .= ' '. $op. ' ' . $arr[$i];
        $resNum = $func($resNum,checkNumber($arr[$i]));
    }
    return $res . ' = ' . $resNum;
}

$arr = [1,3,0];
$op = '/';

echo operation($arr,$op);


?>