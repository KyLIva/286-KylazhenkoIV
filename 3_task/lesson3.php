<?php

//https://www.php.net/manual/ru/function.argument.php
//https://www.w3shools.com/php/php_includes.asp

function f()
{
    echo '<br>', '<br>';
}

//1

function goha($n)
{
    return ($n + 10);
}

echo $a = goha(3);

f();

//2

function pythagor($n, $h)
{
    return (pow($n, 2) + pow($h, 2));


}

echo $b = pythagor(2, 3);

f();

//3

function col(...$arr)
{
    $joj = array_sum($arr);
    $ho = count($arr);
    echo $joj / $ho;
}

col(4, 5, 6, 78, 3, 4);

f();

//4

function gog($num1, $num2, $operator)
{
//	return($num1, $num2, $operator);
}

echo $kok = gog(1, 2, 35, '+');

f();


//5


?>