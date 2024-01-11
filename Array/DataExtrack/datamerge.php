<?php
$fruits = ['banana', 'orange', 'pineapple', 'mango', 'jackfruit', 'apple'];
$f1 = array_slice($fruits, 0,3);
$f2 = array_slice($fruits, 3, null, true);
//      //2ti array ke aksate jog kora
$arrayMerge = array_merge($f1, $f2);
// print_r($arrayMerge);
$arrayplus = $f1 + $f2;
// print_r($arrayplus);
$randomDatas = [
    "a" => 12,
    'b' => 45,
    'c' => 32,
    'd' => 40,
    12 => 12,
    'e' => 25,
];

$r1 = array_slice($randomDatas, 0,3, true);
$r2 = array_slice($randomDatas, 2, null, true);
$r3 = array('f'=>30, 'g'=>35);
$rDataMerge = array_merge($r1,$r2,$r3);//wrong way
$rDataplus = $r1+$r2+$r3;//correct way
print_r($rDataMerge);
print_r($rDataplus);
