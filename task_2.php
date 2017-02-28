<?php
$str =  "   Харьков, Львов, Днепропетровск " ;
echo str_replace(" ","",$str);
echo "<br / >" ;

$text = "   Харьков, Львов, Днепропетровск ";


echo trim($text) ;


echo "<br / >" ;
$string = "067-123-45-67" ;

echo str_replace("067", "095", $string) ;
echo "<br / >" ;
$str_1 = " <!DOCTYPE html><html><head><script>window.getYourPrivateBrowserCoockiesDataAndSendToBadGuys();<script></head><body>Site Content</body></html> " ;
echo strip_tags($str_1);

echo "<br / >" ;
// сделать первую букву в верхнем регистре
$str_2 = "Random string" ;
//сделать первые буквы всех слов в верхнем регистре
echo strlen ($str_2)."<br / >"  ;
// Сделать всю строку в верхнем регистре
echo strrev($str_2)."<br / >"  ;
$str_3 = ( 'hello world');
//- сделать всю строку в нижнем регистре
echo ucfirst($str_3)."<br / >".strtoupper($str_3)."<br / >".strtolower($str_3)."<br / >"  ;
//обрезаю строку по заданному символу 

$final = "some random text 'Hello, PHP progrаmmer!' some random text" ;

echo "<br / >" ;

$domain = explode("'", $final);
echo $domain[1];