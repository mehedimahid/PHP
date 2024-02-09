<?php
$str= "Quick brown fox jump over the lazy dog";
//$position = strpos($str, "Fox");
$position = strpos($str, "Fox");
echo $position;

$pos = stripos($str, "quick");
if($pos !==false){
    echo"\nWord was found\n";
}