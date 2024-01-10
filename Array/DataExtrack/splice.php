<?php
//    //৩.১১ - অ্যারেকে কাটাকাটি করা
//main array change hbe
$fruits = ['banana', 'orange', 'pineapple', 'mango', 'jackfruit', 'apple'];
$newFruits = ["tomato", 'tamrind'];
$someFruits = array_splice($fruits,-5,3, $newFruits);//newfruits replacement hisabe bebohar hbe
print_r($fruits);//change hbe
print_r($someFruits);
$randomDatas = [
    "a" => 12,
    'b' => 45,
    'c' => 32,
    'd' => 40,
    12 => 12,
    'e' => 25,
];
$someRandomData = array_splice($randomDatas, 3);
// print_r($randomDatas);
// print_r($someRandomData);
