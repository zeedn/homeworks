<?php


$greet = function ($name)
{
    echo 'Privet ' .  $name . "!<br/>";
};
$greet('Bogdan');

echo '<br/>--------------------------------<br/>';

$name2 = 'Petya';
$greet2 = function ($name) use ($name2)
{
    echo 'privet ' . $name . '!! i Privet ' . $name2 . '<br/>';
};
$greet2('llele');


?>