<?php

// %

$a = 10;
$b = 3;

$rest = $a % $b;

echo $rest;

echo "<br>";
echo "\n";

if ($rest == 0) {
    echo "Делится без остатка с результатом: ";
    echo $a / $b;
}
else {
    echo "Делится с остатком: ";
    echo $rest;
}

echo "<br>";
echo "\n";

// Cтепень и корень

$st = pow(2,10);
echo sqrt(245);

echo "<br>";
echo "\n";

$array = array(4,2,5,19,13,0,10);
$sum = 0;
foreach ($array as $value) {
    $sum += pow($value, 2);
}
echo "Результат операций с массивом: " . sqrt($sum);

echo "<br>";
echo "\n";

// округление

$num379 = sqrt(379);

echo round($num379);
echo "<br>";
echo "\n";
echo round($num379,1);
echo "<br>";
echo "\n";
echo round($num379,2);

echo "<br>";
echo "\n";

// округление до нижней и верхней границ

$num587 = sqrt(587);

$floorCeil = array(
    "floor" => floor($num587),
    "ceil" => ceil($num587)
);

// минимум и максимум

$MinMax = array(4,-2,5,19,-130,0,10);

echo min($MinMax);
echo "<br>";
echo "\n";
echo max($MinMax);

// рандом

echo rand(1,100);

for ($i = 0; $i < 10; $i++) {
    $randArr[] = rand[];
}

foreach ($randArr as $value) {
    echo $value . " ";
}

echo "<br>";
echo "\n";

// модуль

for ($i = 0; $i < 3; $i++) {
    $a = rand(1, 25);
    $b = rand(1, 25);
    echo abs($a - $b);
    echo "<br>";
    echo "\n";
}

$Arr = array(1,2,-1,-2,3,-3);
$postArr = array[];

foreach ($Arr as $value) {
    $postArr[] = abs($value);
}

foreach ($postArr as $value) {
    echo $value . " ";
}


echo "<br>";
echo "\n";

// общее:1

$anyNum = 228;

$anyArr = array[];

for ($i=1; $i <= 228; $i++) {
    if (($anyNum % $i) == 0) {
        $anyArr[] = $i;
    }
}

foreach ($anyArr as $value) {
    echo $value . " ";
}

echo "<br>";
echo "\n";

// общее:2

$sumArr = array(1,2,3,4,5,6,7,8,9,10);
$sum10 = 0;
$count = 0;
foreach ($sumArr as $value) {
    $sum10 += $value;
    $count += 1;
    if ($sum10 > 10) {
        echo "Количество первых элементов массива: $count.";
        break;
    }
}