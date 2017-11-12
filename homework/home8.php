<?php

check('Азорак');
check('щабащ');
function check($str) {
    echo "Проверяем строку \"$str\"";
    $res = is_palindrom($str);
    if ($res === true)
        echo ' - это палиндром';
    else if ($res === -1) //в php есть функция elseif. И скобочки
        echo ' - передан неверный параметр';
    else
        echo ' - это не палиндром';
    echo '<br>';
}

function is_palindrom($str) {
    if (! is_string($str))
        return -1;
    $str = mb_strtolower(str_replace(' ', '', $str));
    $rev_str = utf8_strrev($str);
    return $str === $rev_str;
}


function utf8_strrev($str){
    preg_match_all('/./us', $str, $ar);
    return join('', array_reverse($ar[0])); //перед вторым параметром в функции требуется пробел
}

?>