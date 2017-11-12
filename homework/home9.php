<?php

function a ($str = 'А роза упала на лапу Азора') {
    $result = explode(' ', $str);
    shuffle($result);
    return implode(' ', $result);
}
function b ($str = 'Аргентина манит негра') {
    $result = explode(' ', $str);
    shuffle($result);
    return implode(' ', $result);
}
function c ($str = 'Я иду с мечем судия') {
    $result = explode(' ', $str);
    shuffle($result);
    return implode(' ', $result);
}
function four($intager, $string) {
    if ((gettype($intager) != 'integer') || (0 >= $intager)) {
        die('Атрибут "$intager" должен быть натуральным положительным числом!');
    }
    $func = [1 => 'a', 2 => 'b', 3 => 'c'];
    return $func[$intager]($string);
}
echo four(3, 'Мороз в узел, лезу взором') . '<br />' . PHP_EOL;
function five($array, $string) {
    shuffle($array);
    return $array[0]($string);
}
echo four(3, 'Пал, а норов худ и дух ворона лап');

?>