<?php
function hello($name)
{
    echo 'Privet ' . $name . '<br/>';
}
function bye($name)
{
    echo 'Poka ' .$name . '<br/>';
}

for ($i = 0; $i < 15; $i++)
{
    if (rand(0,1)) $func = 'hello'; else $func = 'bye';
    $func('мозг');
}


?>