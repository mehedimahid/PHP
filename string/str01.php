<?php
$str = "Hello World";
//echo $str;
//echo substr($str, -5);//output world;
echo PHP_EOL;
//echo substr($str,4,3);//output o w;
//$subString = substr($str, 6);
//echo $subString;
//echo $str;
                //৬.৪ - স্ট্রিং রিভার্স করা
$length = strlen($str)-1;
for ($i = $length; $i>=0; $i--){
    echo $str[$i];
}
echo PHP_EOL;

for($i =1; $i<= strlen($str); $i++){
    echo $str[$i * (-1)];

}
echo PHP_EOL;

echo strrev($str);