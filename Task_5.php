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
$str_2 = "Random string" ;
echo strlen ($str_2)."<br / >"  ;
echo strrev($str_2)."<br / >"  ;
$str_3 = ( 'hello world');
echo ucfirst($str_3)."<br / >".strtoupper($str_3)."<br / >".strtolower($str_3)."<br / >"  ;
$final = "some random text 'Hello, PHP progrаmmer!' some random text" ;
$str_4 = strpos($final, "'") ;
echo ($str_4)."<br / >"  ;
$res = substr($final,18,-18);
echo $res;