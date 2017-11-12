<?php

function table($rows,$cols)
{
    if(!is_int($rows) and !is_int($cols))
    {
        die("Не допустимый формат!");
    }
    for ($r = 1; $r <= $rows; $r++)
    {
        for ($c = 1; $c <= $cols; $c++)
        {
            echo ($r * $c);
            echo " ";
        }
        echo "<br/>";
    }
}
table(6,5);


?>