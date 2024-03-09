<?php

function increaseEnthusiasm($string) {

    return $string . "!";

}

echo increaseEnthusiasm("NWR is a genius");

echo "<br>";
echo "\n";

function repeatThreeTimes($string) {
    return $string . $string . $string;
}

echo repeatThreeTimes("helloWorld");

echo "<br>";
echo "\n";

echo increaseEnthusiasm(repeatThreeTimes("SoEz"));

echo "<br>";
echo "\n";

function cut($str, $num = 10) {

    if (strlen($str) <= $num) {
        return $str;
    } 
    
    else {
        $result = '';
        for ($i = 0; $i < $num; $i++) {
            $result .= $str[$i];
        }
        return $result;
    }
}

echo cut("StrengthOfTheWorld", 8);

echo "<br>";
echo "\n";

$anyArray = array(54, 23, 2, 67, 5, -5, 12, 1);

function recursArr($array, $len, $i = 0)
{
    if ($i == $len) {
        return;
    }
    echo $array[$i] . " ";
    $i++;
    recursArr($array, $len, $i);
}

recursArr($anyArray, count($anyArray));

echo "<br>";
echo "\n";

function sumDigits($number) {
    while ($number > 9) {
        $sum = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int)($number / 10);
        }
        $number = $sum;
    }
    return $number;
}

$number = 7853;
$result = sumDigits($number);
echo "Сумма цифр числа $number равна $result";