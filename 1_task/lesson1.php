<?php

//1
echo strtoupper('php');
echo '<br>';
echo '<br>';


//2

echo strtolower('PHP');
echo '<br>';
echo '<br>';


//3

echo ucfirst(strtolower('london'));
echo '<br>';
echo '<br>';


//4

echo strtolower('London');
echo '<br>';
echo '<br>';


//5

echo ucwords('london is the capital of great britain');
echo '<br>';
echo '<br>';

//6

echo ucfirst(strtolower('LONDON'));
echo '<br>';
echo '<br>';


//7
echo strlen($arr);
echo '<br>';
echo '<br>';


//8

$password = '2436576762212';
$fg = strlen($password);
if ($fg < 10 and $fg > 5) {
    echo 'parol veren';
} else {
    echo 'parol ne veren';
}
echo '<br>';
echo '<br>';


//9

$fff = "html css php";


echo substr($fff, 0, 4);
echo '<br>';


echo substr($fff, 5, 3);
echo '<br>';


echo substr($fff, 9, 3);
echo '<br>';
echo '<br>';


//10


$lll = '43627463274fiudufernf123';

echo substr($lll, -3);
echo '<br>';
echo '<br>';


//11

$mmm = 'https://translate.yandex.ru';
$r = substr($mmm, 0, 7);
if ($r == 'http://') {
    echo 'да';
} else {
    echo 'нет';
}
echo '<br>';
echo '<br>';


//12

$mmm = 'https://translate.yandex.ru';

$g = substr($mmm, 0, 7);
$q = substr($mmm, 0, 8);


if ($g == 'http://' or $q == 'https://') {
    echo 'да';
} else {
    echo 'нет';
}
echo '<br>';
echo '<br>';


//13

$lll = '43627463274fiudufernf123.png';

$z = substr($lll, -4);

if ($z == '.png') {
    echo 'да';
} else {
    echo 'нет';
}
echo '<br>';
echo '<br>';


//14

$lll = '43627463274fiudufernf123.jpg';

$z = substr($lll, -4);

if ($z == '.png' or $z == '.jpg') {
    echo 'да';
} else {
    echo 'нет';
}
echo '<br>';
echo '<br>';


//15

$l = 'World in fire';
$qw = strlen($l);

if ($qw > 5) {
    echo substr($l, 5), '...';
} else {
    echo $l;
}
echo '<br>';
echo '<br>';


//16

$mum = '31.12.2013';

echo str_replace('.', '-', $mum);
echo '<br>';
echo '<br>';


//17

$str = 'Baby, Ivan, Egor, Alexsandr, Caca';


$we = str_replace('a', '1', $str);
$wr = str_replace('b', '2', $we);
$wt = str_replace('c', '3', $wr);

echo $wt;

echo '<br>';
echo '<br>';


//18

$qa = '1a2b3c4b5d6e7f8g9h0';

$qd = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');

$qs = str_replace($qd, '', $qa);

echo $qs;


echo '<br>';
echo '<br>';


//19 (1);

$str = '213432123143123';


$we = str_replace('1', 'a', $str);
$wr = str_replace('2', 'b', $we);
$wt = str_replace('3', 'c', $wr);

echo $wt;

echo '<br>';
echo '<br>';


//19(2)

$str = '213432123143123';


echo strtr($str, '123', 'abc');
$wr = array('1' => 'a', '2' => 'b', '3' => 'c');

echo strtr($str, $wr);

echo '<br>';
echo '<br>';


//20

$str = '213432123143123';

echo substr_replace($str, '!!!', 3, 5);

echo '<br>';
echo '<br>';


//21

$humanoid = 'abs abs abs';

echo 'первая буква "b" = ', strpos($humanoid, 'b');
echo '<br>';
echo '<br>';


//22

$humanoid = 'abs abs abs';

echo 'последняя буква "b" = ', strrpos($humanoid, 'b');
echo '<br>';
echo '<br>';


//23

$humanoid = 'abs abs abs';

echo 'последняя буква "b" начианя с 3 строки = ', strpos($humanoid, 'b', 3);
echo '<br>';
echo '<br>';


//24

$humanoaid = 'aaa aaa aaa aaa aaa';

echo 'позиция 2 пробела в строке = ', strpos($humanoaid, ' ', 4);
echo '<br>';
echo '<br>';


//25

$human = '/ aaa aaa aaa aaa aaa,  ';

$hgf = strpos($human, '..');

if ($hgf >= 0) {
    echo 'Есть';

} else {
    echo 'Нет';
}

echo '<br>';
echo '<br>';

//26

$hufman = '   ';

$hgff = strpos($hufman, 'http://');

if ($hgff == false) {
    echo 'No';

} else {
    echo 'Yes';
}

echo '<br>';
echo '<br>';


//27

$lkj = 'html css php';

$jng = explode(' ', $lkj);

echo $jng[0], '<br>', $jng[1], '<br>', $jng[2];

echo '<br>';
echo '<br>';


//28

echo implode(', ', $jng);

echo '<br>';
echo '<br>';


//29

$date = '2013-12-31';

$kkk = explode('-', $date);

echo implode('.', $kkk);

echo '<br>';
echo '<br>';


//30 

$hhh = '1234567890';

$jjj = str_split($hhh, 2);

echo $jjj[0];
echo '<br>';
echo $jjj[1];
echo '<br>';
echo $jjj[2];
echo '<br>';
echo $jjj[3];
echo '<br>';
echo $jjj[4];


echo '<br>';
echo '<br>';

//31

$hhh = '1234567890';

$jjj = str_split($hhh, 1);

echo $jjj[0];
echo '<br>';
echo $jjj[1];
echo '<br>';
echo $jjj[2];
echo '<br>';
echo $jjj[3];
echo '<br>';
echo $jjj[4];
echo '<br>';
echo $jjj[5];
echo '<br>';
echo $jjj[6];
echo '<br>';
echo $jjj[7];
echo '<br>';
echo $jjj[8];

echo '<br>';
echo '<br>';

//32

$jjj = str_split($hhh, 2);

echo $jjj[0];
echo '-';
echo $jjj[1];
echo '-';
echo $jjj[2];
echo '-';
echo $jjj[3];
echo '-';
echo $jjj[4];

echo '<br>';
echo '<br>';

//33

$wein = ('dfsvoidsf 9fh9dnfd oef9           f  ');
echo rtrim($wein, 0);

echo '<br>';
echo '<br>';


//34

$jil = ('/php/');

$ggl = rtrim($jil, '/');
$jjfdf = ltrim($ggl, '/');

echo $jjfdf;

echo '<br>';
echo '<br>';


//35

$val = ('слова слова слова');


echo rtrim($val, '. '), '. ';

echo '<br>';
echo '<br>';


//36

echo strrev('12345');

echo '<br>';
echo '<br>';


//37

echo strrev('палиндромом ');

echo '<br>';
echo '<br>';


//38

$lav = ('VANfA, HOfdME, RsIVER');

echo str_shuffle($lav);


echo '<br>';
echo '<br>';


//39

$lav = ('egfcdsw');

$op = str_shuffle($lav);
echo substr($op, 0, 6);

echo '<br>';
echo '<br>';


//40

echo number_format('12345678', 0, ' ', ' ');

echo '<br>';
echo '<br>';


//41

for ($i = 1; $i < 10; $i++) echo str_repeat('x', $i), '<br>';
echo '<br>';
echo '<br>';


//42


for ($i = 1; $i < 10;) echo str_repeat($i++, $i), '<br>';
echo '<br>';
echo '<br>';


//43

echo strip_tags('html, <b>php</b>, js');

echo '<br>';
echo '<br>';


//44

$str = ('<i>html</i>, <b>php</b>, <a>js</a>');

echo strip_tags($str, '<i><b>');

echo '<br>';
echo '<br>';


//45

echo strip_tags('html, <b>php</b>, js');

echo '<br>';
echo '<br>';


//46

echo ord('a');
echo '<br>';

echo ord('b');
echo '<br>';

echo ord('c');
echo '<br>';

echo ord(' ');
echo '<br>';


//47

echo ord(a), ' - 1 прописная буква в анг. алфавите';
echo '<br>';

echo ord(z), ' - последняя прописная буква в анг. алфавите';
echo '<br>';

echo ord(A), ' - 1 заглавная буква в анг. алфавите';
echo '<br>';

echo ord(Z), ' - Последняя заглавная буква в анг. алфавите';
echo '<br>';
echo '<br>';


//48

echo chr(33);

echo '<br>';
echo '<br>';


//49

$KUK1 = rand(65, 90);
echo chr($KUK1);

echo '<br>';
echo '<br>';


//50

$len = 25;
$word = "";
for ($i = 0; $i < $len; $i++) {
    $word = $word . chr(rand(97, 122));
}
echo $word;

echo '<br>';
echo '<br>';

//51

$gug = 'K';
$gug1 = ord($gug);
if ($gug1 <= 90) {
    echo $gug, ' - Заглавная буква';
} else {
    echo $gug, ' - Прописная буква';
}

echo '<br>';
echo '<br>';


//52

$lul = 'ab--cd--ef';

echo strchr($lul, '--cd--ef');

echo '<br>';
echo '<br>';


//53

echo strchr($lul, '-ef');

echo '<br>';
echo '<br>';


//54

echo strstr($lul, '--cd--ef');

echo '<br>';
echo '<br>';


//55

$manu = 'var_test_text';

$mama = explode('_', $manu);
$mama[1] = ucfirst($mama[1]);
$mama[2] = ucfirst($mama[2]);
echo $manu = implode($mama);

echo '<br>';
echo '<br>';


//56

$cava = array(324, 43, 21, 54);
for ($ham = 0; $ham < 5; $ham++) {
    $java = strpos($cava[$ham], '3');
    if ($java !== false) {
        echo $cava[$ham], ', ';
    }
}


?>