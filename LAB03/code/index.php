<?php

// задание 1.1

$string = 'ahb acb aeb aeeb adcb axeb';
$regular = '/a..b/';
preg_match_all($regular, $string, $matches);

foreach($matches[0] as $i)
{
    echo $i."<br>";
}

// задание 1.2

$string = 'a1b2c3';

function exponentiation($matches) 
{
    return pow($matches[0], 3);
}

$new_string = preg_replace_callback('/\d+/', 'exponentiation', $string);

echo $new_string;