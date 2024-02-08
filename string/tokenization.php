<?php
$string = 'Hello world,world how are you?';
$parts1 = explode(' ', $string);
//print_r($parts1);
$parts = strtok($string," ,");

while($parts != false){
//    echo($parts . "\n");

    $parts = strtok(' ,');
}

$parts2 = preg_split("/ |,/", $string);
print_r($parts2);