<?php

$param = 4234;
$param2 = 754;
/*
@var int $fhee 
*/
$fhee = $param + $param2;
$fhee1 = $param - $param2;
$fhee2 = $param * $param2;
$fhee3 = $param / $param2;
$fhee4 = $param = $param2;

echo $fhee, '      ';


echo $fhee1;
echo '<br>';

echo $fhee2;
echo '<br>';

echo $fhee3;
echo '<br>';

echo $fhee4;
echo '<br>';


//Задние 
// математичесике операции 

//Задание №2
// Преобразовать строку 
$str = "Бережков Андрей Вячеславоич";
//в строку "Бережков А.В."
//функции - https://www.php.net/manual/ru/ref.strings.php
// вам нужна функция explode() и функция  substr()


//курс в зачет - https://fructcode.com/ru/courses/php-and-mysql/ 

//Массивы

$arr = [7, 2, 3, 4, 6];
//$arr = ["first","second"];
$array = array(
    "foo" => "bar",
    "bar" => [1, 2, 3, 4],
);
//echo $array["bar"];
//var_dump($array);
//Задние №3 
//Задачи : http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html


?>