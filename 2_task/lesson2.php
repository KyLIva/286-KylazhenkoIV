<?php

//http://old.code.mu/tasks/php/base/rabota-s-funkciyami-dlya-massivov-v-php.html

//1
function f(){echo '<br>', '<br>';}
$arr = [1,2,3, 1000,12,31234,23523453245,3456436,456547,56,75675];

echo count ($arr);
f();


//2

$v = count ($arr);

echo $arr [$v-1];

f();


//3

if (in_array ('3', $arr))
{
	echo 'есть';
	
}
else
{
	echo"нет"; 
	
}
f();


//4

$Egor = [1, 2, 3, 4, 5];

echo array_sum($Egor);

f();


//5

echo array_product($Egor);

f();


//6

$Vanya = count($Egor);

$huh = array_sum($Egor);

echo ($huh/ $Vanya);

f();


//7

$uh = range (1,100);
echo $uh[0],'-', $uh[99];
f();


//8

$op = range('a','z');
echo $op[0], '-', $op[25];
f();


//9

$gug =  range (1,9);

echo implode ('-', $gug);

f();

//10

$guf =  range (1,100);

echo array_sum ($guf);

f();


//11

$hip = range(1,10);

echo array_product($hip);

f();


//12

$we = array (range(1,3));
$wq = array (range('a','c'));
$re = array_merge($we,$wq);
print_r($re);

f();


//13

$result =  ['1','2','3','4','5'];
print_r (array_slice($result,1, 3));

f();


//14

(array_splice($result, 1 ,2));
print_r ($result);

f();


//15

$toto = ['1','2','3','4','5'];
print_r(array_splice($toto, 1 ,3,$aa));
$aa = [];
f();


//16

$lolo = ['1','2','3','4','5'];
array_splice($lolo,3,0,array ('a','b','c'));
print_r ($lolo);
f();

//17

$lolo = ['1','2','3','4','5'];
array_splice ($lolo,1, 0, 'a');
array_splice ($lolo,2, 0, 'b');
array_splice ($lolo,6, 0, 'c');
array_splice ($lolo,8, 0, 'e');
print_r($lolo);

f();


//18
$arr = ['a'=>'1', 'b'=>'2', 'c'=>'3'];
print_r(array_keys($arr));
echo '<br>';
print_r(array_values($arr));

f();


//19

$keys = ['a','b','c'];
$values  = ['1','2','3'];
print_r(array_combine($values,$keys));

f();


//20

$aku = ['a'=>'1', 'b'=>'2', 'c'=>'3'];

 print_r (array_flip ($aku));

f();


//21

$gugg = [1, 2, 3, 4, 5];
print_r (array_reverse($gugg) );

f();


//22
$rur = ['a', '-', 'b', '-', 'c', '-', 'd'];
print_r (array_search('-', $rur));

f();


//23

$rur = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_search('-', $rur);
array_splice ($rur,1,1);
print_r ($rur);

f();


//24

$fuga = ['a', 'b', 'c', 'd', 'e'];

print_r (array_replace($fuga,[0=>'!', 3 =>'!!']));

f();


//25

$kuh = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];

sort ($kuh);
print_r ($kuh);
echo '<br>';
 rsort ($kuh);
print_r ($kuh);
echo '<br>';
asort ($kuh);
print_r ($kuh);
echo '<br>';
ksort ($kuh);
print_r ($kuh);
echo '<br>';
krsort ($kuh);
print_r ($kuh);
echo '<br>';
natsort ($kuh);
print_r ($kuh);

f();


//26

$yoi = ['a'=>1, 'b'=>2, 'c'=>3];

print_r(array_rand($yoi,1));

f();


//27

$pou = ['a'=>1, 'b'=>2, 'c'=>3] ;

$key = array_rand($pou,1);
echo $pou[$key];

f();


//28

$luo = range(1,9);

shuffle($luo);
print_r ($luo);


f();


//29

$koi = range(1,25);

shuffle($koi);
print_r($koi);

f();


//30

$joi = range('a','z');
shuffle($joi);
print_r($joi);

f();

//31

$mario = range('a','z');
shuffle ($mario);
$supermario = array_splice($mario, 0,6);
print_r($supermario);

f();


//32

$TAtanos = [ 'a', 'b', 'c', 'b', 'a'];
$hohh = array_unique($TAtanos);
print_r($hohh);

f();


//33

$vvk =[1, 2, 3, 4, 5];
array_shift($vvk);
array_pop($vvk);

print_r($vvk);

f();


//34

$volk =[1, 2, 3, 4, 5];

array_unshift($volk, '0');
array_push($volk, '6');

print_r($volk);

f();


//35

$arr = [1, 2, 3, 4, 5, 6, 7, 8];

$str = '';
while (count($arr) > 0) {
	$str .= array_shift($arr);
	$str .= array_pop($arr);
}

	echo $str;

f();


//36

$lenin = ['a', 'b', 'c'];

$lenin = (array_pad($lenin,6, '-' ));

print_r($lenin);

f();


//37

print_r(array_fill(0,10,'x'));

f();


//38

$Denis = range(1,20);
$hohol = array_chunk($Denis,4);
print_r($hohol);

f();


//39

$sashca = [ 'a', 'b', 'c', 'b', 'a'];

$dava = array_count_values($sashca);

print_r($dava);

f();


//40

$villi = [1, 2, 3, 4, 5];

$uppi = array_map('sqrt',$villi);

print_r($uppi);

f();


//41

function vivaldi($n){
return(strip_tags ($n));
}
 
$gogol = ['<b>php</b>, <i>html</i>'];

print_r(array_map ('vivaldi',$gogol));

f();


//42

function communna($n){
return(trim ($n));
}
 
$muman = [ ' a ', ' b ', ' с '];

print_r(array_map ('communna',$muman));
f();


//43

$lenin = [1, 2, 3, 4, 5];
$stalin = [3, 4, 5, 6, 7];
$USSR = array_intersect ($lenin,$stalin);

print_r($USSR);

f();


//44

$gugu = array_diff($lenin,$stalin);

print_r($gugu);

f();


//45

$humanoid =[1,2,3,4,5,6,7,8,9,0];

$dudu = array_sum($humanoid);

print_r($dudu);

f();


//46

$gf = range(1,26);
$gg = range('a','z');

$popo = array_combine($gg,$gf);

print_r($popo);

f();


//47

$lulu = range(1,9);
$huhu = array_chunk($lulu,3); 

print_r($huhu);

f();


//48

$auau = [1, 2, 4, 5, 5];

$dada = max($auau);
$gaga = $dada;
$f = false;
 
while ($f === false){
	$gaga = $gaga - 1;
	$f = array_search($gaga, $auau);
}
echo $gaga;











































































































































































































































































































































































































?>