<?php

function rec($a)
{
    echo 'Vhod v funkciyu (' . $a . ') <br/>';
    if ($a < 20)
    {
        rec($a +1);
    }
    echo 'vihod iz funcii (' . $a . ') <br/>';
}
rec(0);



?>