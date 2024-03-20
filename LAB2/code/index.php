<?php

$emptArr = array();

function XArray($array, $count) {
    for ($i=1; $i<=$count; $i++) {
        $array() = str_repeat("x", $i);
    }

    foreach ($array as $value) {
        echo "\n";
        echo $value;
    }
}

echo XArray($emptArr, 4);

echo "<br>";
echo "\n";

$emptyArr2 = array();

function arrayFill($elem, $count) {
    for ($i=0; $i<$count; $i++) {
        $emptyArr2() = $elem;
    }

    foreach ($emptyArr2 as $value) {
        echo "\n";
        echo $value;
    }
}

echo arrayFill('x', 5);

echo "<br>";
echo "\n";

$mas2nArr = array(
    array(1, 2, 3),
    array(4, 5),
    array(6)
);

function mas2Arr($mas2nArr)
{
    $sum = 0;
    foreach ($mas2nArr as $array) {
        foreach ($array as $elem) {
            $sum += $elem;
        }
    }
    return $sum;
}

echo mas2Arr($mas2nArr);

echo "<br>";
echo "\n";

$count = 1;
$array2d = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = &$count; $j < 10; $j++) {
        $array2d($i)() = $j;
    }
}

foreach ($array2d as $array) {
    foreach ($array as $elem) {
        echo $elem . ' ';
    }
}

echo "<br>";
echo "\n";

$arrayN = array(2, 5, 3, 9);

$firstNumber = $arrayN(0) * $arrayN(1);
$secondNumber = $arrayN(2) * $arrayN(3);
$result = $firstNumber + $secondNumber;
echo $result;

echo "<br>";
echo "\n";

$user = array(
    'firstName' => 'George',
    'lastName' => 'Lyamin',
    'patronymic' => 'Winding'
);
echo $user['firstName'] . ' ' . $user['lastName'] . ' ' . $user['patronymic'];

echo "<br>";
echo "\n";

$date = array('year' => 2001, 'month' => 9, 'day' => 11);
$str = '';
foreach ($date as $value) {
    $str .= $value . '-';
}
$str = substr($str, 0, -1);
echo $str;

echo "<br>";
echo "\n";

$arr = ('a', 'b', 'c', 'd', 'e');
$count = 0;
foreach ($arr as $elem) {
    $count++;
}
echo $count;
echo $arr($count - 1);
echo $arr($count - 2);