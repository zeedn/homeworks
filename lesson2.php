<?php

error_reporting(-1);

function func()
{
    echo 'Тело функции<br/>';
}
/*
for ($i = 0; $i < 10; $i++){
    func();
}*/

if (!function_exists('func2')){
    function func2()
    {
        echo 'Telo duncii 2';
    }
}

func();
func2();
echo '<br/>----------------<br/>';

//переменное кол-во елементов
//func_num_args() - возвр кол-во аргументов в фун-ции
//func_get_arg(n) - возвр значение n-ого аргумента фун-ции
//func_get_args() - возвр массив аргументов фун-ции

function fa()
{
    $c = func_num_args();
    echo 'TELO FUNKCII<br/>';
    echo 'l nam v funkciiyu prishlo elemnta - ' . $c . '<br/>';

    $val = func_get_arg(1);
    echo 'Znachenie elementa 1 = ' . $val . '<br/>';
}

fa(1,2,3,4);
echo '<br/>----------------<br/>';

function fu($name)
{
    echo '(f) привет, ' . $name . '<br/>';
    //global $name;
    $name = "Svetik";
    echo '(f) privet ' . $name . '<br/>';
}

$name = 'Ira';
echo 'Privet ' . $name . "<br/>";
fu('Kolyan');
echo 'Privet ' . $name . "<br/>";

function sq($dig)
{
    return $dig * $dig;
}
$res = sq(11);
echo 'Resultat: ' . $res;



?>