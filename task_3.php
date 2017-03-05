<?php

$array = array('w' => 44, 'a' => 78, 'h' => 45, 'c' => 67, 'b' => 4);
// отсортировать массив по ключу
$alist = array('w' => 44, 'a' => 78, 'h' => 45, 'c' => 67, 'b' => 4);
echo "<pre>";
ksort($alist);
print_r($alist);
echo "<br />";
//отсортировать массив по значению
asort($alist);
print_r($alist);
echo "<br />";
// проверить, есть ли в массиве ключ 'f'
if (array_key_exists('f', $array)) {
    echo "ключ  найден";
} else {
    echo 'ключ не найден';
}
echo "<br />";
// проверить, есть ли в массиве ключ 'f'
if (in_array("56", $array)) {
    echo "есть такая цифра";
} else {
    echo "нет такой цифры вы банкрот";
}
echo "<br />";
//разбить массив на кусочки по два элемента.
$dima = array_chunk($array, 2);
echo print_r($dima);
echo "<br />";
//- обрезать массив. оставить в нем первые три элемента
$maloy = array_slice($array, 0, 3);
echo print_r($maloy);
echo "<br />";
//перевернуть массив местами
$reversed = array_reverse($array);
echo print_r($array);
echo "<br />";
//посчитать количество элементов в массиве.
echo count($array);
echo "<br />";
// проверить, не пустой ли массив
if (!empty($array)) {
    echo $array;
} else {
    echo 'false';
}
echo "<br />";
//вывести на экран элемент по ключу 'w'
echo print_r($array [w]);
echo "<br />";
//- присвоить значение '123' элементу с ключом 'a'
$array[a] = 123;
//- добавить в массив новый элемент с ключом 'f' и значением 55
$array[f] = 55;
echo print_r($array);
echo "<br />";
//поместить в переменную первый элемент массива 
current($array);
$d = current($array);
echo print_r($d);
echo "<br />";
//- добавить новое значение в эелемент.
$array[] = "good work dima";
// вывести на экран и посмотреть какой будет ключ нового элемента.
echo print_r($array);
echo "<br />";
$pochti = array(1, 1, 23, 45);
$final = array_unique($pochti);
echo print_r($final);
echo "<br />";
