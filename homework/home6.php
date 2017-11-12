<?php

function sortUpper($arr = [])
{
    if (! is_array($arr)) {
        echo 'Неправильный параметр, нужен массив<br>';
        return false;
    }
    sort($arr);

    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . ' : ';
    }
}
sortUpper([1,8,2,12,44,33,906]);

?>