<?php

//Практическая частьВначале написать самом ответы, а потом проверить себя Что выведет?

$a = 0;
$b = '0';
$c = '0.00';
$d = 0.00;
$e = '';
$f = null;
$g = 'null';
$h = 'a0';
$j = 'a' . 0;
$k = '0a';
$l = 0 . 'a';
$z = 5;
$i = '5';
$x = '1';
$v = false;
$n = true;
$s = 'false';
$w = 'true';
//$r = [];
$t = '    ';

echo "<br />" . $a > $b; //По идее должно ничего не выводить , но вывводится единица
echo $z > $i; //falce
echo "<br/>";
echo "<br/>" . $b > $r; //true
echo "<br/>" . $g > $f; //true
echo "<br/>" . $k > $j; //false
//echo "<br/>" . $a / $b; //на 0 делить нельзя
echo "<br/>" . $a * $b; // 0
echo "<br/>" . $z / $i; //1
echo "<br/>" . $z * $i; //25
echo "<br/>" . $r / $z; //0

var_dump($z == $i); //true 
var_dump($a == $b); //true 
echo "<br/>";
var_dump($a == $c); //true 
echo "<br/>";
var_dump($a == $f); //true
echo "<br/>";
var_dump($a == $g); //true 
echo "<br/>";
var_dump($a == $v); //true 
echo "<br/>";
var_dump($a == $r); //true
echo "<br/>";
var_dump($a == $t); //true
echo "<br/>";
var_dump($a == $e); //true
echo "<br/>";
var_dump($c == $f); //false
echo "<br/>";
var_dump($c == $g); //false
echo "<br/>";
var_dump($c == $v); //false
echo "<br/>";
var_dump($c == $s); //false
echo "<br/>";
var_dump($c == $r); //false
echo "<br/>";
var_dump($c == $t); //false
echo "<br/>";
var_dump($c == $e); //false
echo "<br/>";
var_dump($s == $v); //я думал, что true,но окозалось false
//echo "<br/>";
var_dump($v === $a); //False
echo "<br/>";
var_dump($v === $r); //False
echo "<br/>";
var_dump($v === null); //False
var_dump($a === $d); //False
echo "<br/>";
var_dump($a === $b); //False
echo "<br/>";
var_dump($z === $i); //False
echo "<br/>";
var_dump($a + $b); // 0
echo "<br/>";
var_dump($l + $j); //0
echo "<br/>";
var_dump($h + $k); //0
echo "<br/>";
var_dump($z + $i); //10
echo "<br/>";
var_dump($a - $b); //0
echo "<br/>";
var_dump($z - $i); //0
echo "<br/>";
var_dump($a . $b); //00
echo "<br/>";
var_dump($z . $i); //55
echo "<br/>";
var_dump($c . $d); //я думал 0.000.00 , но получилось 0.000 ,Маша обьяснила почему)
echo "<br/>";
var_dump($f . $g); //null
echo "<br/>";
var_dump($s . $r); //false