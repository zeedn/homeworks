<?php

function someFunction($operation = '+', $operand1 = 2, $operand2 = 4)
{
    $args = func_get_args();
    echo implode($operation, array_slice($args, 1)) . ' = ' . eval('return ' . implode($operation, array_slice($args, 1)) . ' ; ') . '</br/>' . PHP_EOL;

}
someFunction('+', 1, 3, 5);
function someFunction1(array $operation = ['+'], $operand1 = 2, $operand2 = 4)
{
    $args = func_get_args();
    $operands = array_slice($args, 1);
    if (count($operands) < 2) {
        die('Количество операндов должно быть больше 1!');
    }
    foreach ($operands as $value) {
        if (!in_array(gettype($value), ['integer', 'double'])) {
            die("Не допустимый тип операнда (" . gettype($value) . ') ' . $value . "!");
        }
    }
    foreach ($operation as $value) {
        if (!in_array($value, ['+', '-', '*', '/', '%', '**'])) {
            die("Не допустимая арифметическая операция " . $value . "!");
        }
    }
    foreach ($operation as $value) {
        echo implode($value, $operands) . ' = ' . eval('return ' . implode($value, $operands) . ';') . PHP_EOL;
    }
}
someFunction1(['+'], 1, 3, 5);
?>