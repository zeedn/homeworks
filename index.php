<?php
//zadanie 4
$age = 24;
if ($age < 25)
{
    echo 'Ebat to molody';
}elseif ($age > 25 )
{
    echo 'etit ti staryy)';
}else
{
    echo 'tebe 25';
}
echo '<br/>--------------------------------------<br/>';
//zadanie 5

$day = 5;

switch ($day){
    case 0:
        echo 'eto chto za den?)';
        break;
    case 1:
        echo 'Ponedelnik';
        break;
    case 2:
        echo 'Vtornik';
        break;
    case 3:
        echo 'Sreda';
        break;
    case 4:
        echo 'Chetverg';
        break;
    case 5:
        echo 'Lyubimaya Pyatnica';
        break;
    case 6:
        echo 'subbota';
        break;
    case 7:
        echo 'Sunday';
        break;
    default:
        echo 'def';
        break;

}
echo '<br/>--------------------------------------<br/>';
//zadanie 6

/*
$arr  = Array('1','2','3',44,Array('e','q'));
echo count($arr) . '<br/>';

echo $arr[4];

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br/>';
}

foreach ($arr as $key => $value) {
    echo $key . ' = ' . $value . '<br/>';
}
foreach ($arr as $value) {
    echo $value . '<br/>';
}*/

$bmw = [
    'model' => 'x5',
    'speed' => '120',
    'doors' => 5,
    'year'  => 2015
];

foreach ($bmw as $value) {
    echo $value . '-';
}
//zadanie 7
echo '<br/>--------------------------------------<br/>';

$rows = 6;
$cols = 5;

for ($r = 1; $r <= $rows; $r++)
{
    for ($c = 1; $c <= $cols; $c++)
    {
        echo ($r * $c);
        echo " ";
    }
    echo "<br/>";
}
?>