<?php
//$str= "Quick brown fox jump over the lazy dog";
//$position = strpos($str, "Fox");
//$position = strpos($str, "Fox");
//echo $position;
//
//$pos = stripos($str, "quick");
//if($pos !==false){
//    echo"\nWord was found\n";
//}

//search and replace

$str= "Quick Brown cat jump over the lazy pet";

//$str = str_ireplace("brown", "brown", $str);
//$str = str_ireplace("cat", "fox", $str);
//$str = str_ireplace("pet", "dog", $str);
$str = str_ireplace(array("brown", "cat", "pet"), array("brown", "fox", "dog"), $str);
echo $str;
