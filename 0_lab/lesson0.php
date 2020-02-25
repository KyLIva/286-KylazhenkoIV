<?php
$str = "Бережков Aндрей Bячеславоич";

$str4 = explode(" ", $str);
$str1 = substr($str4[1], 0, 1);
$str3 = substr($str4[2], 0, 1);
echo $str4[0], '  ', $str1, '.', $str3, '.';


//Задние
// математичесике операции 

//Задание №2
// Преобразовать строку 
//$str = "Бережков Андрей Вячеславоич";

//в строку "Бережков А.В."
//функции - https://www.php.net/manual/ru/ref.strings.php
// вам нужна функция explode() и функция  substr()


//курс в зачет - https://fructcode.com/ru/courses/php-and-mysql/ 

//Массивы

//$arr = [7,2,3,4,6];
//$arr = ["first","second"];
//$array = array(
//  "foo" => "bar",
//"bar" => [1,2,3,4],
//);
//echo $array["bar"];
//var_dump($array);

//Задние №3 
//Задачи : http://old.code.mu/tasks/php/base/rabota-so-strokovymi-funkciyami-v-php.html


?>